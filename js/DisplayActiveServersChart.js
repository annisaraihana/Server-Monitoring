var barGraph;

function ActiveServersBarChart() {
    {   
        $.post("../data/ActiveServers_data.php", //menunjuk ke fungsi php yang mengambil data dari db
        function (data)
        {
            console.log(data);
            var Timestamp = [];
            var ActiveServers = [];
            //memasukkan json ke array
            for (var i in data) {
                Timestamp.push(data[i].Timestamp);
                ActiveServers.push(data[i].ActiveServers);
            }
            //configurasi chart
            var chartdata = {
                labels: Timestamp, //label-label axis-x
                datasets: [
                    {
                        label: 'Active Servers',
                        backgroundColor: 'rgb(16, 185, 129)',
                        borderColor: 'rgb(103, 161, 118)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: ActiveServers, //data yang ditampilkan
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#ActiveServersGraph");
            if (!barGraph){ //jika graph belum ada, buat baru
                barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata,    
                    options: {
                        scales: {
                            yAxes: [{
                                display: true,
                                ticks: {
                                    suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                                    suggestedMax: 40
                                }
                            }]
                        }
                    },
                    borderWidth: 1
                });
            }
            else { //jika graph sudah ada, destroy yang sebelumnya dulu
                barGraph.destroy();
                barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata,    
                    options: {
                        scales: {
                            yAxes: [{
                                display: true,
                                ticks: {
                                    suggestedMin: 0,    // minimum will be 0, unless there is a lower value.
                                    suggestedMax: 40
                                }
                            }]
                        }
                    },
                    borderWidth: 1
                });
                console.log("chart updated");
            }

        });
    }
}
