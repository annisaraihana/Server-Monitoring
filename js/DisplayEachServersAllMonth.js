function DisplayServerAllMonthCuryear(ServiceId) {

    var MonthId = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
    const d = new Date();
    var Year = d.getFullYear();

    for (let i = 0; i < MonthId.length; i++){

        $.post("data/ServerPercentageAllMonth_data.php", { 'ServiceId': ServiceId, 'MonthId': MonthId[i], 'Year': Year }, 
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
                                'rgba(52, 211, 153, 0.7)',
                                'rgba(253, 224, 71, 0.7)',   

                            ],
                            borderColor: [                              
                                'rgba(16, 185, 129, 1)',
                                'rgba(250, 204, 21,1)',
                                
                            
                            ],
                            borderWidth: 1
                        }
                    ]
                };

                $("#Month"+MonthId[i]+"Graph").remove(); 
                $("#Month"+MonthId[i]).append("<canvas id=Month"+MonthId[i]+"Graph></canvas>");
                
                var graphTarget = $("#Month"+MonthId[i]+"Graph");
                console.log(graphTarget);
                var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: monthNames[i]
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
    
}

function DisplayServerAllMonthPrevyear(ServiceId) {

    var MonthId = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
    const monthNames = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];
    const d = new Date();
    var Year = (d.getFullYear()-1);

    for (let i = 0; i < MonthId.length; i++){

        $.post("data/ServerPercentageAllMonth_data.php", { 'ServiceId': ServiceId, 'MonthId': MonthId[i], 'Year': Year }, 
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
                                'rgba(52, 211, 153, 0.7)',
                                'rgba(253, 224, 71, 0.7)',   

                            ],
                            borderColor: [                              
                                'rgba(16, 185, 129, 1)',
                                'rgba(250, 204, 21,1)',
                                
                            
                            ],
                            borderWidth: 1
                        }
                    ]
                };

                $("#Month"+MonthId[i]+"Graph").remove(); 
                $("#Month"+MonthId[i]).append("<canvas id=Month"+MonthId[i]+"Graph></canvas>");
                
                var graphTarget = $("#Month"+MonthId[i]+"Graph");
                console.log(graphTarget);
                var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: monthNames[i]
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
    
}