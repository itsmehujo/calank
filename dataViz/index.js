

const labels = [
    '2017',
    '2018',
    '2019',
    '2020',
    '2021',
  ];
  const data = {
    labels: labels,
    datasets: [{
      label: "nombre de cleaners d'année en année ",
      backgroundColor: "rgb(12, 75, 102, 0.5)", 
      borderColor: "rgb(12, 75, 102)",
      barThickness: 100,
      maxBarThickness: 100,
      borderWidth : 1,
      data: [
        {"cleaners": 75,  "année": 2017},
        {"cleaners": 272, "année": 2018},
        {"cleaners": 290, "année": 2019},
        {"cleaners": 993, "année": 2020},
        {"cleaners": 908, "année": 2021},        
    ],
    }]
  };


  const config = {
    type: 'bar',
    data: data,
    options: {
        parsing: {
            xAxisKey: 'année',
            yAxisKey: 'cleaners'
        }
    }
  };
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
