<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemple pdf to chart</title>
</head>
<body>
<button class='export-pdf k-button'>Save as PDF</button>

<article>

        <div id="container-chart">
          <canvas id="myChart"></canvas>
        </div>
      </article>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="../dataViz/index.js"></script>
      <script> $(".export-pdf").click(function () {
            $("#myChart").getKendoChart().saveAsPDF();
        });

        var series = [{
            name: "cleaners",
            data: [75, 203, 205, 908, 975],
        }];
      function createChart() {
        $("#myChart").kendoChart({
                
                title: {
                    text: "export title"
                },

                legend: {
                    position: "bottom"
                },

                seriesDefaults: {
                    type: "column",
                    stack: true}
                },
                categoryAxis: {
                    categories: [2017, 2018, 2019, 2020, 2021],
                    majorGridLines: {
                        visible: false
                    }
                },

                tooltip: {
                    visible: true,
                    format: 0
                
            });
          }

          $(document).ready(function () {
            createChart();
            $(document).bind("kendo:skinChange", createChart);
            $(".options").bind("change", refresh);
        });

        function refresh() {
            var chart = $("#myChart").data("kendoChart"),
                type = $("input[name=seriesType]:checked").val(),
                stack = $("#stack").prop("checked");

            for (var i = 0, length = series.length; i < length; i++) {
                series[i].stack = stack;
                series[i].type = type;
            };

            chart.setOptions({
                series: series
            });
        }
        
        </script>
</body>
</html>