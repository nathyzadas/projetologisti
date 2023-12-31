// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("fornecedores");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Loja", "Empresa"],
    datasets: [{
      data: [12.21, 8.32],
      backgroundColor: ['#ffc107', '#28a745'],
    }],
  },
});
