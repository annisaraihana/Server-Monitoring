<!DOCTYPE html>
<html>
    <head>
        <title>Yearly Performance</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        

    </head>
    <body>
    
    <div class="grid">
            <div class="fixed bg-white w-full">
                <div class="text-center font-sans font-bold m-4 mb-6 mr-20">
                    <div id="options">                       
                        <button id="LastYear" class="YearButton text-gray-200 bg-gray-500 font-bold hover:bg-gray-700 py-2 px-4 rounded">
                                Performa tahun lalu ()
                        </button> 
                        <span id="LabelTahun" class="text-center mx-4"> Pilih tahun: </span>
                        <button id="CurrentYear" class="YearButton text-gray-200 bg-gray-500 font-bold hover:bg-gray-700 py-2 px-4 rounded">
                                Performa tahun ini ()
                        </button>  

                    </div>
                </div>
            </div> 

        <div class="grid grid-cols-4 gap-4 mx-4 my-20" id="small-chart-box">
            
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

        $("#options button").click(function(e) { 
                document.getElementById('LabelTahun').innerHTML = "";
                var isActive = $(this).hasClass('bg-white text-black');
                $('#options button','.bg-white').removeClass('bg-white text-black').addClass('bg-gray-500 text-gray-200');
                if (!isActive) {
                    $(this).removeClass('bg-gray-500 text-gray-200').addClass('bg-white text-black');
                }
                
            });

        const d = new Date();
        document.getElementById("CurrentYear").innerHTML = "Performa tahun ini (" + d.getFullYear() + ")";
        document.getElementById("LastYear").innerHTML = "Performa tahun lalu (" + (d.getFullYear()-1) + ")"

        </script>
        <script type="text/javascript" src="js\DisplayPercentagesYear.js" charset="utf-8"></script>


    <script>


    </script>   
    </body>