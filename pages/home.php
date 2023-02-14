<?php include '../autoload.php';
include '../../env.php';

session_start();
// Jika user belum login maka redirect ke login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Servers Monitoring Dashboard</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/Chart.min.js"></script>
        <script type="text/javascript" src="../js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="../css/output.css" rel="stylesheet">
        

    </head>
    
    <body class="bg-green-100">

    <!-- HTML body-->
        <header class="w-full h-20" style="border-top: black 5px solid; background-color:#88B04B; background-image: url(../images/bg_header_2017.png), url(../images/bg_header_2017_right.png); background-position: left bottom, right bottom; background-repeat: no-repeat;">
            <p class="font-sans text-2xl text-center font-bold py-5">SERVER MONITORING </p>
            <div class="bg-black w-full h-[25px] mt-[3px]"> 
                <a class="font-sans font-bold text-white float-right pr-[10px]" href="../auth/logout.php" onclick="return confirm('Anda yakin ingin log out?');">Logout</a>
            </div>
        </header>

        <div class="bg-green-100">
            <div class="mt-14 mb-8 mx-4 rounded-xl p-6 bg-amber-100">
                <div class="bg-white rounded w-3/6 m-auto">
                    <div class="m-auto text-white bg-green-500 rounded">
                        <p class="font-sans font-bold m-4 mb-6">OVERVIEW</p>
                    </div>

                    
                    <p class="font-sans text-2xl font-bold m-4 mb-6 text-center">
                        Jumlah server yang aktif saat ini (1 jam terakhir):
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

                <object id="GraphsContainer" class="w-full h-screen col-span-3" data="" type="text/html">
                    Alternative Content
                </object>
            </div>

        </div>


    <!-- Javascript-->
    <!-- script untuk menampilkan graphs-->
    <script>
        $(document).ready(function (){
            ActiveServersBarChart();
            setInterval(ActiveServersBarChart, 10000); 
        });


        //script untuk membuat tombol sub-pages jadi hitam saat aktif
        $("#options button").click(function(e) { 
                var isActive = $(this).hasClass('bg-black');
                $('.bg-black').removeClass('bg-black').addClass('bg-green-700');
                if (!isActive) {
                    $(this).removeClass('bg-green-700').addClass('bg-black');
                }
                
            });
        
        //script untuk menampilkan sub-pages, dengan mengganti atribut object GraphsContainer menjadi link page yang sesuai
        document.getElementById('ServerStatuses').onclick=function(){
            document.getElementById('GraphsContainer').setAttribute('data','Server_Statuses.php')
        };
        document.getElementById('MonthlyPerformance').onclick=function(){
            document.getElementById('GraphsContainer').setAttribute('data','EachServersMonthly_Performance.php')
        };
        document.getElementById('YearlyPerformance').onclick=function(){
            document.getElementById('GraphsContainer').setAttribute('data','Yearly_Performance.php')
        };

    </script>


    <script type="text/javascript" src="../js/DisplayActiveServersChart.js"></script>           

    </body>
    </html>