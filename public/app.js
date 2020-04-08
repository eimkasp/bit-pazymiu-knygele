$(document).ready(function () {


    // 1. issiunciam uzklausa i url'a
    $.get("/lectures-chart-data",
      // atsakymas uzklausos
      function (data) {
          // 3. issaugomas uzklausos grazintas rezultatas
          createChart(data);
          // chartData.values
          // chartData.labels
      });

    function createChart(chartData) {
        var ctx = document.getElementById('canvas');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: '# of Votes',
                    data: chartData.values,
                    borderWidth: 10
                }]
            }
        });
    }


});