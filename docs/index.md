# Sardjito Server Monitoring
Selamat datang di halaman dokumentasi web app kami. Disini kami membahas semua fitur-fitur yang ada untuk pengguna dan juga penjelasan source code 
untuk pengembangan selanjutnya.
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
**Penting untuk membiarkan semua grafik selesai memuat sebelum memilih tanggal baru.**  
  
Setiap grafik hanya menunjukkan keberadaan status sebuah server sebagai "0" atau "1". **Untuk melihat kapan server mengalami down**, dapat mendekatkan kursor ke titik dimana grafik mengalami penurunan. Anda akan melihat timestamp persis dimana status "0" itu terekam.  

![kapan-server-down](https://user-images.githubusercontent.com/72925939/213085109-96b8a355-919a-4496-955b-dbc80194efb4.jpg)

Selain melihat status server hari ini, Anda juga dapat melihat status server di hari-hari sebelumnya.  
  
Tanggal yang menunjuk hari di masa depan hanya akan memuat grafik yang kosong.  
  
**Anda harus reload secara manual untuk melihat status 'Hari ini' yang paling terkini.**

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
Under construction.
