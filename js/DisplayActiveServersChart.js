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
            var barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}
