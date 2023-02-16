<?php

include '../env.php';
include '../autoload.php';
include '../auth/checkuserexist.php';

session_start();
checkexistuser();
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

// Cek apakah akun dengan id tersebut ada / valid
if ($stmt = $conn->prepare('SELECT * FROM accounts WHERE id = ?')) {
    $stmt->bind_param('i', $id);
	$stmt->execute();
	$result = $stmt->get_result();
	// Simpan result sehingga kita dapat mengecek apakah akun terdapat di database
	if ($result->num_rows > 0) {
        //akun ada
        while($row = $result->fetch_assoc())
            {
                $username = $row['username'];
	            $email = $row['email'];
            }
            
        } else {
			echo '<script type="text/javascript">
			alert("Akun tidak ada.");
			window.location = "../pages/admin.php";
			</script>';
		}

    } else {
        // Ada yang salah dengan SQL statement, maka harus mengecek untuk meamstikan tabel accounts ada dan lengkap 3 fields
		echo 'Could not prepare statement!';
    }

$stmt->close();
$conn->close();


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard | Admin Panel</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/Chart.min.js"></script>
        <script type="text/javascript" src="../js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="../css/output.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
    </head>
	<body>
		<div id = "EditForm" class="container rounded-lg bg-white w-[600px] m-auto mt-[100px]">
				<form action="../crud/edit_user.php" method="post" autocomplete="off">

							<label class="font-bold text-green-900" for="Username">
								<p class="mx-auto pt-[20px]"> Username </p>
							</label>
							<input class="w-full h-[50px] border rounded-lg mx-auto mb-[20px] pr-[15px] pl-[15px]" type="text" name="username" value="<?php echo $username;?>" id="username" required>

							<label class="font-bold text-green-900" for="email">
								<p class="mx-auto"> Email </p>
							</label>
							<input class="w-full h-[50px] border rounded-lg mb-[20px] pr-[15px] pl-[15px]" type="email" name="email" value="<?php echo $email;?>" id="email" required>
							<input type="hidden" name="id" value=<?php echo $id;?>>
							<input class="w-full p-[15px] bg-green-700 rounded-lg text-white" type="submit" name="update" value="update">
				</form>
		</div>

	</body>



