<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          <div class="card-body py-0 px-0 px-sm-3">
            <div class="row align-items-center">
              <div class="col-4 col-sm-3 col-xl-2">
                <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
              </div>
              <div class="col-5 col-sm-7 col-xl-8 p-0">
                <h4 class="mb-1 mb-sm-0">Welcome to EasyVisit Admin Dashboard</h4>
                <p class="mb-0 font-weight-normal d-none d-sm-block">Here is the summary of the users</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Statistic Cards with Icons -->
    <div class="row">
      <div class="col-sm-4 grid-margin">
        <div class="card shadow-sm" style="background: linear-gradient(to right, #00c6ff, #0072ff);">
          <div class="card-body text-white">
            <h5>Number of Doctors</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <h2 class="mb-0">{{ $doctorCount }}</h2>
                <h6 class="text-light">Total doctors registered</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-doctor"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 grid-margin">
        <div class="card shadow-sm" style="background: linear-gradient(to right, #f953c6, #b91d73);">
          <div class="card-body text-white">
            <h5>Appointments</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <h2 class="mb-0">{{ $appointmentCount }}</h2>
                <h6 class="text-light">Total appointments</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-calendar"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 grid-margin">
        <div class="card shadow-sm" style="background: linear-gradient(to right, #0f9b0f, #00c6ff);">
          <div class="card-body text-white">
            <h5>Lab Staff</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <h2 class="mb-0">{{ $labStaffCount }}</h2>
                <h6 class="text-light">Total lab staff</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-test-tube"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-4 grid-margin">
        <div class="card shadow-sm" style="background: linear-gradient(to right, #ff512f, #dd2476);">
          <div class="card-body text-white">
            <h5>Pharmacy Staff</h5>
            <div class="row">
              <div class="col-8 col-sm-12 col-xl-8 my-auto">
                <h2 class="mb-0">{{ $pharmacyStaffCount }}</h2>
                <h6 class="text-light">Total pharmacy staff</h6>
              </div>
              <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                <i class="icon-lg mdi mdi-pill"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pie Charts and Bar Charts Section -->
    <div class="row">
      <div class="col-lg-6 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Appointment Statistics</h5>
            <canvas id="appointmentChart"></canvas>
          </div>
        </div>
      </div>

      <div class="col-lg-6 grid-margin">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Staff Distribution</h5>
            <canvas id="staffPieChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Scripts for Charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
 
var ctx = document.getElementById('appointmentChart').getContext('2d');
var appointmentChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: @json(array_keys($appointmentStats->toArray())), // Dynamic months
    datasets: [{
      label: 'Appointments',
      data: @json(array_values($appointmentStats->toArray())), // Dynamic counts
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});


  // Staff Pie Chart
  var ctxPie = document.getElementById('staffPieChart').getContext('2d');
  var staffPieChart = new Chart(ctxPie, {
    type: 'pie',
    data: {
      labels: ['Doctors', 'Lab Staff', 'Pharmacy Staff'],
      datasets: [{
        label: 'Staff Count',
        data: [{{ $doctorCount }}, {{ $labStaffCount }}, {{ $pharmacyStaffCount }}],
        backgroundColor: ['#00c6ff', '#f953c6', '#0f9b0f']
      }]
    }
  });
</script>