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
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        

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

        <button class="text-white font-bold bg-purple-700 hover:bg-purple-800 py-2 px-4 rounded">
            <a href="Server_Statuses.php" class="button">Server Statuses</a>
        </button>
        <button class="text-white font-bold bg-purple-700 hover:bg-purple-800 py-2 px-4 rounded">
            <a href="Monthly_Performance.php" class="button">Monthly Performance</a>
        </button>
        <button class="text-white font-bold bg-purple-700 hover:bg-purple-800 py-2 px-4 rounded">
            <a href="Yearly_Performance.php" class="button">Yearly Performance</a>
        </button>



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