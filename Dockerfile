FROM php:7.2-apache

COPY src/ /var/www/html/public
EXPOSE 80

ENV APP_ROOT src/ /var/www/html/public
ENV DOCKER_PATH .

RUN apt-get update -qq && apt-get install -y \
  build-essential \
  libpq-dev \
  libpng-dev \
  postgresql-client-9.4 \
  mysql-client

# extensions php install
RUN docker-php-ext-install \
   zip pgsql pdo_pgsql

# Node.js
RUN curl -sL https://deb.nodesource.com/setup_8.x | bash - \
&& apt-get install -y nodejs && npm i npm@latest -g

# cross-env global
RUN npm install -g cross-env

# Composer install
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN apt install zip unzip

WORKDIR $APP_ROOT

COPY $DOCKER_PATH/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY . .

RUN chown -R www-data:www-data . && a2enmod rewrite

RUN service apache2 restart

EXPOSE 80

# Clean up APT when done
RUN apt-get clean && rm -rf /var/lib/apt/lists/*