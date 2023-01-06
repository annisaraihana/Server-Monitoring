<?php include 'autoload.php';
include 'env.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Servers Monitoring</title>
        <!-- CSS sementara-->
        <style type="text/css">
            BODY {
                    width:70%;
                    padding-left: 12%;
                }
                
                #chart-container {
                    width: 100%;
                    height: auto;
                }
                #small-chart-container {
                    width: 30%;
                    height: auto;
                }
                #small-chart-box {
                    display: inline-flex;
                    width: 100%;
                    height: auto;
                    padding: 10px;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                    /*align-items: center;
                    justify-content: center;*/
                }
        </style>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        

    </head>
    <body>

    <!-- HTML body-->

    <center>
        ____________________________________________________________________________________________
        <h1>Active Servers (one hour)</h1>
        _____________________________________________________________________________________________
    </center>
        <div id="chart-container">
            <canvas id="ActiveServersGraph"></canvas>
        </div>

    <center>
        ____________________________________________________________________________________________
        <h1>Server statuses (one day)</h1>
        _____________________________________________________________________________________________
    </center>

        <div id="small-chart-box">
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

    <center>
        ____________________________________________________________________________________________
        <h1>Percentage (Current Month)</h1>
        _____________________________________________________________________________________________
    </center>

        <div id="small-chart-box">
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
        </div>

    <!-- Javascript sementara-->
    <!-- script untuk menampilkan graphs-->
    <script>
        $(document).ready(function (){
            ActiveServersBarChart();

            Server001StatusBarChart();
            Server002StatusBarChart();
            Server003StatusBarChart();
            Server004StatusBarChart();
            Server005StatusBarChart();
            Server006StatusBarChart();
            Server007StatusBarChart();
            Server008StatusBarChart();
            Server009StatusBarChart();
            Server010StatusBarChart();
            Server011StatusBarChart();
            Server012StatusBarChart();
            Server013StatusBarChart();
            Server014StatusBarChart();
            Server015StatusBarChart();
            Server016StatusBarChart();
            Server017StatusBarChart();
            Server018StatusBarChart();
            Server019StatusBarChart();
            Server020StatusBarChart();
            Server021StatusBarChart();
            Server022StatusBarChart();
            Server023StatusBarChart();
            Server024StatusBarChart();
            Server025StatusBarChart();
            Server026StatusBarChart();
            Server027StatusBarChart();
            Server028StatusBarChart();
            Server029StatusBarChart();
            Server030StatusBarChart();
            Server031StatusBarChart();
            Server032StatusBarChart();

            Server001Percentage();
            Server002Percentage();
            Server003Percentage();
            Server004Percentage();


        });

        function ActiveServersBarChart() {
            {
                $.post("data/ActiveServers_data.php",
                function (data)
                {
                    console.log(data);
                    var Timestamp = [];
                    var ActiveServers = [];
                    for (var i in data) {
                        Timestamp.push(data[i].Timestamp);
                        ActiveServers.push(data[i].ActiveServers);
                    }
                    var chartdata = {
                        labels: Timestamp,
                        datasets: [
                            {
                                label: 'Active Servers',
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(103, 161, 118)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: ActiveServers,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#ActiveServersGraph");
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });
            }
        }

     

        


    </script>

    <script type="text/javascript" src="js/DisplayStatusChart.js"></script>
    <script type="text/javascript" src="js/DisplayPercentagesMonth.js"></script>           

    </body>
    </html>