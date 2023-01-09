<!DOCTYPE html>
<html>
    <head>
        <title>Yearly Performance</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        

    </head>
    <body>
    
    <center>
        ____________________________________________________________________________________________
        <h1>Percentage (YEAR 2022)</h1>
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

        <script>

        $(document).ready(function (){
            ServerPercentageCurrentYear();
        });

        </script>
        <script type="text/javascript" src="js\DisplayPercentagesYear.js" charset="utf-8"></script>


    <script>
/*
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

            $.post("data/ServerPercentageYearly_data.php", { 'ServiceId': ServiceId[i] }, 
                function (data)
                {
                    console.log(data);

                    var active = [];
                    var inactive = [];

                    for (let i in data) {
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
                                    
                                ],
                                borderColor: [
                                    'rgba(255,99,132,1)',
                                    'rgba(54, 162, 235, 1)',
                                
                                ],
                                borderWidth: 1
                            }
                        ]
                    };
                    
                    var graphTarget = $("#Server"+ServiceId[i]+"Percentage");
                    console.log(graphTarget);
                    var barGraph = new Chart(graphTarget, {
                    type: 'doughnut',
                    data: chartdata,
                    options: {
                        cutoutPercentage: 80,
                        title: {
                        display: true,
                        text: ServiceDesc[i]
                        },
                        plugins: {
                            doughnutlabel: {
                                labels: [
                                {
                                    text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                    font: {
                                    size: '20'
                                    }
                                }
                                
                                ]
                            }

                        }
                    }
                });
                });

        }

    });
*/

    </script>   
    </body>