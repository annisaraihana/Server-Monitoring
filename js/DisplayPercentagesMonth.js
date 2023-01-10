function ServerPercentageCurrentMonth() {
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

            $.post("data/ServerPercentage_data.php", { 'ServiceId': ServiceId[i] }, 
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
                                
                                data: [active,inactive],
                                backgroundColor: [ 
                                    'rgba(54, 162, 235, 0.7)',
                                    'rgba(255, 99, 132, 0.7)',   

                                ],
                                borderColor: [                              
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255,99,132,1)',
                                    
                                
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


}