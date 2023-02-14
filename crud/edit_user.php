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
      if(empty($username) || empty($email)) {	
              
          if(empty($name)) {
              echo "Username masih kosong.";
          }
          
          if(empty($email)) {
              echo "Email masih kosong.";
          }		
      } else {	
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
      }
  } else {
    echo "Tidak ada input yang diberikan.";
    header('Location: ../pages\admin.php');
	exit;
  }

?>