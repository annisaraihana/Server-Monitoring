<?php include '../autoload.php';
include '../env.php';

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

?>

This is an admin-only page.