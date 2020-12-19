### How to use :

1) Download the code.

2) You got a database script with name "realtime.sql", just import that script into your database named "realtime" (You may use your name but you have to change database name in CodeIgniter's database.php also.

3) Put the downloaded code in your web root folder (www or htdocs... whatever it may be).

4) Goto 
    application/config/constants.php
    
  Change the constant BROADCAST_URL and set it as IP of your own computer.

5) Open Command Prompt
  Move towards your webroot folder.
  We are having our websocket code at following path in our project.
  ```sh
  application/third_party/Realtime/bin/server.php
  ```
  
  We have to run that server.php file from command prompt.
  
  Just move to that folder by using "cd" command.
  ```sh
  c:/>cd xampp\htdocs\ci-ratchet\application\third_party\Realtime\bin
  ```
    
  Press enter.. Now you are in that directory specifically, just run following command.
  ```sh
  c:\xampp\htdocs\ci-ratchet\application\third_party\Realtime\bin>php server.php
  ```
  
  If its error free and noting is populated, then its supposed that you got the success to start the websocket server.
  
  6) Now run your ci-ratchet project in browser by hitting url.
  ```sh
  http://localhost/ci-ratchet/
  ```

  Once AngularJS initialize, you can see the Textbox, just start typing and press enter.... VOLLAAAAAAAAA

  Its working
  
7) Check it in another browser for realtime experience.

8) It has some permission issues on shared hosting, so it will gives throw some error. Check issue @ https://github.com/ratchetphp/Ratchet/issues/409

It will work for sure if you have same user for your VPS and shared hosting space.

### What I used?

1) **CodeIgniter** 3.x PHP Framework (https://www.codeigniter.com/) 

2) **Ratchet** - Websocket for PHP (http://socketo.me/) by Chris Boden(@boden_c)

3) **AngularJS** - A superheroic Javascript MVW Framework by Google


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
