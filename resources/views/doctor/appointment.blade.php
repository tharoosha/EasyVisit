<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Doctor Interface</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <!-- Include DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
</head>
<body>
  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <div class="topbar">
      <!-- Topbar content -->
      <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +94760625621</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> easyvisit@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div>
    
   @include('doctor.doctornavigation')

 
  </header>

  <body>
   
       
        <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
            <table id="appointmentsTable" class="display">
                <thead>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Customer name</th>
                        <th style="padding:10px">Email</th>
                        <th style="padding:10px">Phone</th>
                        <th style="padding:10px">Doctor Name</th>
                        <th style="padding:10px">Date</th>
                        <th style="padding:10px">Message</th>
                        <th style="padding:10px">Status</th>
                        <th style="padding:10px">Approved</th>
                        <th style="padding:10px">Canceled</th>
                        <th style="padding:10px">Create Prescription</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                    <tr align="center" style="background-color:skyblue;">
                        <td>{{$appointment->name}}</td>
                        <td>{{$appointment->email}}</td> 
                        <td>{{$appointment->phone}}</td>
                        <td>{{$appointment->doctor}}</td>
                        <td>{{$appointment->date}}</td>
                        <td>{{$appointment->message}}</td>
                        <td>{{$appointment->status}}</td>
                        <td>
    <form id="approveForm{{$appointment->id}}" action="{{url('dapproved',$appointment->id)}}" method="POST">
        @csrf
        
        <!-- <button id="approveButton{{$appointment->id}}" class="btn btn-success" type="submit" onclick="handleApproval({{$appointment->id}})" @if($appointment->status == 'approved' || $appointment->status == 'Canceled') disabled @endif>Approved</button> -->
        <button id="approveButton{{$appointment->id}}" class="btn btn-success" type="submit" 
        onclick="handleApproval({{$appointment->id}})" 
        @if($appointment->status == 'approved' || $appointment->status == 'Canceled') disabled @endif>
        Approved
    </button>

    
      </form>
</td>
<td>
    <form id="cancelForm{{$appointment->id}}" action="{{url('dcanceled',$appointment->id)}}" method="POST">
        @csrf
        <button id="cancelButton{{$appointment->id}}" class="btn btn-danger" type="submit" onclick="handleCancellation({{$appointment->id}})" @if($appointment->status == 'approved' || $appointment->status == 'Canceled') disabled @endif>Canceled</button>
    </form>
</td>
<td>
    @if($appointment->status == 'approved')
        <a class="btn btn-primary" href="{{url('prescription_view', ['id' => $appointment->id, 'name' => $appointment->name])}}">Create Prescription</a>
    @else
        <a class="btn btn-primary disabled" href="javascript:void(0);" onclick="return false;">Create Prescription</a>
    @endif
</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
        </div>

        <br>
        <br>
        <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Doctors</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Counselling</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Pharamcies</a></li>
            <li><a href="#">Laboratories</a></li>
            <li><a href="#">Reports</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">223 Lady McCullums' Drive Kandy</p>
          <a href="#" class="footer-link">0760625621</a>
          <a href="#" class="footer-link">easyvist@gmail.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2024 <a href="easyvisit@gmail.com" target="_blank">EasyVisit</a>. All
        right reserved</p>
    </div>
  </footer>

  
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
  <!-- Include DataTables JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!-- Initialize DataTables -->
  <script>
    $(document).ready(function() {
      $('#appointmentsTable').DataTable();
    });
    function handleApproval(appointmentId) {
        // Disable the "Canceled" button
        document.getElementById('cancelButton' + appointmentId).disabled = true;
    }

    function handleCancellation(appointmentId) {
        // Disable the "Approved" button
        document.getElementById('approveButton' + appointmentId).disabled = true;
    }

  
</script>
  </body>
</html>
