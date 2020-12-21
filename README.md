# gianyar_app

Pada Repo ini terdapat contoh script untuk menjalankan database mysql versi 8 dengan menggunakan `docker-compose`. 
Terdapat catatan khusus dalam menjalankan mysql versi ini, dimana harus menyertakan argument tambahan 
`command: --default-authentication-plugin=mysql_native_password` untuk mengaktifkan mysql native password. Jika tidak,
aplikasi dengan client version lama tidak akan bisa terkoneksi dengan database.

Repo ini juga menyertakan data awal untuk aplikasi gianyar_app, seperti yang telah dideskripsikan di lembaran soal. 
Untuk menghidupkan database server, jalankan perintah berikut:
```
docker-compose up
```

Untuk mematikan database server, tekan tombol `ctrl + c`, atau sesuai dengan sistem operasi masing-masing. Kemudian jalankan
perintah
```
docker-compose down
```

atau dapat juga dengan menggunakan perintah berikut
```
docker-compose up -d
```
untuk menjalankannya sebagai service. dan untuk mematikan database server menggunakan perintah yang sama `docker-compose down`



### Catatan
Jika pada komputer anda sudah memiliki database server mysql berjalan di port `3306`, ubah file `docker-compose.yml` bagian port 
dengan port lainnya, semisal: `3308:3306`, agar tidak bentrok.

Setiap kali anda menjalankan ulang database server, setelah mematikannya dengan `docker-compose down`, semua data awal akan hilang
dan diisikan kembali dengan data initialisasi.
