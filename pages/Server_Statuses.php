<?php include '../autoload.php';
include '../env.php';
include '../auth/checkuserexist.php';

session_start();
checkexistuser();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Server Statuses</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="../js/jquery.min.js"></script>
        <script type="text/javascript" src="../js/Chart.min.js"></script>
        <script type="text/javascript" src="../js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="../css/output.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        

    </head>
    <body>

    <div class="grid">

            <div class="fixed bg-green-200 w-full">
                <h1 class="text-center font-sans text-2xl font-bold m-4 mb-2">
                    Grafik Status Tiap Server
                </h1>
                <div class="ml-8 mb-8">
                    <span class="font-sans font-bold">
                        Pilih tanggal, tunggu beberapa saat : 
                    </span>
                    <div>
                    <input type="date" id="dateInput"/>
                    </div>
                    <!--
                    <button class="text-center text-white font-sans bg-red-500 hover:bg-red-700 ml-4 p-2 rounded" id="Refresh">
                        Clear Data  
                    </button>
                    
                        ----Untuk menghindari bug, mohon tekan sebelum akan mengganti tanggal.
                    -->
                    
                </div>
            </div>



        <div class="grid grid-cols-4 gap-4 mx-4 my-48" id="small-chart-box">

        <!-- tulisan loading-->
        <div style="display:none" id="loadingDiv"> <div class="loader text-center text-white font-bold mt-[25%] text-2xl">Loading...</div> </div>

            <div id="Server001" class="small-chart-container">
                <canvas id="Server001Graph"></canvas>
            </div>

            <div id="Server002" class="small-chart-container">
                <canvas id="Server002Graph"></canvas>
            </div>

            <div id="Server003" class="small-chart-container">
                <canvas id="Server003Graph"></canvas>
            </div>

            <div id="Server004" class="small-chart-container">
                <canvas id="Server004Graph"></canvas>
            </div>
            <div id="Server005" class="small-chart-container">
                <canvas id="Server005Graph"></canvas>
            </div>
            <div id="Server006" class="small-chart-container">
                <canvas id="Server006Graph"></canvas>
            </div>
            <div id="Server007" class="small-chart-container">
                <canvas id="Server007Graph"></canvas>
            </div>
            <div id="Server008" class="small-chart-container">
                <canvas id="Server008Graph"></canvas>
            </div>
            <div id="Server009" class="small-chart-container">
                <canvas id="Server009Graph"></canvas>
            </div>
            <div id="Server010" class="small-chart-container">
                <canvas id="Server010Graph"></canvas>
            </div>
            <div id="Server011" class="small-chart-container">
                <canvas id="Server011Graph"></canvas>
            </div>
            <div id="Server012" class="small-chart-container">
                <canvas id="Server012Graph"></canvas>
            </div>
            <div id="Server013" class="small-chart-container">
                <canvas id="Server013Graph"></canvas>
            </div>
            <div id="Server014" class="small-chart-container">
                <canvas id="Server014Graph"></canvas>
            </div>
            <div id="Server015" class="small-chart-container">
                <canvas id="Server015Graph"></canvas>
            </div>
            <div id="Server016" class="small-chart-container">
                <canvas id="Server016Graph"></canvas>
            </div>
            <div id="Server017" class="small-chart-container">
                <canvas id="Server017Graph"></canvas>
            </div>
            <div id="Server018" class="small-chart-container">
                <canvas id="Server018Graph"></canvas>
            </div>
            <div id="Server019" class="small-chart-container">
                <canvas id="Server019Graph"></canvas>
            </div>
            <div id="Server020" class="small-chart-container">
                <canvas id="Server020Graph"></canvas>
            </div>
            <div id="Server021" class="small-chart-container">
                <canvas id="Server021Graph"></canvas>
            </div>
            <div id="Server022" class="small-chart-container">
                <canvas id="Server022Graph"></canvas>
            </div>
            <div id="Server023" class="small-chart-container">
                <canvas id="Server023Graph"></canvas>
            </div>
            <div id="Server024" class="small-chart-container">
                <canvas id="Server024Graph"></canvas>
            </div>
            <div id="Server025" class="small-chart-container">
                <canvas id="Server025Graph"></canvas>
            </div>
            <div id="Server026" class="small-chart-container">
                <canvas id="Server026Graph"></canvas>
            </div>
            <div id="Server027" class="small-chart-container">
                <canvas id="Server027Graph"></canvas>
            </div>
            <div id="Server028" class="small-chart-container">
                <canvas id="Server028Graph"></canvas>
            </div>
            <div id="Server029" class="small-chart-container">
                <canvas id="Server029Graph"></canvas>
            </div>
            <div id="Server030" class="small-chart-container">
                <canvas id="Server030Graph"></canvas>
            </div>
            <div id="Server031" class="small-chart-container">
                <canvas id="Server031Graph"></canvas>
            </div>
            <div id="Server032" class="small-chart-container">
                <canvas id="Server032Graph"></canvas>
            </div>

        </div>
    </div>



    <script>

        $(document).ready(function (){

            var input;
            var dateEntered;

            /*
            document.getElementById("Refresh").addEventListener("click", function() {
                location.reload();
            });
            */
            
            //script untuk mendapatkan input tanggal dan menampilkan data dan grafiknya
            document.getElementById("dateInput").addEventListener("change", function() {
                input = this.value;
                dateEntered = new Date(input);
                PrintDate(input, dateEntered);
                ServerStatusesLineCharts(input);
            });

        });

        //untuk debugging
        function PrintDate(date, desc){
            console.log(date); 
            console.log(desc);
        }

        </script>


   
        <script type="text/javascript" src="../js\DisplayStatusChart.js" charset="utf-8"></script>   
    </body>