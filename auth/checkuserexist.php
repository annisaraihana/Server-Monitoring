<?php

function checkexistuser(){

$conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlQuery = "SELECT * FROM accounts WHERE id = ?";
$stmt = $conn->prepare($sqlQuery); 
$stmt->bind_param('i', $_SESSION['id']);
	$stmt->execute();
	// Simpan result sehingga kita dapat mengecek apakah akun terdapat di database
	$stmt->store_result();
    if ($stmt->num_rows == 0) {
        session_destroy();
        // Redirect ke halaman login:
        header('Location: ../index.html');

    }
}
?>