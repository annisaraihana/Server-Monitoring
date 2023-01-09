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

    <center>
        ____________________________________________________________________________________________
        <h1>Grafik Status Server dalam sehari (01 Januari 2023)</h1>
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

    <script>

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

            $.post("data/ServerStatuses_data.php", { 'ServiceId': ServiceId[i] }, 
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
                                borderWidth: 1
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