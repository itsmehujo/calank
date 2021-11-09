<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemple pdf to chart</title>
    <script src="https://kendo.cdn.telerik.com/2021.3.914/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2021.3.914/js/kendo.all.min.js"></script>
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
      <script>
          $(".export-pdf").click(function() {
            $("#myChart").getKendoChart().saveAsPDF();
        });
      function createChart() {
        $("#myChart").kendoChart({
                
    title: {
         text: "Kendo Chart Example"
    },
    series: [
         { name: "Example Series", data: [200, 450, 300, 125] }
    ],
    categoryAxis:{
         categories: [ 2000, 2001, 2002, 2003 ]
    }
});
      }

      $(document).ready(createChart);
        
        </script>
</body>
</html>