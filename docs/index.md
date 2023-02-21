# Sardjito Server Monitoring
Selamat datang di halaman dokumentasi web app kami. Disini kami membahas semua fitur-fitur yang ada untuk pengguna dan juga penjelasan source code 
untuk pengembangan selanjutnya.  

## Daftar isi
* TOC  
{:toc}

## Untuk Pengguna

Sardjito Server Monitoring dikembangkan karena ISIRS membutuhkan sarana untuk mengolah data log yang didapatkan dari semua server yang berjalan di sistem. 
Berikut apa saja yang bisa anda lakukan dengan aplikasi web ini.

---

### Melihat jumlah server yang sedang aktif saat ini

Di halaman utama, sebuah grafik akan terus mengambil data log terkini mengenai jumlah server yang memiliki status aktif (atau status "1" di dalam log) selama 1 jam terakhir. Grafik akan otomatis terupdate setiap 10 detik. Anda bisa mendekatkan kursor ke setiap bar untuk melihat jumlah server yang aktif pada waktu tertentu.  

![jumlah-server-aktif](https://user-images.githubusercontent.com/72925939/213085772-097d4af0-d56e-42a0-8d6f-3a45a1ece566.jpg)


---

### Melihat kapan saja server mengalami down

Tombol "Server Statuses" di halaman utama akan membuka sebuah sub halaman di bawah yang berjudul "Grafik Status Tiap Server". Didalamnya, Anda dapat melihat jalannya status semua server dalam jangka sehari.  
  
Pilih tanggal hari yang diinginkan. Aplikasi akan mengambil log dari semua server yang memiliki timestamp yang sama dengan tanggal tersebut.  
  
Setelah suatu tanggal dipilih, aplikasi akan secara otomatis mulai memuat grafik dari log-log tersebut. 

> ![warning](https://user-images.githubusercontent.com/72925939/213122914-af38c80d-afcd-44f7-82fc-0985747fd91a.svg)  
> **Penting untuk membiarkan semua grafik selesai memuat sebelum memilih tanggal baru.**  
  
Setiap grafik hanya menunjukkan keberadaan status sebuah server sebagai "0" atau "1". **Untuk melihat kapan server mengalami down**, dapat mendekatkan kursor ke titik dimana grafik mengalami penurunan. Anda akan melihat timestamp persis dimana status "0" itu terekam.  

![kapan-server-down](https://user-images.githubusercontent.com/72925939/213085109-96b8a355-919a-4496-955b-dbc80194efb4.jpg)

Selain melihat status server hari ini, Anda juga dapat melihat status server di hari-hari sebelumnya.  
  
Tanggal yang menunjuk hari di masa depan hanya akan memuat grafik yang kosong.  
   
> ![info](https://user-images.githubusercontent.com/72925939/213124474-9bf16ef5-91ec-49e2-a874-8b511fa993ed.svg)  
>**Anda harus reload secara manual untuk melihat status 'Hari ini' yang paling terkini.**

---

### Melihat performa sebuah server selama setahun, dan pada bulan apa server paling sering mengalami down

Tombol "Monthly Performance" dan "Yearly performance" memiliki fungsi yang relatif sama. Halaman Yearly Performance menunjukkan persentase keaktifan tiap server yang ditinjau selama setahun. Sedangkan halaman Monthly Performance menunjukkan persentase keaktifan sebuah server tertentu tiap bulannya.  
  
Persentase yang ditunjukkan adalah banyaknya jumlah status "1" yang terekam dibandingkan dengan total jumlah semua rekaman, dengan kata lain, seberapa sering sebuah server tersebut memiliki status aktif dalam semua rekaman log nya.
  
**Jika ingin melihat performa suatu server dalam setahun,** pergi ke halaman Yearly Performance dan pilih "Performa Tahun ini" atau "Performa Tahun lalu", lalu temukan nama server yang Anda inginkan.

![persentasi-database-001](https://user-images.githubusercontent.com/72925939/213086323-39d8fc0d-93b5-4873-99dd-022125710678.jpg)


**Jika ingin melihat kapan saja sebuah server paling sering mengalami down,** pergi ke Monthly Performance dan pilih salah satu server di dalam kolom. Klik tombol "Tahun ini" atau "Tahun lalu" sesuai dengan informasi yang Anda cari. Aplikasi akan menampilkan grafik performa server itu tiap bulannya, termasuk bulan yang memiliki angka persentase paling kecil. 

![persentasi-database-kecil-001](https://user-images.githubusercontent.com/72925939/213086345-910d888f-7e15-49e1-b973-62ecafc37a85.jpg)


---

### Melihat berapa total durasi waktu server mengalami down

Tergantung jika Anda melihat data Monthly atau Yearly, anda dapat melihat total durasi waktu down dengan melihat berapa jumlah status 'inactive' sebuah server.

klik kotak hijau berlabel 'active' di atas grafik. Label data yang di klik akan tereliminasi dari grafik tersebut. Dekatkan kursor ke grafik sehingga dapat terlihat lebih jelas berapa jumlah status 'inactive' yang direkam dari server. 

![image](https://user-images.githubusercontent.com/72925939/217984558-07fee9ae-3eb1-4710-84cc-65bf1c559df3.png)

Setelah ditelusuri, database menyimpan tiap log status server dengan jeda kurang lebih 6 menit. Maka, dapat diperkirakan total durasi waktu server diatas mengalami down pada tahun 2022 adalah **maksimal** 13 x 6 menit, yaitu 78 menit atau 1.3 jam. 

---

### Menyimpan grafik sebagai gambar

Setiap grafik yang tampil dapat langsung disimpan sebagai gambar .png dengan mengklik-kanan grafik tersebut dan menekan "Save image as..."

![save-as](https://user-images.githubusercontent.com/72925939/213106137-28b1d14a-757d-4759-bafc-a22a1fface6f.jpg)

---


---

## Untuk Pengembang

Jikalau aplikasi ini ingin dikembangkan lebih lanjut, berikut penjelasan mengenai source code dan dependencies aplikasi ini yang sekiranya dapat membantu.

---

### Dependencies

Aplikasi ini menggunakan pure php tanpa framework maupun package manajer apapun. Langkah-langkah mempersiapkan environment development nya dapat dilihat dalam [README](https://github.com/annisaraihana/Server-Monitoring#--server-monitoring-isirs-sardjito) di halaman depan. Meski begitu, ada beberapa library yang kami gunakan dalam pengembangannya.



#### Chart.js

Aplikasi ini menggunakan library javascript bernama **Chart.js** dalam men-generate grafik-grafik yang ada. Versi Chart.js yang kami gunakan adalah versi yang outdated, yaitu 2.7.2. Ini dikarenakan salah satu plugin yang membantu menampilkan jumlah persentase hanya berfungsi di versi itu. Untuk dokumentasi Chart.js versi 2.7.2, dapat dilihat [di sini.](https://www.chartjs.org/docs/2.7.2/)

#### JQuery

Kami menggunakan JQuery untuk mempermudah pengoperasian fungsi-fungsi javascript dan pengambilan data dari database. Dokumentasi JQuery ada [di sini.](https://api.jquery.com/)

#### Tailwind CSS

Tailwind adalah sebuah framework CSS yang dapat membantu pembuatan antarmuka website dengan cepat, namun bukan merupakan sebuah template, sehingga tetap fleksible.  

Tailwind menyediakan class-class yang dapat digunakan secara langsung di inline html sehingga kita tidak perlu membuat file style.css sendiri.

- **Penginstallan Tailwind CSS**

Tailwind.exe mengetrack setiap perubahan file html dan secara otomatis meng-output file .css yang berisi konfigurasi semua class yang kita gunakan di dalam file html tersebut. Penginstallannya tanpa menggunakan package manager pun cukup mudah.

buka terminal di folder root, ketikkan command-command berikut,

```Shell
# Untuk membuat file tailwind.config.js (seharusnya sudah ada)
./tailwindcss init

# Untuk memulai sebuah watcher yang akan mengetrack secara otomatis 
./tailwindcss -i css/input.css -o css/output.css --watch

# jika hanya ingin meng Compile and minify CSS nya
./tailwindcss -i css/input.css -o css/output.css --minify
```

Untuk dokumentasi penggunaan tailwind, dapat dilihat [di sini.](https://tailwindcss.com/docs/)

---

### Struktur kode

Konten di tiap halaman web app ini biasanya dikontrol langsung oleh beberapa fungsi javascript dan php. Berikut hubungan antara tiap halaman dan file js dan php nya masing-masing:

|Folder  | pages/      | js/          | data/     |
|------  | ---      |---        |---        |
|        | home.php      | DisplayActiveServersChart.js       | ActiveServers_data.php   |
|       | Server_Statuses.php   | DisplayStatusChart.js        | GetServiceNames_data.php, ServerStatuses_data.php|
|      | EachServersMonthly_Performance.php. | DisplayEachServersAllMonth.js        | GetServiceNames_data.php, ServerPercentageAllMonth_data.php|
|      | Yearly_Performance.php | DisplayPercentagesYear.js        | GetServiceNames_data.php, ServerPercentageYearly_data.php, ServerPercentagePrevYear_data.php |
| (deprecated) | Monthly_Performance.php | DisplayPercentagesMonth.js | GetServiceNames_data.php, ServerPercentage_data.php|


Untuk fungsi login dan autentikasi, berikut file-filenya yang berhubungan dengan satu sama lain:

|Folder| root | pages/ | auth/
|--|--|--|--|
| | index.html | | authenticate.php|
| | | AccountRegister.php | register.php |
| | top menu bar | | logout.php |

Untuk fungsi-fungsi yang tersedia untuk pengguna admin, berikut file-filenya yang berhubungan dengan satu sama lain:

|Folder| pages/ | auth/ | crud/
| --   |--      |--     |--   |
| | admin.php | GetAccountsList_data.php, AccountEdit.php, AccountPassreset.php | delete_user.php |
|  | AccountEdit.php |    | edit_user.php |
|  | AccountPassreset.php |    | reset_user.php |


---

### Kasus-kasus

#### Jika ada penambahan service baru

Jika ada penambahan server/service baru dan datanya tidak muncul di dalam halaman page, maka berikut langkah-langkah yang perlu dilakukan.

Pertama, clone atau fork repository ini. Buka di code editor pilihan anda.

Tiap tombol tab di halaman utama memunculkan sub-pages tersendiri. 
* Server Statuses -> pages\Server_Statuses.php
* Monthly Performance -> pages\EachServersMonthly_Performance.php
* Yearly Performance -> pages\Yearly_Performance.php

Untuk itu, file yang harus diubah adalah ketiga file ini.

1. Dalam file Server_Statuses.php, scroll down ke akhir runtutan div small-chart-container berikut, dan tambahkan element div dan canvas baru. Ganti angka dalam div id dan canvas id nya menjadi angka yang sesuai dengan idservice baru, biasanya increment 1 dari service sebelumnya.

![image](https://user-images.githubusercontent.com/72925939/216922508-09e61aca-2bee-4c8b-9469-808fce21aea2.png)

2. Dalam file EachServersMonthly_Performance.php, tidak perlu ada yang diganti. 

3. Dalam file Yearly_Performance.php, lakukan hal yang sama seperti langkah 1. 

![image](https://user-images.githubusercontent.com/72925939/216922413-9887f409-15e5-4fad-a7ce-192acac5a45f.png)

4. Save dan commit.
5. Karena belum ada mekanisme untuk otomatis mem-publish editan terbaru dari repository github ke server, maka Anda harus mengupload file-file terbaru secara manual, melalui FileZilla dan semacamnya.

> ![warning](https://user-images.githubusercontent.com/72925939/213122914-af38c80d-afcd-44f7-82fc-0985747fd91a.svg)  
> **Penting untuk tidak mengubah-ubah file 'env.php' yang ada di server remote. Kalau terjadi kesalahan, silahkan kontak penanggung jawab server untuk kredensial koneksi servernya dan buat 'env.php' baru sesuai dengan format yang telah ditentukan dan upload kembali ke server.**  

#### Jika password database diganti

Jika password maupun konfigurasi database lainnya diganti, maka web app tidak akan berfungsi lagi. Anda harus mengakses sourcecode server dan mengedit file 'env.php' di root folder dengan konfigurasi baru.

Format env.php yang kami gunakan adalah sebagai berikut:

```php
  <?php
  $variables = [
      'DB_HOST' => 'Isi alamat host',
      'DB_USERNAME' => 'isi dengan username',
      'DB_PASSWORD' => 'isi dengan password',
      'DB_NAME' => 'isi nama database',
      'DB_PORT' => 'isi port database',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
  ```
Variable di dalam file ini akan diproses oleh 'autoload.php' tiap melakukan sebuah koneksi ke database.

---

Aplikasi web dan dokumentasi ini pertama ditulis oleh Btari Fatma dan Annisa Raihana. Semoga keseluruhannya dapat membantu. Jika masih ada pertanyaan, silahkan [buka issue baru](https://github.com/annisaraihana/Server-Monitoring/issues) di repository kami atau kontak salah satu dari kami.

