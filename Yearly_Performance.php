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
                    <button id="LastYear" class="text-white bg-green-700 font-bold hover:bg-black py-2 px-4 rounded">
                            Performa tahun lalu  
                    </button> 
                    <button id="CurrentYear" class="text-white bg-green-700 font-bold hover:bg-black py-2 px-4 rounded">
                            Performa Tahun ini
                    </button>    
                </div>
            </div> 

        <div class="grid grid-cols-4 gap-4 mx-4 my-20" id="small-chart-box">
            
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
            document.getElementById('CurrentYear').onclick=function(){
                ServerPercentageCurrentYear();
            };
            document.getElementById('LastYear').onclick=function(){
                ServerPercentagePrevYear();
            };
        });

        </script>
        <script type="text/javascript" src="js\DisplayPercentagesYear.js" charset="utf-8"></script>


    <script>


    </script>   
    </body>