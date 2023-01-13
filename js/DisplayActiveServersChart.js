function ActiveServersBarChart() {
    {   
        var containerDiv = document.getElementById('active-server-chart-container');
        var oldcanv = document.getElementById('ActiveServersGraph');
        containerDiv.removeChild(oldcanv)

        var canv = document.createElement('canvas');
        canv.id = 'ActiveServersGraph';
        containerDiv.appendChild(canv);

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
                        backgroundColor: 'rgb(16, 185, 129)',
                        borderColor: 'rgb(103, 161, 118)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: ActiveServers,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#ActiveServersGraph");
            var barGraph;
            if (!barGraph){
                barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata,    
                    borderWidth: 1
                });
            }
            else {
                UpdateChart(barGraph, Timestamp, ActiveServers)
            }

        });
    }
}

function UpdateChart(chart, label, data) {   
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}
