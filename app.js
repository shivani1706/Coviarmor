$(document).ready(function(){
    $.ajax({
      url: "http://localhost/project/data.php",
      method: "GET",
      success: function(data) {
        console.log(data);
        var day = [];
        var temp = [];
  
        for(var i in data) {
          day.push("Day " + data[i].day);
          temp.push(data[i].temp);
        }
  
        var chartdata = {
          labels: day,
          datasets : [
            {
              label: 'Temperature',
              backgroundColor: 'rgba(200, 200, 200, 0.75)',
              borderColor: 'rgba(200, 200, 200, 0.75)',
              hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: temp
            }
          ]
        };
  
        var ctx = $("#mycanvas");
  
        var barGraph = new Chart(ctx, {
          type: 'bar',
          data: chartdata
        });
      },
      error: function(data) {
        console.log(data);
      }
    });
  });