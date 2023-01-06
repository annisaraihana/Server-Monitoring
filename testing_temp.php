<!DOCTYPE html>
<html>
    <head>
        <title>Testing</title>
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
    
    <div>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
        <canvas class="ServerStatus"></canvas>
    </div>

    <script>

    $.post("data/GetServiceNames_data.php", function(data)
    {
        console.log(data);
        var ServiceId = [];
        var ServiceName = [];
        var ServiceDesc = [];
        for (var i in data) {
            ServiceId.push(data[i].ServiceId);
            ServiceName.push(data[i].ServiceName);
            ServiceDesc.push(data[i].ServiceDesc);
        }

        console.log(ServiceDesc);

        $(".ServerStatus").each(function(ServiceId,ServiceDesc){

            $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId }, 
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
                                    label: ServiceDesc, 
                                    backgroundColor: 'rgb(103, 161, 118)',
                                    borderColor: 'rgb(100, 129, 120)',
                                    hoverBackgroundColor: '#CCCCCC',
                                    hoverBorderColor: '#666666',
                                    data: Status,
                                    borderWidth: 1
                                }
                            ]
                        };
                        var graphTarget = $(".ServerStatus"); 
                        var barGraph = new Chart(graphTarget, {
                            type: 'line',
                            data: chartdata,    
                            borderWidth: 1
                        });
                    });

            });  
    });


    
/*
    $(".ServerStatus").each(ServiceId, function(ServiceId,ServiceDesc){

        $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId }, 
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
                                label: ServiceDesc, 
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(100, 129, 120)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $(".ServerStatus"); 
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });

    });    
    
 /*   
    function Huekhuek() {
            {
            
                $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId }, 
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
                                label: ServiceDesc, 
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(100, 129, 120)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $(".ServerGraph"); 
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });
            }
        }
    
*/
    </script>   
    </body>