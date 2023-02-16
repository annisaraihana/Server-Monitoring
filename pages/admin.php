<?php include '../autoload.php';
include '../env.php';

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
		<header class="w-full h-20" style="border-top: black 5px solid; border-bottom: black 5px solid; background-color:#88B04B; background-image: url(../images/bg_header_2017.png), url(../images/bg_header_2017_right.png); background-position: left bottom, right bottom; background-repeat: no-repeat;">
            <p class="font-sans text-2xl text-center font-bold py-5">SERVER MONITORING </p>
			<div class="bg-black w-full h-[25px] mt-[3px]"> 
                <a class="font-sans font-bold text-white hover:text-green-500 float-right pr-[10px]" href="../auth/logout.php" onclick="return confirm('Anda yakin ingin log out?');">Logout</a>
                <a class="font-sans font-bold text-white hover:text-green-500 float-right pr-[10px]" href="../docs/dokumentasi.html">Dokumentasi</a>
                <a class="font-sans font-bold hover:text-green-500 text-white float-right pr-[10px]" href="home.php">Home</a>
                <a class="font-sans text-white float-right pr-[10px]">Halo, user <?=$_SESSION['name']?>.</a>
            </div>
        </header>
		<div class = "mt-[35px] mb-[10px]">
			<h1 class = "text-center font-bold text-xl">User Profiles</h1>
		</div>

		<table class = "table-auto w-full h-[15px] border-collapse border border-gray">
          <thead>
            <tr>
              <th class = "py-[7px] border border-gray">id</th>
              <th class = "py-[7px] border border-gray">Username</th>
              <th class = "py-[7px] border border-gray">Email</th>
              <th class = "py-[7px] border border-gray">User role</th>
            </tr>
          </thead>
          <tbody id="UserList"></tbody>
        </table>
		<div class = "mt-[10px] ml-[5px]">
			<a class="text-white bg-green-700 hover:bg-black py-2 px-4 rounded mt-[5px]" href="AccountRegister.php"> Add users </a>
		</div>
		<script>

		$(document).ready(function (){
            GetAccountsList();
        });


			function GetAccountsList() {

				$.post("../auth/GetAccountsList_data.php", //menunjuk ke fungsi php yang mengambil data dari db
				function (data)
				{
					console.log(data);
					var id = [];
					var username = [];
					var email = [];
					var userRole = [];

					for(var i in data){
						id.push(data[i].id);
						username.push(data[i].username);
						email.push(data[i].email);
						userRole.push(data[i].user_role);

					}
					
					for (var i = 0; i < id.length; i++){
                        var tr = '<tr>';
						tr += '<td class = "border border-gray text-center">' + id[i] + '</td>';
						tr += '<td class = "border border-gray text-center">' + username[i] + '</td>';
						tr += '<td class = "border border-gray text-center">' + email[i] + '</td>';
						tr += '<td class = "border border-gray text-center">' + userRole[i] + '</td>';
						tr += '<td class = "py-[7px] border border-gray text-center"> <a class="text-white bg-green-700 hover:bg-black py-1 px-2 rounded" href="AccountEdit.php?id=' + id[i] + '"> edit </a> </td>';
						tr += '<td class = "py-[7px] border border-gray text-center"> <a class="text-white bg-red-700 hover:bg-black py-1 px-2 rounded" href="../crud/delete_user.php?id=' + id[i] + ' " onClick=\"return confirm(\'Anda yakin ingin menghapus user ini?\');\"> delete </a> </td>';
						tr += '<td class = "py-[7px] border border-gray text-center"> <a class="text-white bg-red-700 hover:bg-black py-1 px-2 rounded" href="AccountPassreset.php?id=' + id[i] + '"> reset password </a> </td>';
						tr += '</tr>';
						$("#UserList").append(tr);
					
                    }
					
				});

			} 

			 
		</script>	

	</body>
</html>
