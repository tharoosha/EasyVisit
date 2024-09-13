<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>View Prescription Interface</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    /* Custom Styles */
    .hero-section {
      background-image: linear-gradient(to right, #75ddf2, #69b6f5);
      padding: 100px 0;
      text-align: center;
      color: #fff;
    }
    .hero-content {
      max-width: 600px;
      margin: 0 auto;
    }
    .hero-content h1 {
      font-size: 3.5rem;
      margin-bottom: 30px;
      line-height: 1.2;
    }
    .hero-content p {
      font-size: 1.2rem;
      margin-bottom: 40px;
      line-height: 1.6;
    }
    .health-tips {
      padding: 80px 0;
      text-align: center;
    }
    .health-tips h2 {
      font-size: 2.5rem;
      margin-bottom: 50px;
      color: #333;
    }
    .health-tips p {
      font-size: 1.2rem;
      line-height: 1.8;
      color: #666;
    }
     /* Table styling */
     #appointmentsTable {
      width: 80%; /* Reduced table width */
      border-collapse: collapse;
      margin: 20px 0; /* Reduced margin */
      font-size: 16px; /* Reduced font size */
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #appointmentsTable thead {
      background-color: #343a40;
      color: white;
    }

    #appointmentsTable th,
    #appointmentsTable td {
      padding: 10px; /* Reduced padding */
      border: 1px solid #ddd;
    }

    #appointmentsTable tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #appointmentsTable tbody tr:hover {
      background-color: #e9ecef;
    }

    #appointmentsTable th {
      background-color: #007bff;
      color: white;
      text-transform: uppercase;
      font-weight: bold;
    }

    #appointmentsTable td {
      color: #333;
    }

    /* Button styling inside the table */
    .btn-success {
      padding: 5px 10px; /* Reduced padding */
      font-size: 14px;
      text-transform: uppercase;
      border-radius: 20px;
      background-color: #28a745;
      border: none;
      color: white;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn-success:hover {
      background-color: #218838;
    }

    /* Reducing the gap between navbar and table */
    
  </style>
</head>
<body>
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
    
 @include('pharmacy.pharmacynavigation')
 
  </header>

<body>
      @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
<div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:50px;">
            <table id="appointmentsTable" class="display">
                <thead>
                    <tr style="background-color:black;">
                        <th style="padding:10px">Patient name</th>
                        <th style="padding:10px">Doctor name</th>
                        <th style="padding:10px">Patient Email</th>
                        <th style="padding:10px">Age</th>
                        <th style="padding:10px">ID Number</th>
                        <th style="padding:10px">Prescription</th>
                        <th style="padding:10px">Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($prescriptions as $prescription)
                    <tr align="center" style="background-color:skyblue;">
                        <td>{{$prescription->name}}</td>
                        <td>{{$prescription->dname}}</td> 
                        <td>{{$prescription->email}}</td> 
                        <td>{{$prescription->age}}</td>
                        <td>{{$prescription->idNo}}</td>
                        <td>{{$prescription->Prescription}}</td>
                        
                        <td>
    <form action="{{ route('sendprescription.post', ['id' => $prescription->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="name" value="{{ $prescription->name }}">
        <input type="hidden" name="age" value="{{ $prescription->age }}">
        <input type="hidden" name="idNo" value="{{ $prescription->idNo }}">
        <button type="submit" class="btn btn-success">Ready</button>
    </form>
</td>

                        
                       
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
        </div>
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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>