<?php include 'autoload.php';
include 'env.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Servers Monitoring Dashboard</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        

    </head>
    <body>

    <!-- HTML body-->

    <center>
        ____________________________________________________________________________________________
        <h1>Active Servers (last hour)</h1>
        _____________________________________________________________________________________________
    </center>
        <div id="chart-container">
            <canvas id="ActiveServersGraph"></canvas>
        </div>

        <div id="buttons">
            <a href="Server_Statuses.php" class="button">Server Statuses</a>
        </div>
        <div id="buttons">
            <a href="Monthly_Performance.php" class="button">Monthly Performance</a>
        </div>
        <div id="buttons">
            <a href="Yearly_Performance.php" class="button">Yearly Performance</a>
        </div>



    <!-- Javascript sementara-->
    <!-- script untuk menampilkan graphs-->
    <script>
        $(document).ready(function (){
            ActiveServersBarChart();
        });

    </script>


    <script type="text/javascript" src="js/DisplayActiveServersChart.js"></script>           

    </body>
    </html>