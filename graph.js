const data = {
  labels: [
    'Verre',
    'Plastique',
    'Cartons/Papiers',
    'Canettes',
    'Tout-venant',
    'Encombrants',
    'Mégots',
    'Protos'
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [100, 50, 10, 15, 50, 70, 10, 100],
    backgroundColor: [
      'rgb(255, 205, 86)',
      'rgb(51, 158, 114)',
      'rgb(255, 0, 0)',
      'rgb(56, 118, 29)',
      'rgb(230, 145, 56)',
      'rgb(143, 206, 0)',
      'rgb(116, 27, 71)',
      'rgb(120, 63, 4)'
    ],
    hoverOffset: 4
  }]
};

const config = {
  type: 'doughnut',
  data: data,
};

const myChart = new Chart(
  document.getElementById('myChart'),
  config
);
