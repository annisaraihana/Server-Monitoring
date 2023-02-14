<?php

include '../env.php';
include '../autoload.php';

session_start();
// Jika user belum login maka redirect ke login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}
// Jika user bukan admin maka redirect ke home page...
if ($_SESSION['privilege_level'] != 'admin'){
    echo 'no permission to visit this page';
    header('Location: home.php');
	exit;
}

$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }

//getting id of the data from url
$id = $_GET['id'];

// Cek apakah akun dengan id tersebut ada
if ($stmt = $conn->prepare('SELECT * FROM accounts WHERE id = ?')) {
    $stmt->bind_param('i', $id);
	$stmt->execute();
	$stmt->store_result();
	// Simpan result sehingga kita dapat mengecek apakah akun terdapat di database
	if ($stmt->num_rows > 0) {
        //akun ada
        //deleting the row from table
        if ($stmt = $conn->prepare('DELETE FROM accounts WHERE id = ?')) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            echo '<script type="text/javascript">
					alert("User berhasil terhapus.");
					window.location = "../pages/admin.php";
	            </script>';
            
        } else {
            // Ada yang salah dengan SQL statement, maka harus mengecek untuk meamstikan tabel accounts ada dan lengkap 3 fields
            echo 'Could not prepare statement!';
        }

    } else {
        echo '<script type="text/javascript">
				alert("Akun tidak ada.");
				window.location = "../pages/admin.php";
			</script>';
    }

	$stmt->close();

} else {
    // Ada yang salah dengan SQL statement, maka harus mengecek untuk meamstikan tabel accounts ada dan lengkap 3 fields
	echo 'Could not prepare statement!';
}

$conn->close();

?>
