function ServerStatusBarChart() {
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
                        borderColor: 'rgb(100, 129, 120)',
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