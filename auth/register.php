<?php
include '../env.php';
include '../autoload.php';
// Mencoba connect ke database
$con = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if (mysqli_connect_errno()) {
	// Jika terdapat error pada koneksi, stop script dan tampilkan error
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Cek apakah data sudah ter submit, fungsi isset() akan mengecek apakah data sudah ada
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Tidak dapat memperoleh data yang seharusnya terkirim
	exit('Please complete the registration form!');
}
// Pastikan registration values yang dikirimkan tidak kosong
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// Satu atau lebih values kosong
	exit('Please complete the registration form');
}

if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
    exit('<script type="text/javascript">
			alert("Username tidak valid!");
			window.location = "../pages/AccountRegister.php";
			</script>');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('<script type="text/javascript">
			alert("Password harus sepanjang 5 sampai 20 karakter!");
			window.location = "../pages/AccountRegister.php";
			</script>');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('<script type="text/javascript">
			alert("Email tidak valid!");
			window.location = "../pages/AccountRegister.php";
			</script>"');
}

// Cek apakah akun dengan username tersebut sudah ada
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash password dengan fungsi PHP password_hash 
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Simpan result sehingga kita dapat mengecek apakah akun terdapat di database
	if ($stmt->num_rows > 0) {
		// Username sudah ada
		echo '<script type="text/javascript">
				alert("Username sudah ada, mohon gunakan yang lain!");
				window.location = "../pages/AccountRegister.php";
			</script>';
	} else {
		// Insert akun baru
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
            // Kita tidak ingin mengekspos password di database kita, maka hash password dan gunakan password_verify ketika user login
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo '<script type="text/javascript">
					alert("Pendaftaran berhasil, sekarang user sudah bisa login!");
					window.location = "../pages/admin.php";
				</script>';
        } else {
            // Ada yang salah dengan SQL statement, maka harus mengecek untuk meamstikan tabel accounts ada dan lengkap 3 fields
            echo 'Could not prepare statement!';
        }
	}
	$stmt->close();
} else {
	// Ada yang salah dengan SQL statement, maka harus mengecek untuk meamstikan tabel accounts ada dan lengkap 3 fields
	echo 'Could not prepare statement!';
}
$con->close();
?>