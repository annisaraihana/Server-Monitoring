# Sardjito Server Monitoring
Selamat datang di halaman dokumentasi web app kami. Disini kami membahas semua fitur-fitur yang ada untuk pengguna dan juga penjelasan source code 
untuk pengembangan selanjutnya.  
  
Untuk sementara ini, aplikasi dapat diakses melewati jaringan internal melalui link: http://10.100.254.116/monitoring/ 

## Daftar isi
- [Untuk pengguna](#untuk-pengguna)
  - [Melihat jumlah server yang sedang aktif saat ini](#melihat-jumlah-server-yang-sedang-aktif-saat-ini)
  - [Melihat kapan saja server mengalami down](#melihat-kapan-saja-server-mengalami-down)
  - [Melihat performa sebuah server selama setahun](#melihat-performa-sebuah-server-selama-setahun-dan-pada-bulan-apa-server-paling-sering-mengalami-down)
- [Untuk pengembang](#untuk-pengembang)

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

[badge-warning]: https://github.com/Mqxx/GitHub-Markdown/blob/main/blockquotes/badge/warning.svg 'Warning'

> ![badge-warning][badge-warning]<br>
> **Penting untuk membiarkan semua grafik selesai memuat sebelum memilih tanggal baru.**  
  
Setiap grafik hanya menunjukkan keberadaan status sebuah server sebagai "0" atau "1". **Untuk melihat kapan server mengalami down**, dapat mendekatkan kursor ke titik dimana grafik mengalami penurunan. Anda akan melihat timestamp persis dimana status "0" itu terekam.  

![kapan-server-down](https://user-images.githubusercontent.com/72925939/213085109-96b8a355-919a-4496-955b-dbc80194efb4.jpg)

Selain melihat status server hari ini, Anda juga dapat melihat status server di hari-hari sebelumnya.  
  
Tanggal yang menunjuk hari di masa depan hanya akan memuat grafik yang kosong.  
  

[badge-info]: https://github.com/Mqxx/GitHub-Markdown/blob/main/blockquotes/badge/info.svg 'Info'
  
  
> ![badge-info][badge-info]<br>
>**Anda harus reload secara manual untuk melihat status 'Hari ini' yang paling terkini.**

---

### Melihat performa sebuah server selama setahun, dan pada bulan apa server paling sering mengalami down

Tombol "Monthly Performance" dan "Yearly performance" memiliki fungsi yang relatif sama. Halaman Yearly Performance menunjukkan persentase keaktifan tiap server yang ditinjau selama setahun. Sedangkan halaman Monthly Performance menunjukkan persentase keaktifan sebuah server tertentu tiap bulannya.  
  
Persentase yang ditunjukkan adalah banyaknya jumlah status "1" yang terekam, dengan kata lain, seberapa sering sebuah server tersebut memiliki status aktif.  
  
**Jika ingin melihat performa suatu server dalam setahun,** pergi ke halaman Yearly Performance dan pilih "Performa Tahun ini" atau "Performa Tahun lalu", lalu temukan nama server yang Anda inginkan.

![persentasi-database-001](https://user-images.githubusercontent.com/72925939/213086323-39d8fc0d-93b5-4873-99dd-022125710678.jpg)


**Jika ingin melihat kapan saja sebuah server paling sering mengalami down,** pergi ke Monthly Performance dan pilih salah satu server di dalam kolom. Klik tombol "Tahun ini" atau "Tahun lalu" sesuai dengan informasi yang Anda cari. Aplikasi akan menampilkan grafik performa server itu tiap bulannya, termasuk bulan yang memiliki angka persentase paling kecil. 

![persentasi-database-kecil-001](https://user-images.githubusercontent.com/72925939/213086345-910d888f-7e15-49e1-b973-62ecafc37a85.jpg)


---

## Untuk Pengembang

Jikalau aplikasi ini ingin dikembangkan lebih lanjut, berikut penjelasan mengenai source code dan dependencies aplikasi ini yang sekiranya dapat membantu.

---

### Dependencies

Aplikasi ini menggunakan pure php tanpa framework maupun package manajer apapun. Langkah-langkah mempersiapkan environment development nya dapat dilihat dalam [README](https://github.com/annisaraihana/Server-Monitoring#--server-monitoring-isirs-sardjito) di halaman depan. Meski begitu, ada beberapa library yang kami gunakan dalam pengembangannya.



#### Chart.js

Aplikasi ini menggunakan library javascript bernama **Chart.js** dalam men-generate grafik-grafik yang ada. Versi Chart.js yang kami gunakan adalah versi yang outdated, yaitu 2.7.2. Ini dikarenakan salah satu plugin yang membantu menampilkan jumlah persentase hanya berfungsi di versi itu. Untuk dokumentasi Chart.js versi 2.7.2, dapat dilihat [di sini.](https://www.chartjs.org/docs/2.7.2/)

#### JQuery

Kami menggunakan JQuery untuk mempermudah pengoperasian fungsi-fungsi javascript dan pengambilan data dari database.

#### Tailwind CSS

Tailwind adalah sebuah framework CSS yang dapat membantu pembuatan antarmuka dengan cepat, namun tetap fleksible.

---
Under construction.

