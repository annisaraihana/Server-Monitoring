<!DOCTYPE html>
<html>
    <head>
        <title>Servers Monitoring Dashboard</title>
        <!--link rel="stylesheet" href="css/style.css"-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/Chart.min.js"></script>
        <script type="text/javascript" src="js/chartjs-plugin-doughnutlabel.min.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        

    </head>

    <body>
<div>
            Pilih tanggal: <input type="date" id="dateInput"/>
</div>

<script>

function PrintDate(date, desc){
    console.log(date); //e.g. 2015-11-13
    console.log(desc); //e.g. Fri Nov 13 2015 00:00:00 GMT+0000 (GMT Standard Time)
}

function ServerStatusesLineCharts(input) {

    var ServiceId = 001;
    $.post("data/test.php", { 'ServiceId': ServiceId, 'Timestamp': input }, function(data){
        console.log(data);
    });
}

var input;
var dateEntered;

document.getElementById("dateInput").addEventListener("change", function() {
    input = this.value;
    dateEntered = new Date(input);
    PrintDate(input, dateEntered);
    ServerStatusesLineCharts(input);
    
});



</script>

</body>