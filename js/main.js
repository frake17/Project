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

function showTab(tab, event) {
    event.preventDefault(); // prevent anchor jump // debug

    document.querySelectorAll('.tab-content').forEach(el => {
        el.classList.add('d-none');
        el.classList.remove('d-flex');
    });

    // Show selected tab
    const selected = document.getElementById(tab);
    selected.classList.remove('d-none');
    selected.classList.add('d-flex');

    // Update active class
    document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');
}

// Show default tab on page load
document.addEventListener("DOMContentLoaded", function () {
    const defaultBtn = document.querySelector('.tab-btn.active');
    if (defaultBtn) defaultBtn.click();
});

document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
    // You can add your deletion logic here, e.g., redirect or AJAX call
    alert('Account deleted!'); 
    // Close modal manually if needed
    const modalEl = document.getElementById('deleteConfirmModal');
    const modal = bootstrap.Modal.getInstance(modalEl);
    modal.hide();
});