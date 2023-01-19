function ServerPercentageCurrentYear() {
    
    var ServiceId = [];
    var ServiceName = [];
    var ServiceDesc = [];
    

    $.post("data/GetServiceNames_data.php", function(data) //mengambil nama-nama dan id server
    {
        console.log(data);
        //memasukkan json ke array
        for (let i in data) {
            ServiceId.push(data[i].ServiceId);
            ServiceName.push(data[i].ServiceName);
            ServiceDesc.push(data[i].ServiceDesc);
        }

        for (let i = 0; i < ServiceId.length; i++){ //iterasi untuk setiap server

            $.post("data/ServerPercentageYearly_data.php", { 'ServiceId': ServiceId[i] }, //menunjuk ke fungsi php yang mengambil data dari db
                function (data)
                {
                    console.log(data);

                    var active = [];
                    var inactive = [];
                    //memasukkan json ke array
                    for (let i in data) {
                        active.push(data[i].ActiveCount);
                        inactive.push(data[i].InactiveCount);
                    }
                    //configurasi chart
                    var chartdata = {
                        labels: ["active","inactive"], //label bagian-bagian doughnut
                        datasets: [
                            {
                                data: [active,inactive], //data yang ditampilkan di doughnut chart
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

                    //untuk men-delete canvas dulu setiap akan mengganti graph
                    $("#Server"+ServiceId[i]+"Percentage").remove(); 
                    $("#Server"+ServiceId[i]).append("<canvas id=Server"+ServiceId[i]+"Percentage></canvas>");
                    
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
                            doughnutlabel: { //plugin chart js
                                labels: [
                                {
                                    //tulisan jumlah persen di tengah-tengah grafik
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

function ServerPercentagePrevYear() {
    
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

            $.post("data/ServerPercentagePrevYear_data.php", { 'ServiceId': ServiceId[i] }, 
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

                    $("#Server"+ServiceId[i]+"Percentage").remove(); 
                    $("#Server"+ServiceId[i]).append("<canvas id=Server"+ServiceId[i]+"Percentage></canvas>");
                    
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