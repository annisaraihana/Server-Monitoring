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

if(isset($_POST['update']))
  {	
  
      $id = mysqli_real_escape_string($conn, $_POST['id']);
      $username = mysqli_real_escape_string($conn, $_POST['username']);	
      $email = mysqli_real_escape_string($conn, $_POST['email']);	
      
      // checking empty fields
      if (!isset($_POST['username'], $_POST['email'])) {
        // Tidak dapat memperoleh data yang seharusnya terkirim
        exit('Please complete the registration form!');
        }
        // Pastikan registration values yang dikirimkan tidak kosong
        if (empty($_POST['username']) || empty($_POST['email'])) {
            // Satu atau lebih values kosong
            exit('Please complete the registration form');
        }
        
        if (preg_match('/^[a-zA-Z0-9]+$/', $_POST['username']) == 0) {
            exit('<script type="text/javascript">
                    alert("Username tidak valid!");
                    window.location = "../pages/admin.php";
                    </script>');
        }
        
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            exit('<script type="text/javascript">
                    alert("Email tidak valid!");
                    window.location = "../pages/admin.php";
                    </script>"');
        }

          //updating table
          if ($stmt = $conn->prepare('UPDATE accounts SET username = ? , email= ? WHERE id = ?')) {
                $stmt->bind_param("ssi", $username, $email, $id);
                $stmt->execute();
                echo '<script type="text/javascript">
                        alert("Data user berhasil diedit.");
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