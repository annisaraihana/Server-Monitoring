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
        </style>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
    </head>
    <body>

    <!-- HTML body-->

    <center>
        ____________________________________________________________________________________________
        <h1>Active Servers</h1>
        _____________________________________________________________________________________________
    </center>
        <div id="chart-container">
            <canvas id="ActiveServersGraph"></canvas>
        </div>

    <center>
        ____________________________________________________________________________________________
        <h1>Database Oracle Production Server status</h1>
        _____________________________________________________________________________________________
    </center>
        <div id="chart-container">
            <canvas id="Server001Graph"></canvas>
        </div>

    <!-- Javascript sementara-->
    <!-- script untuk menampilkan graphs-->

    <script>
        $(document).ready(function (){
            ActiveServersBarChart();
            Server001StatusBarChart();

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
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: ActiveServers,
                                backgroundColor: [
                                    
                                ],
                                borderColor: [
                                    
                                ],
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

        function Server001StatusBarChart() {
            {
                $.post("data/Server001Status_data.php",
                function (data)
                {
                    console.log(data);
                    var Timestamp = [];
                    var Status = [];
                    for (var i in data) {
                        Timestamp.push(data[i].Timestamp);
                        Status.push(data[i].status);
                    }
                    var chartdata = {
                        labels: Timestamp,
                        datasets: [
                            {
                                label: 'Database Oracle Production Server status',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                backgroundColor: [
                                    
                                ],
                                borderColor: [
                                    
                                ],
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#Server001Graph");
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });
            }
        }



    </script>


    </body>
    </html>