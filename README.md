<h1 align="center">
  Server Monitoring ISIRS Sardjito
</h1>
<p align="center">Proyek Kerja Praktik Btari dan Asa</p>

## Development Setup

Ini adalah proyek php murni tanpa menggunakan framework. Berikut cara meng-setup environment development-nya:

### Prerequisites

- [Download](https://www.apachefriends.org/index.html) dan install **XAMPP** versi `8.2.0` atau lebih. Termasuk segala jenis software MySQL yang telah terbundle.
- Buka folder penginstalan xampp dan clone project ini kedalam folder htdocs.

```
└── xampp/
    └── htdocs/
        └── Server-Monitoring/
```

### Setting Up Project

- Import sql dummy data nya melalui SQL Workbench.
- Tambahkan file **env.php** di root folder, berisi:

  ```php
  <?php
  $variables = [
      'DB_HOST' => 'Isi alamat host, default localhost: 127.0.0.1',
      'DB_USERNAME' => 'isi dengan username',
      'DB_PASSWORD' => 'isi dengan password',
      'DB_NAME' => 'isi nama database, default: monitoring',
      'DB_PORT' => 'isi port, default: 3306',
  ];

  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }
  ```
- Ganti value di dalam tanda petik sesuai konfigurasi MySQL anda.
- Run XAMPP Control Panel, start Apache dan MySQL.
- Buka browser pilihan dan buka link http://localhost/Server-Monitoring/


### Folder Structure

```
- root                 # berisi index.php dan sub-pages lainnya
  └── css              # berisi file-file .css
  └── data             # berisi file-file .php controllers yang mengambil data dari database.
  └── docs             # berisi file dokumentasi projek.
  └── images           # berisi file gambar yang digunakan di antarmuka.
  └── js               # berisi libraries dan file .js yang menampilkan data di halaman. 
```
