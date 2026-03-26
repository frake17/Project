function setsort(value) {
  document.getElementById("sortby").innerText = value;
}

function setfilter(value) {
  document.getElementById("filterby").innerText = value;
}

const ctx = document.getElementById('ratingChart');
new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Rating'],
    datasets: [{
      label: 'Score',
      data: [4.5],
      backgroundColor: '#E94B3C',
    }]
  },
  options: {
  responsive: true,
  maintainAspectRatio: false,
  indexAxis: 'y',
  scales: {
    x: {
      min: 0,
      max: 5,
      ticks: {
        stepSize: 1
      }
    }
  },
  plugins: {
    legend: { display: false }
  }
}
});

const ctx2 = document.getElementById('ratingChart2');
new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: ['Rating'],
    datasets: [{
      label: 'Score',
      data: [1.5],
      backgroundColor: '#E94B3C',
    }]
  },
  options: {
  responsive: true,
  maintainAspectRatio: false,
  indexAxis: 'y',
  scales: {
    x: {
      min: 0,
      max: 5,
      ticks: {
        stepSize: 1
      }
    }
  },
  plugins: {
    legend: { display: false }
  }
}
});