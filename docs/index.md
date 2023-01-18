# Sardjito Server Monitoring
Selamat datang di halaman dokumentasi web app kami. Disini kami membahas semua fitur-fitur yang ada untuk pengguna dan juga penjelasan source code 
untuk pengembangan selanjutnya.
## Daftar isi
- [Untuk pengguna](https://github.com/annisaraihana/Server-Monitoring/new/main#untuk-pengguna)
- [Untuk pengembang] (##untuk-pengembang)

## Untuk Pengguna

Sardjito Server Monitoring dikembangkan karena ISIRS membutuhkan sarana untuk mengolah data log yang didapatkan dari semua server yang berjalan di sistem. 
Berikut fitur-fitur yang saat ini tersedia dalam melaksanakan tujuan tersebut.

### Melihat jalannya status sebuah server dalam jangka sehari
Tombol "Server Statuses" di halaman utama akan membuka sebuah sub halaman di bawah yang berjudul "Grafik Status Tiap Server". 
Pilih tanggal hari yang diinginkan. Aplikasi akan mengambil log dari semua server yang memiliki timestamp yang sama dengan tanggal tersebut.  
Kolom akan secara default menunjuk ke hari terkini. Bisa juga meng-klik tulisan "Hari ini" atau "Today" di pojok kanan bawah kolom.  
  
Setelah sebuah tanggal terpilih, aplikasi akan secara otomatis mulai memuat grafik status dari semua server. 
Penting untuk membiarkan semua grafik selesai memuat sebelum memilih tanggal baru.  
  
Setiap grafik hanya menunjukkan keberadaan status sebuah server sebagai "0" atau "1". Untuk melihat kapan server mengalami down, dapat mendekatkan kursor ke titik dimana 
grafik mengalami penurunan. Anda akan melihat timestamp persis status "0" itu terekam.


## Untuk Pengembang
