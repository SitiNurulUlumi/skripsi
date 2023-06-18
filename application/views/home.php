  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <?= $title ?>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> <?= $title ?></a></li>
          <li><a href="#"><?= $subtitle ?></a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php
        if ($this->session->userdata('is_logged_in') && $this->session->userdata('role') != 3) {
        ?>
        <!-- Form untuk filter tanggal, jam, dan total kendaraan -->
         <!-- Form untuk filter tanggal, jam, dan total kendaraan -->
         <!-- Form untuk filter tanggal -->
    <form action="<?php echo site_url('home/getChartData'); ?>" method="post">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>

        <button type="submit">Submit</button>
    </form>

    <!-- Container untuk menampilkan chart -->
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
        <?php } ?> 
      
          </div>
        </div>
         <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
    
  </div>