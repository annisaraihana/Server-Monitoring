function ServerStatusesLineCharts(input) {

    //menampilkan tulisan loading
    document.getElementById("loadingDiv").style.display = ""
    
    console.log(input);
    var ServiceId = [];
    var ServiceName = [];
    var ServiceDesc = [];
    

    $.post("../data/GetServiceNames_data.php", function(data) //mengambil nama-nama dan id server
    {
        console.log(data);
        //memasukkan json ke array    
        for (let i in data) {
            ServiceId.push(data[i].ServiceId);
            ServiceName.push(data[i].ServiceName);
            ServiceDesc.push(data[i].ServiceDesc);
        }

        for (let i = 0; i < ServiceId.length; i++){ //iterasi untuk setiap server

            $.post("../data/ServerStatuses_data.php", { 'ServiceId': ServiceId[i], 'Timestamp': input }, //menunjuk ke fungsi php yang mengambil data dari db
                function (data)
                {
                    console.log(data);
                    var Timestamp = [];
                    var Status = [];
                    //memasukkan json ke array
                    for (let i in data) {
                        Timestamp.push(data[i].Timestamp);
                        Status.push(data[i].status);
                    }
                    //configurasi chart
                    var chartdata = {
                        labels: Timestamp, //label-label axis-x
                        datasets: [
                            {
                                label: ServiceDesc[i], //label nama server diatas grafik
                                backgroundColor: 'rgb(16, 185, 129)',
                                borderColor: 'rgb(100, 129, 120)',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: Status, //data yang ditampilkan
                                borderWidth: 1,
                                pointRadius: 1,
                                pointBackgroundColor: 'rgb(0, 0, 0)',
                                pointBorderColor: 'rgb(0, 0, 0)'
                            }
                        ]
                    };
                    
                    //untuk men-delete canvas dulu setiap akan mengganti graph
                    $("#Server"+ServiceId[i]+"Graph").remove(); 
                    $("#Server"+ServiceId[i]).append("<canvas id=Server"+ServiceId[i]+"Graph></canvas>");

                    var graphTarget = $("#Server"+ServiceId[i]+"Graph");
                    console.log(graphTarget);
                    var barGraph;
                    
                    barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata,    
                        borderWidth: 1
                    });
                });

        }

        //menghilangkan div loading
        setTimeout(removeLoader, 10000);        

    });
}

function removeLoader(){
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).css('display','none');
  });  
}