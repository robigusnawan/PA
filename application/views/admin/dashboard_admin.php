<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url('index.php/admin');?>">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Charts</li>
      </ol>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Chart KIM DESA</div>
        <div class="card-body">
         <?php
        foreach($data as $row){
            $jumlah[] = $row->jumlah;
            $kecamatan[] = (float) $row->kecamatan;
        }
    ?>
          <canvas id="myAreaChart" width="100%" height="30"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
       <script src="<?php echo base_url().'assets/new/js/sb-admin-charts.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/new/vendor/chart.js/Chart.min.js'?>"> </script>
       <script type="text/javascript">
      Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
// -- Area Chart Example
var ctx = document.getElementById("myAreaChart");

var myLineChart = new Chart(ctx, {
  
  type: 'line',
  data: {
    
    labels: <?php echo json_encode($kecamatan);?>,
    datasets: [{
      label: "Sessions",
      lineTension: 0.3,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 20,
      pointBorderWidth: 2,
      data: <?php echo json_encode($jumlah);?>,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 40000,
          maxTicksLimit: 5
        },
        gridLines: {
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});


    </script>


     