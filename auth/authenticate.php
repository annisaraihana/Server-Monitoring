<?php

include '../env.php';
include '../autoload.php';

session_start();
// Mencoba connect ke database dengan env variables
$con = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if ( mysqli_connect_errno() ) {
	// Jika terdapat error pada koneksi, stop script dan tampilkan error
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Cek apakah data sudah ter submit, fungsi isset() akan mengecek apakah data sudah ada
if ( !isset($_POST['username'], $_POST['password']) ) {
	// Tidak dapat memperoleh data yang seharusnya terkirim
	exit('Please fill both the username and password fields!');
}

// Siapkan SQL, menyiapkan SQL statement akan mencegah adanya SQL injection
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), username berupa string maka gunakan "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Simpan result sehingga kita dapat mengecek apakah akun terdapat di database
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        // Akun sudah ada, lanjutkan dengan verifikasi password
        // Note: ingat untuk menggunakan password_hash pada registration file untuk menyimpan hashed passwords
        if (password_verify($_POST['password'], $password)) {
            // Verifikasi berhasil! User telah login!
            // Membuat sessions, sehingga kita dapat mengetahui bahwa user telah login, hal ini bekerja seperti cookies tetapi mengingat data pada server
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: ../pages/home.php');
        } else {
            // Password salah
            echo 'Incorrect username and/or password!';
        }
    } else {
        // Username salah
        echo 'Incorrect username and/or password!';
    }


	$stmt->close();
}
?>