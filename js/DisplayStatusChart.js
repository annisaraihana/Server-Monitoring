function ServerStatusesLineCharts() {
    
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
                                backgroundColor: 'rgb(16, 185, 129)',
                                borderColor: 'rgb(100, 129, 120)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status,
                                borderWidth: 1,
                                pointRadius: 1,
                                pointBackgroundColor: 'rgb(0, 0, 0)',
                                pointBorderColor: 'rgb(0, 0, 0)'
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
}