<!DOCTYPE html>
<html>
    <head>
        <title>Percentages</title>
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
           

            Server001Percentage();
            Server002Percentage();
            Server003Percentage();
            Server004Percentage();
            Server005Percentage();
            Server006Percentage();
            Server007Percentage();
            Server008Percentage();
            Server009Percentage();
            Server010Percentage();
            Server011Percentage();
            Server012Percentage();
            Server013Percentage();
            Server014Percentage();
            Server015Percentage();
            Server016Percentage();
            Server017Percentage();
            Server018Percentage();
            Server019Percentage();
            Server020Percentage();
            Server021Percentage();
            Server022Percentage();
            Server023Percentage();
            Server024Percentage();
            Server025Percentage();
            Server026Percentage();
            Server027Percentage();
            Server028Percentage();
            Server029Percentage();
            Server030Percentage();
            Server031Percentage();
            Server032Percentage();


        });
    </script>   
    <script type="text/javascript" src="js/DisplayPercentagesMonth.js"></script> 
    </body>