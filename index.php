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
    
    <body class="bg-green-100">

    <!-- HTML body-->
        <header class="w-full h-20" style="background-color:#88B04B; background-image: url(images/bg_header_2017.png), url(images/bg_header_2017_right.png); background-position: left bottom, right bottom; background-repeat: no-repeat;">
            <p class="font-sans text-2xl text-center font-bold pt-5">SERVER MONITORING </p>
        </header>

        <div class="bg-green-100">
            <div class="my-8 mx-4 rounded-xl p-6 bg-yellow-200">
                <div class="bg-white rounded w-3/6 m-auto">
                    <div class="m-auto text-white bg-green-700 rounded">
                        <p class="font-sans font-bold m-4 mb-6">OVERVIEW</p>
                    </div>

                    
                    <p class="font-sans text-2xl font-bold m-4 mb-6 text-center">
                        Jumlah server yang aktif saat ini (selama 1 jam kebelakang):
                    </p>
                

                    <div id="active-server-chart-container" class="container mx-auto my-6 pr-10">
                        <canvas id="ActiveServersGraph"></canvas>
                    </div>

                </div>
            </div>



            <div id="options" class="grid grid-cols-3 gap-4 mx-4">

                <button id="ServerStatuses" class="text-white bg-green-700 font-bold hover:bg-black py-2 px-4 rounded">
                    Server Statuses
                </button>
                <button id="MonthlyPerformance" class="text-white bg-green-700 font-bold hover:bg-black py-2 px-4 rounded">
                    Monthly Performance
                </button>
                <button id="YearlyPerformance"class="text-white bg-green-700 font-bold hover:bg-black py-2 px-4 rounded">
                    Yearly Performance
                </button>

                <object id="GraphsContainer" class="w-full h-screen col-span-3" data="Monthly_Performance.php" type="text/html">
                    Alternative Content
                </object>
            </div>

        </div>


    <!-- Javascript sementara-->
    <!-- script untuk menampilkan graphs-->
    <script>
        $(document).ready(function (){
            setInterval(ActiveServersBarChart, 10000); 
        });



        $("#options button").click(function(e) { 
                var isActive = $(this).hasClass('bg-black');
                $('.bg-black').removeClass('bg-black').addClass('bg-green-700');
                if (!isActive) {
                    $(this).removeClass('bg-green-700').addClass('bg-black');
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