<!DOCTYPE html>
<html>
    <head>
        <title>Monthly Performance</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        

    </head>
    <body>
    
    <div class="grid">
            <div class="fixed bg-white w-full">
                <h1 id="TitleBulan" class="text-center font-sans text-2xl font-bold m-4 mb-6">
                    Performa per-bulan</h1>
                <select name="Servers" id="ServersSelect" class="font-sans font-bold">
                    <option value='0'>Pilih server</option>        
                </select>
                <button id="BulanTahunini" class="text-white bg-green-700 font-bold hover:bg-green-900 py-2 px-4 rounded"> Tahun ini </button>
                <button id="BulanTahunLalu" class="text-white bg-green-700 font-bold hover:bg-green-900 py-2 px-4 rounded"> Tahun lalu</button>
                
            </div> 

        <div class="grid grid-cols-4 gap-4 mx-4 my-40 " id="small-chart-box">

            <div id="Month1" class="small-chart-container">
                    <canvas id="Month1Graph"></canvas>
            </div>
            <div id="Month2" class="small-chart-container">
                    <canvas id="Month2Graph"></canvas>
            </div>
            <div id="Month3" class="small-chart-container">
                    <canvas id="Month3Graph"></canvas>
            </div>
            <div id="Month4" class="small-chart-container">
                    <canvas id="Month4Graph"></canvas>
            </div>
            <div id="Month5" class="small-chart-container">
                    <canvas id="Month5Graph"></canvas>
            </div>
            <div id="Month6" class="small-chart-container">
                    <canvas id="Month6Graph"></canvas>
            </div>
            <div id="Month7" class="small-chart-container">
                    <canvas id="Month7Graph"></canvas>
            </div>
            <div id="Month8" class="small-chart-container">
                    <canvas id="Month8Graph"></canvas>
            </div>
            <div id="Month9" class="small-chart-container">
                    <canvas id="Month9Graph"></canvas>
            </div>
            <div id="Month10" class="small-chart-container">
                    <canvas id="Month10Graph"></canvas>
            </div>
            <div id="Month11" class="small-chart-container">
                    <canvas id="Month11Graph"></canvas>
            </div>
            <div id="Month12" class="small-chart-container">
                    <canvas id="Month12Graph"></canvas>
            </div>
                
        </div>
    </div>

    <script>

        $(document).ready(function (){
            DisplayServersOptions();
            var input;
            document.getElementById("ServersSelect").addEventListener("change", function() {
                input = this.value;
                console.log(input);
                document.getElementById('BulanTahunini').onclick=function(){
                    DisplayServerAllMonthCuryear(input);
                };
                document.getElementById('BulanTahunLalu').onclick=function(){
                    DisplayServerAllMonthPrevyear(input);
                };
            });
        });

        
    </script>
    
    <script type="text/javascript" src="js\DisplayEachServersAllMonth.js" charset="utf-8"></script>
   

    <script>
        function DisplayServersOptions(){

            var ServiceId = [];
            var ServiceName = [];
            var ServiceDesc = [];

            $.post("data/GetServiceNames_data.php", function(data){
                console.log(data);
                    
                    for (let i in data) {
                        ServiceId.push(data[i].ServiceId);
                        ServiceName.push(data[i].ServiceName);
                        ServiceDesc.push(data[i].ServiceDesc);
                    }

                    for (let i = 0; i < ServiceId.length; i++){
                        $('#ServersSelect').append($('<option value='+ServiceId[i]+'>'+ServiceDesc[i]+'</option>'));
                    }
            });
        }
    
        
        


    </script>   
    </body>