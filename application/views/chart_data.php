<!DOCTYPE html>
<html>
<head>
    <title>Chart Data</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Chart Data</h1>

    <div>
        <canvas id="myChart"></canvas>
    </div>

    <script>
        // Mendapatkan data dari PHP
        var chartData = <?php echo json_encode($chartData); ?>;

        // Memproses data untuk digunakan oleh Chart.js
        var labels = [];
        var carData = [];
        var motorbikeData = [];
        var truckData = [];
        var busData = [];

        for (var i = 0; i < chartData.length; i++) {
            labels.push(chartData[i].Record_Date);
            carData.push(chartData[i].Total_Car);
            motorbikeData.push(chartData[i].Total_Motorbike);
            truckData.push(chartData[i].Total_Truck);
            busData.push(chartData[i].Total_Bus);
        }

        // Membuat chart menggunakan Chart.js
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Car',
                        data: carData,
                        backgroundColor: 'rgba(255, 99, 132, 0.5)'
                    },
                    {
                        label: 'Motorbike',
                        data: motorbikeData,
                        backgroundColor: 'rgba(54, 162, 235, 0.5)'
                    },
                    {
                        label: 'Truck',
                        data: truckData,
                        backgroundColor: 'rgba(255, 206, 86, 0.5)'
                    },
                    {
                        label: 'Bus',
                        data: busData,
                        backgroundColor: 'rgba(75, 192, 192, 0.5)'
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>