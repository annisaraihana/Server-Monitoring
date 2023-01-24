<?php include '../autoload.php';
include '../env.php';

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Monthly Performance</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/Chart.min.js"></script>
        <script type="text/javascript" src="../js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="../css/output.css" rel="stylesheet">
        

    </head>
    <body>
    
    <div class="grid">
            <div class="fixed bg-white w-full">
                <h1 id="TitleBulan" class="text-center font-sans text-2xl font-bold m-4 mb-6">
                    Performa bulan ini</h1>
            </div> 

        <div class="grid grid-cols-4 gap-4 mx-4 my-20 " id="small-chart-box">
            
                <div id="small-chart-container">
                        <canvas id="Server001Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                        <canvas id="Server002Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                        <canvas id="Server003Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                        <canvas id="Server004Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                        <canvas id="Server005Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server006Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server007Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server008Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server009Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server010Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server011Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server012Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server013Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server014Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server015Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server016Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server017Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server018Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server019Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server020Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server021Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server022Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server023Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server024Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server025Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server026Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server027Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server028Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server029Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server030Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server031Percentage"></canvas>
                </div>
                <div id="small-chart-container">
                    <canvas id="Server032Percentage"></canvas>
                </div>
        </div>
    </div>

    <script>

        $(document).ready(function (){
            ServerPercentageCurrentMonth();
        });

        const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        const d = new Date();
        document.getElementById("TitleBulan").innerHTML = "Performa bulan ini (" + monthNames[d.getMonth()] + " " + d.getFullYear() + ")";

        </script>
         <script type="text/javascript" src="../js\DisplayPercentagesMonth.js" charset="utf-8"></script>
   

    <script>

    </script>   
    </body>