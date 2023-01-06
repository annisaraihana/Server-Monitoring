
//Single function to display every graph WIP
/*
function ServerStatusBarChart(ServiceId) {
    {
        //ServerStatuses_data.php diganti jangan jadi fungsi dulu, tapi pake $ServiceId = $_POST['ServiceId'];   aja untuk nge passing parameter nya
        $.post("../data/ServerStatuses_data.php", { 'ServiceId': ServiceId }, 
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
                        label: 'Database Oracle Production', //ini jangan hard coded
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server001Graph"); //ini jangan hardcoded
            var barGraph = new Chart(graphTarget, { //idk
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}
*/

//Each graph displayed copypasted below here
//-------------------------------------------

function Server001StatusBarChart() {
    {
       
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 001 }, 
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

function Server002StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 002 },
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
                        label: 'Database Oracle Standby',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server002Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server003StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 003 },
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
                        label: 'Web server nol.simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server003Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server004StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 004 },
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
                        label: 'Web server satu.simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server004Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server005StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 005 },
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
                        label: 'Web server dua.simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server005Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server006StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 006 },
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
                        label: 'Web server tiga.simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server006Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server007StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 007 },
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
                        label: 'Server public 140',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server007Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server008StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 008 },
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
                        label: 'Web Service Java untuk Eksternal (BUK, Dinkes dll)',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server008Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server009StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 009 },
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
                        label: 'Web Server PACS',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server009Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server010StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 010 },
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
                        label: 'Mysql Server untuk PACS/Worklist Order',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server010Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server011StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 011 },
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
                        label: 'INACBG',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server011Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server012StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 012 },
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
                        label: 'INACBGs Test',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server012Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server013StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 013 },
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
                        label: 'Web Service BPJS',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server013Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server014StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 014 },
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
                        label: 'Web Service BPJS 2.0',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server014Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server015StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 015 },
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
                        label: 'SMS Gateway Pelayanan Simetris',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server015Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server016StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 016 },
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
                        label: 'SMS Gateway untuk Informasi RS',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server016Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server017StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 017 },
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
                        label: 'Table Habsen untuk memeriksa data presensi',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server017Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server018StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 018 },
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
                        label: 'Web Service Jasa Rahardja',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server018Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server019StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 019 },
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
                        label: 'Web Service PHP untuk Internal (simetris.net dll)',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server019Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server020StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 020 },
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
                        label: 'Memeriksa data POCT NovaNet',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server020Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server021StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 021 },
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
                        label: 'Memeriksa data POCT iStat',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server021Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server022StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 022 },
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
                        label: 'Load Balancer simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server022Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server023StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 023 },
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
                        label: 'Web server empat.simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server023Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server024StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 024 },
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
                        label: 'Web server enam.simetris.rss',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server024Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server025StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 025 },
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
                        label: 'Load Balancer simetris.my.id',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server025Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server026StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 026 },
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
                        label: 'Server public 141',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server026Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server027StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 027 },
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
                        label: 'Server public 142',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server027Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server028StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 028 },
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
                        label: 'Memeriksa data dari Roche (10 menit)',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server028Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server029StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 029 },
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
                        label: 'Memeriksa data dari Summit (60menit)',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server029Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server030StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 030 },
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
                        label: 'Memeriksa data dari SIMLIS (30 menit)',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server030Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server031StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 031 },
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
                        label: 'Mengambil Data Finger Dokter',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server031Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}

function Server032StatusBarChart() {
    {
        $.post("data/ServerStatuses_data.php", { 'ServiceId': 032 },
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
                        label: 'Checking Internet ke Google',
                        backgroundColor: 'rgb(103, 161, 118)',
                        borderColor: 'rgb(100, 129, 120)',
                        hoverBackgroundColor: '#CCCCCC',
                        hoverBorderColor: '#666666',
                        data: Status,
                        borderWidth: 1
                    }
                ]
            };
            var graphTarget = $("#Server032Graph");
            var barGraph = new Chart(graphTarget, {
                type: 'line',
                data: chartdata,    
                borderWidth: 1
            });
        });
    }
}