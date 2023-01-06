function Server001Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 001 },
         function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server001Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Database Oracle Production'
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

function Server002Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 002 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                    
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                          
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server002Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Database Oracle Standby'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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


function Server003Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 003 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server003Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web server nol.simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server004Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 004 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server004Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web server satu.simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server005Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 005 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server005Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web server dua.simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server006Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 006 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server006Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web server tiga.simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server007Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 007 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server007Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Server public 140'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server008Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 008 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server008Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web Service Java untuk Eksternal (BUK, Dinkes dll)'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server009Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 009 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server009Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web Server PACS'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server010Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 010 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server010Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Mysql Server untuk PACS/Worklist Order'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server011Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 011 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server011Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'INACBG'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server012Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 012 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server012Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'INACBGs Test'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server013Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 013 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server013Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web Service BPJS'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server014Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 014 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server014Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web Service BPJS 2.0'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server015Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 015 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server015Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'SMS Gateway Pelayanan Simetris'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server016Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 016 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server016Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'SMS Gateway untuk Informasi RS'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server017Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 017 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server017Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Table Habsen untuk memeriksa data presensi'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server018Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 018 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server018Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web Service Jasa Rahardja'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server019Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 019 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server019Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web Service PHP untuk Internal (simetris.net dll)'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server020Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 020 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server020Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Memeriksa data POCT NovaNet'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server021Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 021 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server021Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Memeriksa data POCT iStat'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server022Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 022 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server022Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Load Balancer simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server023Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 023 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server023Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web server empat.simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server024Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 024 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server024Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Web server enam.simetris.rss'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server025Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 025 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server025Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Load Balancer simetris.my.id'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server026Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 026 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server026Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Server public 141'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server027Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 027 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server027Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Server public 142'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server028Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 028 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server028Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Memeriksa data dari Roche (10 menit)'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server029Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 029 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server029Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Memeriksa data dari Summit (60menit)'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server030Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 030 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server030Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Memeriksa data dari SIMLIS (30 menit)'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server031Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 031 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server031Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Mengambil Data Finger Dokter'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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

function Server032Percentage() {
    {
        $.post("data/ServerPercentage_data.php", { 'ServiceId': 032 },
        function(data){
            console.log(data);

            var active = [];
            var inactive = [];

            for (var i in data) {
                active.push(data[i].ActiveCount);
                inactive.push(data[i].InactiveCount);
            }

            var chartdata = {
                labels: ["active","inactive"],
                datasets: [
                    {
                        label: 'Active percentage',
                        backgroundColor: '#49e2ff',
                        borderColor: '#46d5f1',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: [active,inactive],
                         backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                           
                        ],
                        borderWidth: 1
                    }
                ]
            };

            var graphTarget = $("#Server032Percentage");

            var barGraph = new Chart(graphTarget, {
                type: 'doughnut',
                data: chartdata,
                options: {
                    cutoutPercentage: 80,
                    title: {
                    display: true,
                    text: 'Checking Internet ke Google'
                    },
                    plugins: {
                        doughnutlabel: {
                            labels: [
                            {
                                text: (parseInt(active)*100/(parseInt(active)+parseInt(inactive))).toFixed(3)+'%',
                                font: {
                                size: '60'
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