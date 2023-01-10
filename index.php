<?php include 'autoload.php';
include 'env.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Servers Monitoring Dashboard</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        

    </head>
    <body>

    <!-- HTML body-->

    <center>
        
        <h1 class="font-sans text-2xl font-bold m-4 mb-6">
            Active Servers (last hour)</h1>
        
    </center>
        <div id="chart-container" class="w-3/6 container mx-auto">
            <canvas id="ActiveServersGraph"></canvas>
        </div>

        <div id="options" class="grid grid-cols-3 gap-4 mx-4">

            <button id="ServerStatuses" class="text-white bg-purple-700 font-bold hover:bg-purple-800 py-2 px-4 rounded">
                Server Statuses
            </button>
            <button id="MonthlyPerformance" class="text-white bg-purple-700 font-bold hover:bg-purple-800 py-2 px-4 rounded">
                Monthly Performance
            </button>
            <button id="YearlyPerformance"class="text-white bg-purple-700 font-bold hover:bg-purple-800 py-2 px-4 rounded">
                Yearly Performance
            </button>

            <object id="GraphsContainer" class="w-full h-screen col-span-3" data="Monthly_Performance.php" type="text/html">
                Alternative Content
            </object>
        </div>




    <!-- Javascript sementara-->
    <!-- script untuk menampilkan graphs-->
    <script>
        $(document).ready(function (){
            ActiveServersBarChart();
        });



        $("#options button").click(function(e) { 
                var isActive = $(this).hasClass('bg-black');
                $('.bg-black').removeClass('bg-black').addClass('bg-purple-700');
                if (!isActive) {
                    $(this).removeClass('bg-purple-700').addClass('bg-black');
                }
                
            });

        document.getElementById('ServerStatuses').onclick=function(){
        // Remove any element-specific value, falling back to stylesheets
            document.getElementById('GraphsContainer').setAttribute('data','Server_Statuses.php')
        };
        document.getElementById('MonthlyPerformance').onclick=function(){
        // Remove any element-specific value, falling back to stylesheets
            document.getElementById('GraphsContainer').setAttribute('data','Monthly_Performance.php')
        };
        document.getElementById('YearlyPerformance').onclick=function(){
        // Remove any element-specific value, falling back to stylesheets
            document.getElementById('GraphsContainer').setAttribute('data','Yearly_Performance.php')
        };

    </script>


    <script type="text/javascript" src="js/DisplayActiveServersChart.js"></script>           

    </body>
    </html>