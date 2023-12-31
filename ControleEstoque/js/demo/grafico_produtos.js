// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Pie Chart Example
var ctx = document.getElementById("produtos");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["Shampoo", "Condicionador", "Óleo", "Máscara", "Spray"],
    datasets: [{
      data: [12.21, 15.58, 11.25, 8.32, 9.76],
      backgroundColor: ['#c79d33', '#dc3545', '#ffc107', '#28a745','#336BFF'],
    }],
  },
});
