<?php
include '../autoload.php';
include '../env.php';

session_start();
// Jika user belum login maka redirect ke login page...
if (!isset($_SESSION['loggedin'])) {
    echo 'forbidden';
	exit;
}
// Jika user bukan admin maka redirect ke home page...
if ($_SESSION['privilege_level'] != 'admin'){
    echo 'forbidden';
	exit;
}

header('Content-Type: application/json');

$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sqlQuery = "SELECT * FROM accounts WHERE NOT user_role = 'admin' OR user_role IS null;";
$result = mysqli_query($conn,$sqlQuery);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($conn);
echo json_encode($data);
?>