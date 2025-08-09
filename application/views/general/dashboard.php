<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>150</h3>
                  <p>New Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>
                  <p>Completed Tasks</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>New User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo base_url(); ?>userListing" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>65</h3>
                  <p>Reopened Issue</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
    </section>
<section class="content">
  <div class="row">
    
    <!-- Line Chart -->
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Line Chart</h3>
        </div>
        <div class="box-body">
          <canvas id="lineChart" height="200"></canvas>
        </div>
      </div>
    </div>

    <!-- Bar Chart -->
    <div class="col-md-6">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Bar Chart</h3>
        </div>
        <div class="box-body">
          <canvas id="barChart" height="200"></canvas>
        </div>
      </div>
    </div>

    <!-- Doughnut Chart -->
    <!-- <div class="col-md-6">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Doughnut Chart</h3>
        </div>
        <div class="box-body text-center" style="position: relative;">
          <canvas id="doughnutChart" height="200"></canvas>
          <div id="doughnutCenterText" 
               style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
                      font-size:20px;font-weight:bold;color:#333;">
          </div>
        </div>
      </div>
    </div> -->

    <!-- Pie Chart -->
   <!--  <div class="col-md-6">
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Pie Chart</h3>
        </div>
        <div class="box-body">
          <canvas id="pieChart" height="200"></canvas>
        </div>
      </div>
    </div> -->

    <!-- Polar Area Chart -->
   <!--  <div class="col-md-6">
      <div class="box box-warning">
        <div class="box-header with-border">
          <h3 class="box-title">Polar Area Chart</h3>
        </div>
        <div class="box-body">
          <canvas id="polarChart" height="200"></canvas>
        </div>
      </div>
    </div> -->

    <!-- Radar Chart -->
   <!--  <div class="col-md-6">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Radar Chart</h3>
        </div>
        <div class="box-body">
          <canvas id="radarChart" height="200"></canvas>
        </div>
      </div>
    </div> -->

  </div>
</section>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Shared Colors
  const colors = ['#00c0ef','#00a65a','#f39c12','#dd4b39','#3c8dbc','#605ca8'];

  // Line Chart
  new Chart(document.getElementById('lineChart'), {
    type: 'line',
    data: {
      labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
      datasets: [{
        label: 'Sales',
        data: [65,59,80,81,56,55,40],
        borderColor: colors[0],
        backgroundColor: 'rgba(0,192,239,0.2)',
        tension: 0.4,
        fill: true
      }]
    },
    options: { responsive: true }
  });

  // Bar Chart
  new Chart(document.getElementById('barChart'), {
    type: 'bar',
    data: {
      labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul'],
      datasets: [{
        label: 'Revenue',
        data: [28,48,40,19,86,27,90],
        backgroundColor: colors
      }]
    },
    options: { responsive: true }
  });

  // Doughnut Chart
  // const doughnutData = [150,53,44,65];
  // document.getElementById('doughnutCenterText').innerText = doughnutData.reduce((a,b)=>a+b,0);
  // new Chart(document.getElementById('doughnutChart'), {
  //   type: 'doughnut',
  //   data: {
  //     labels: ['New Tasks','Completed','Users','Reopened'],
  //     datasets: [{
  //       data: doughnutData,
  //       backgroundColor: colors
  //     }]
  //   },
  //   options: { responsive: true, cutout: '70%' }
  // });

  // // Pie Chart
  // new Chart(document.getElementById('pieChart'), {
  //   type: 'pie',
  //   data: {
  //     labels: ['Chrome','Firefox','IE','Safari','Edge'],
  //     datasets: [{
  //       data: [700,500,400,600,300],
  //       backgroundColor: colors
  //     }]
  //   },
  //   options: { responsive: true }
  // });

  // // Polar Area Chart
  // new Chart(document.getElementById('polarChart'), {
  //   type: 'polarArea',
  //   data: {
  //     labels: ['Download','In-Store','Mail-Order','Tele-sales','Corporate'],
  //     datasets: [{
  //       data: [11,16,7,3,14],
  //       backgroundColor: colors
  //     }]
  //   },
  //   options: { responsive: true }
  // });

  // // Radar Chart
  // new Chart(document.getElementById('radarChart'), {
  //   type: 'radar',
  //   data: {
  //     labels: ['Eating','Drinking','Sleeping','Designing','Coding','Cycling','Running'],
  //     datasets: [
  //       {
  //         label: 'Person A',
  //         data: [65,59,90,81,56,55,40],
  //         borderColor: colors[0],
  //         backgroundColor: 'rgba(0,192,239,0.2)'
  //       },
  //       {
  //         label: 'Person B',
  //         data: [28,48,40,19,96,27,100],
  //         borderColor: colors[1],
  //         backgroundColor: 'rgba(0,166,90,0.2)'
  //       }
  //     ]
  //   },
  //   options: { responsive: true }
  // });
</script>


    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <h3>Welcome To Our Portal</h3>
        </div>
      </div>

    </section>
    
</div>