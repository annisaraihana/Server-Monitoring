<!DOCTYPE html>
<html>
    <head>
        <title>Server Statuses</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        

    </head>
    <body>

    <div class="grid">

            <div class="fixed bg-white w-full">
                <h1 class="text-center font-sans text-2xl font-bold m-4 mb-2">
                    Grafik Status Server dalam sehari
                </h1>
                <div class="ml-8 mb-8">
                    <p class="font-sans font-bold">
                    Pilih tanggal : </p>
                    <p>(Disarankan untuk selalu menekan Clear Page sebelum mengganti tanggal!)</p>
                    <input type="date" id="dateInput"/>
                    <button class="text-center text-white font-sans bg-green-500 hover:bg-green-700 ml-4 p-2 rounded" id="Refresh">
                        Clear Page 
                    </button>
                </div>
            </div>



        <div class="grid grid-cols-4 gap-4 mx-4 my-48" id="small-chart-box">



            <div id="small-chart-container">
                <canvas id="Server001Graph"></canvas>
            </div>

            <div id="small-chart-container">
                <canvas id="Server002Graph"></canvas>
            </div>

            <div id="small-chart-container">
                <canvas id="Server003Graph"></canvas>
            </div>

            <div id="small-chart-container">
                <canvas id="Server004Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server005Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server006Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server007Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server008Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server009Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server010Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server011Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server012Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server013Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server014Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server015Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server016Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server017Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server018Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server019Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server020Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server021Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server022Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server023Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server024Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server025Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server026Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server027Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server028Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server029Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server030Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server031Graph"></canvas>
            </div>
            <div id="small-chart-container">
                <canvas id="Server032Graph"></canvas>
            </div>

        </div>
    </div>



    <script>

        function PrintDate(date, desc){
            console.log(date); 
            console.log(desc);
        }

        function ServerStatusesLineCharts(input) {
    
            console.log(input);
            var ServiceId = [];
            var ServiceName = [];
            var ServiceDesc = [];
            

            $.post("data/GetServiceNames_data.php", function(data)
            {
                console.log(data);
                
                for (let i in data) {
                    ServiceId.push(data[i].ServiceId);
                    ServiceName.push(data[i].ServiceName);
                    ServiceDesc.push(data[i].ServiceDesc);
                }

                for (let i = 0; i < ServiceId.length; i++){

                    $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId[i], 'Timestamp': input }, 
                        function (data)
                        {
                            console.log(data);
                            var Timestamp = [];
                            var Status = [];
                            for (let i in data) {
                                Timestamp.push(data[i].Timestamp);
                                Status.push(data[i].status);
                            }
                            var chartdata = {
                                labels: Timestamp,
                                datasets: [
                                    {
                                        label: ServiceDesc[i], 
                                        backgroundColor: 'rgb(103, 161, 118)',
                                        borderColor: 'rgb(100, 129, 120)',
                                        hoverBackgroundColor: '#CCCCCC',
                                        hoverBorderColor: '#666666',
                                        data: Status,
                                        borderWidth: 1,
                                        pointRadius: 1,
                                        pointBackgroundColor: 'rgb(0, 0, 0)',
                                        pointBorderColor: 'rgb(0, 0, 0)'
                                    }
                                ]
                            };
                            var graphTarget = $("#Server"+ServiceId[i]+"Graph");
                            console.log(graphTarget);
                            var barGraph = new Chart(graphTarget, {
                                type: 'line',
                                data: chartdata,    
                                borderWidth: 1
                            });
                        });

                }

            });
        }

        var input;
        var dateEntered;


        document.getElementById("Refresh").addEventListener("click", function() {
            location.reload();
        });
            
        document.getElementById("dateInput").addEventListener("change", function() {
            input = this.value;
            dateEntered = new Date(input);
            PrintDate(input, dateEntered);
            ServerStatusesLineCharts(input);
        });


/*
        function selesai() {
            setTimeout(function() {
                ServerStatusesLineCharts();
                selesai();
            }, 200);
        }
*/
        </script>


   
    <script>

    </script>   
    </body>