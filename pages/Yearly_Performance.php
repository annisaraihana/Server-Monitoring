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

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Yearly Performance</title>
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
                <div class="text-center font-sans font-bold m-4 mb-6 mr-20">
                    <div id="options">                       
                        <button id="LastYear" class="YearButton text-white bg-green-700 font-bold hover:bg-green-900 py-2 px-4 rounded">
                                Performa tahun lalu ()
                        </button> 
                        <span id="LabelTahun" class="text-center mx-4"> Pilih tahun: </span>
                        <button id="CurrentYear" class="YearButton text-white bg-green-700 font-bold hover:bg-green-900 py-2 px-4 rounded">
                                Performa tahun ini ()
                        </button>  

                    </div>
                </div>
            </div> 

        <div class="grid grid-cols-4 gap-4 mx-4 my-20" id="small-chart-box">

        <!--tulisan loading-->
        <div style="display:none" id="loadingDiv"> <div class="loader text-center text-white font-bold mt-[25%] text-2xl">Loading...</div> </div>
            
                <div id="Server001" class="small-chart-container">
                        <canvas id="Server001Percentage"></canvas>
                </div>
                <div id="Server002" class="small-chart-container">
                        <canvas id="Server002Percentage"></canvas>
                </div>
                <div id="Server003" class="small-chart-container">
                        <canvas id="Server003Percentage"></canvas>
                </div>
                <div id="Server004" class="small-chart-container">
                        <canvas id="Server004Percentage"></canvas>
                </div>
                <div id="Server005" class="small-chart-container">
                        <canvas id="Server005Percentage"></canvas>
                </div>
                <div id="Server006" class="small-chart-container">
                    <canvas id="Server006Percentage"></canvas>
                </div>
                <div id="Server007" class="small-chart-container">
                    <canvas id="Server007Percentage"></canvas>
                </div>
                <div id="Server008" class="small-chart-container">
                    <canvas id="Server008Percentage"></canvas>
                </div>
                <div id="Server009" class="small-chart-container">
                    <canvas id="Server009Percentage"></canvas>
                </div>
                <div id="Server010" class="small-chart-container">
                    <canvas id="Server010Percentage"></canvas>
                </div>
                <div id="Server011" class="small-chart-container">
                    <canvas id="Server011Percentage"></canvas>
                </div>
                <div id="Server012" class="small-chart-container">
                    <canvas id="Server012Percentage"></canvas>
                </div>
                <div id="Server013" class="small-chart-container">
                    <canvas id="Server013Percentage"></canvas>
                </div>
                <div id="Server014" class="small-chart-container">
                    <canvas id="Server014Percentage"></canvas>
                </div>
                <div id="Server015" class="small-chart-container">
                    <canvas id="Server015Percentage"></canvas>
                </div>
                <div id="Server016" class="small-chart-container">
                    <canvas id="Server016Percentage"></canvas>
                </div>
                <div id="Server017" class="small-chart-container">
                    <canvas id="Server017Percentage"></canvas>
                </div>
                <div id="Server018" class="small-chart-container">
                    <canvas id="Server018Percentage"></canvas>
                </div>
                <div id="Server019" class="small-chart-container">
                    <canvas id="Server019Percentage"></canvas>
                </div>
                <div  id="Server020" class="small-chart-container">
                    <canvas id="Server020Percentage"></canvas>
                </div>
                <div id="Server021" class="small-chart-container">
                    <canvas id="Server021Percentage"></canvas>
                </div>
                <div id="Server022" class="small-chart-container">
                    <canvas id="Server022Percentage"></canvas>
                </div>
                <div id="Server023" class="small-chart-container">
                    <canvas id="Server023Percentage"></canvas>
                </div>
                <div id="Server024" class="small-chart-container">
                    <canvas id="Server024Percentage"></canvas>
                </div>
                <div id="Server025" class="small-chart-container">
                    <canvas id="Server025Percentage"></canvas>
                </div>
                <div id="Server026" class="small-chart-container">
                    <canvas id="Server026Percentage"></canvas>
                </div>
                <div id="Server027" class="small-chart-container">
                    <canvas id="Server027Percentage"></canvas>
                </div>
                <div id="Server028" class="small-chart-container">
                    <canvas id="Server028Percentage"></canvas>
                </div>
                <div id="Server029" class="small-chart-container">
                    <canvas id="Server029Percentage"></canvas>
                </div>
                <div id="Server030" class="small-chart-container">
                    <canvas id="Server030Percentage"></canvas>
                </div>
                <div id="Server031" class="small-chart-container">
                    <canvas id="Server031Percentage"></canvas>
                </div>
                <div id="Server032" class="small-chart-container">
                    <canvas id="Server032Percentage"></canvas>
                </div>
        </div>
    </div>

    <script>



        $(document).ready(function (){        

            document.getElementById('CurrentYear').onclick=function(){
                ServerPercentageCurrentYear();
            };
            document.getElementById('LastYear').onclick=function(){
                ServerPercentagePrevYear();
            };

        });

        //script toggle buttons
        $("#options button").click(function(e) { 
                document.getElementById('LabelTahun').innerHTML = "";
                var isActive = $(this).hasClass('bg-black');
                $('.bg-black').removeClass('bg-black').addClass('bg-green-700');
                if (!isActive) {
                    $(this).removeClass('bg-green-700').addClass('bg-black');
                }
                
            });

        //Supaya tahun terus terupdate di judul
        const d = new Date();
        document.getElementById("CurrentYear").innerHTML = "Performa tahun ini (" + d.getFullYear() + ")";
        document.getElementById("LastYear").innerHTML = "Performa tahun lalu (" + (d.getFullYear()-1) + ")"

        </script>
        <script type="text/javascript" src="../js\DisplayPercentagesYear.js" charset="utf-8"></script>


    <script>


    </script>   
    </body>