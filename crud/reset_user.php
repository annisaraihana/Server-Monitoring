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

if(isset($_POST['reset']))
  {	    
      // checking empty
      if (!isset($_POST['password'])) {
        // Tidak dapat memperoleh data yang seharusnya terkirim
        exit('Please complete the registration form!');
      }
      // Pastikan registration values yang dikirimkan tidak kosong
      if (empty($_POST['password'])) {
        // Satu atau lebih values kosong
        exit('Please complete the registration form');
      }
      if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        exit('<script type="text/javascript">
            alert("Password harus sepanjang 5 sampai 20 karakter!");
            </script>');
      }
      
     //updating table
     if ($stmt = $conn->prepare('UPDATE accounts SET password = ? WHERE id = ?')) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            
            $stmt->bind_param("si", $password, $id);
            $stmt->execute();
            echo '<script type="text/javascript">
                    alert("Password berhasil di reset.");
                    window.location = "../pages/admin.php";
                </script>';
            
        } else {

  // Ada yang salah dengan SQL statement, maka harus mengecek untuk meamstikan tabel accounts ada dan lengkap 3 fields
  echo 'Could not prepare statement!';
  }

  } else {
    echo "Tidak ada input yang diberikan.";
    header('Location: ../pages\admin.php');
	exit;
  }

?>