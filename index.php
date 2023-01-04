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
                    width: 50%;
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
        <h1>Server statuses</h1>
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
        </div>

    <!-- Javascript sementara-->
    <!-- script untuk menampilkan graphs-->

    <script>
        $(document).ready(function (){
            ActiveServersBarChart();
            Server001StatusBarChart();
            Server002StatusBarChart();
            Server003StatusBarChart();

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
                                label: 'Database Oracle Production',
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(103, 161, 118)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#Server001Graph");
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });
            }
        }

        function Server002StatusBarChart() {
            {
                $.post("data/Server002Status_data.php",
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
                                label: 'Database Oracle Standby',
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(103, 161, 118)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#Server002Graph");
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });
            }
        }

        function Server003StatusBarChart() {
            {
                $.post("data/Server003Status_data.php",
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
                                label: 'Web server nol.simetris.rss',
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(103, 161, 118)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#Server003Graph");
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });
            }
        }




    </script>


    </body>
    </html>