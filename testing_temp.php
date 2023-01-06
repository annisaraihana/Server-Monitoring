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
        
    </div>
        <div id="small-chart-container">
            <canvas id="ServerGraph001"></canvas>
        </div>
    <script>

    var ServiceId = [];
    var ServiceName = [];
    var ServiceDesc = [];
    

    $.post("data/GetServiceNames_data.php", function(data)
    {
        console.log(data);
        
        for (var i in data) {
            ServiceId.push(data[i].ServiceId);
            ServiceName.push(data[i].ServiceName);
            ServiceDesc.push(data[i].ServiceDesc);
        }
        for (var i = 0; i < 32; i++) 
        { console.log(ServiceId[i]); }

        for (var i = 0; i < ServiceId.length; i++){

            $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId[i] }, 
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
                                label: ServiceDesc[i], 
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(100, 129, 120)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#ServerGraph"+ServiceId[i]);
                    console.log(graphTarget);
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });

        }

    });


    /*console.log(ServiceId);
    console.log(ServiceName);
    console.log(ServiceDesc);


        /*
        for (var i in ServiceId){
            element = document.createElement('canvas');
            element.setAttribute("id", "ServerGraph" + ServiceId[i]);
        }

        */
    /*
        for (var i in ServiceId){

            $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId[i] }, 
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
                                label: ServiceDesc[i], 
                                backgroundColor: 'rgb(103, 161, 118)',
                                borderColor: 'rgb(100, 129, 120)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1
                            }
                        ]
                    };
                    var graphTarget = $("#ServerGraph"+ServiceId[i]);
                    console.log(graphTarget);
                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });

        }

        /*
        for (var i in data) {
            ServiceId.push(data[i].ServiceId);
            ServiceName.push(data[i].ServiceName);
            ServiceDesc.push(data[i].ServiceDesc);
        }
        */

        /*
        for (var i in data){

            ServiceId.push(data[i].ServiceId);
            ServiceName.push(data[i].ServiceName);
            ServiceDesc.push(data[i].ServiceDesc);

            $("canvas").each(function(ServiceId,ServiceDesc){

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
            
        }
/*
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
        */
   


    
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