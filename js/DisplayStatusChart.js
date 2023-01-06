
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