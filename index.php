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

     

        function Server001Percentage() {
            {
                $.post("data/Server001Percentage_data.php", function(data){
                    console.log(data);

                    var active = [];
                    var inactive = [];

                    for (var i in data) {
                        active.push(data[i].ActiveCount);
                        inactive.push(data[i].InactiveCount);
                    }

                    var chartdata = {
                        labels: ["active","inactive"],
                        datasets: [
                            {
                                label: 'Active percentage',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [active,inactive],
                                 backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }
                        ]
                    };

                    var graphTarget = $("#Server001Percentage");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            title: {
                            display: true,
                            text: 'Database Oracle Production'
                            }
                        }
                    });
                });


                    /*console.log(activedata);
                    console.log(inactivedata);
                    
                    var active = 
                    var inactive = 

                    var percentage = 0;

                    percentage = (activedata / (activedata+inactivedata)) * 100;

                    document.getElementById("Server001Percentage").innerHTML = percentage;*/
            }
        }

        function Server002Percentage() {
            {
                $.post("data/Server002Percentage_data.php", function(data){
                    console.log(data);

                    var active = [];
                    var inactive = [];

                    for (var i in data) {
                        active.push(data[i].ActiveCount);
                        inactive.push(data[i].InactiveCount);
                    }

                    var chartdata = {
                        labels: ["active","inactive"],
                        datasets: [
                            {
                                label: 'Active percentage',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [active,inactive],
                                 backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }
                        ]
                    };

                    var graphTarget = $("#Server002Percentage");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            title: {
                            display: true,
                            text: 'Database Oracle Standby'
                            },
                            plugins: {
                                doughnutlabel: {
                                    labels: [
                                    {
                                        text: 'The title',
                                        font: {
                                        size: '60'
                                        }
                                    }
                                    
                                    ]
                                }

                            }
                            
                        }
                    });
                });

            }
        }


        function Server003Percentage() {
            {
                $.post("data/Server003Percentage_data.php", function(data){
                    console.log(data);

                    var active = [];
                    var inactive = [];

                    for (var i in data) {
                        active.push(data[i].ActiveCount);
                        inactive.push(data[i].InactiveCount);
                    }

                    var chartdata = {
                        labels: ["active","inactive"],
                        datasets: [
                            {
                                label: 'Active percentage',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [active,inactive],
                                 backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }
                        ]
                    };

                    var graphTarget = $("#Server003Percentage");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            title: {
                            display: true,
                            text: 'Web server nol.simetris.rss'
                            }
                        }
                    });
                });

            }
        }

        function Server004Percentage() {
            {
                $.post("data/Server004Percentage_data.php", function(data){
                    console.log(data);

                    var active = [];
                    var inactive = [];

                    for (var i in data) {
                        active.push(data[i].ActiveCount);
                        inactive.push(data[i].InactiveCount);
                    }

                    var chartdata = {
                        labels: ["active","inactive"],
                        datasets: [
                            {
                                label: 'Active percentage',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: [active,inactive],
                                 backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }
                        ]
                    };

                    var graphTarget = $("#Server004Percentage");

                    var barGraph = new Chart(graphTarget, {
                        type: 'doughnut',
                        data: chartdata,
                        options: {
                            title: {
                            display: true,
                            text: 'Web server satu.simetris.rss'
                            }
                        }
                    });
                });

            }
        }


    </script>

    <script type="text/javascript" src="js/DisplayStatusChart.js"></script>           

    </body>
    </html>