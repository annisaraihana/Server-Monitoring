<?php
include '../env.php';
include '../autoload.php';
// Try and connect
$con = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'),env('DB_NAME'));
if (mysqli_connect_errno()) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['username'], $_POST['password'], $_POST['email'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}
// Make sure the submitted registration values are not empty.
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {
	// One or more values are empty.
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

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo '<script type="text/javascript">
				alert("Username sudah ada, mohon gunakan yang lain!");
				window.location = "../pages/AccountRegister.php";
			</script>';
	} else {
		// Insert new account
        if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
            // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
            $stmt->execute();
            echo '<script type="text/javascript">
					alert("Pendaftaran berhasil, sekarang anda sudah bisa login!");
					window.location = "../index.html";
				</script>';
        } else {
            // Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
            echo 'Could not prepare statement!';
        }
	}
	$stmt->close();
} else {
	// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();
?>