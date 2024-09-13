<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Welcome to EasyVisit</title>

  <!-- External CSS -->
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">

  <style>
    /* Custom styles for the search bar */
    .search-container {
      text-align: right; /* Align to the right side */
      margin-top: 5px;
    }

    .search-form {
      width: 40%; /* Adjust the width as needed */
      margin-top: 10px; /* Add margin top for spacing */
      display: inline-block; /* Allow the search bar to be aligned to the right */
      padding-right: 140px;
      padding-bottom: 10px;
    }

    /* Style for the input field */
    .form-control {
      width: 100%; /* Make the input field 100% width of its container */
    }

    /* Style for the search button */
    .input-group-append {
      cursor: pointer; /* Change cursor to pointer on hover for better UX */
    }
  </style>
</head>

<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
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

    <!-- Navbar content -->
    <!-- ... (previous code) ... -->
@include('user.navigation')

    <!-- Search bar -->
    <div class="search-container">
      <form class="form-inline search-form">
        <div class="input-group">
          <input class="form-control" type="text" placeholder="Enter keyword.." aria-label="Search">
          <div class="input-group-append">
            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
          </div>
        </div>
      </form>
    </div>
  </header>

  <!-- Display success message if present -->
  @if(session()->has('message'))
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session()->get('message') }}
  </div>
  @endif

  <!-- Hero section -->
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>

  <!-- Background light section -->
  <div class="bg-light">
    <!-- Custom index section -->
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Counselling</span> Chatbot</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Laboratory</span>-Facilities</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Content section with image -->
    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h2>Welcome to Your Healthcare <br> Center</h2>
            <p class="text-grey mb-4" style="text-align:justify;" >Welcome to EasyVisit, where we're transforming healthcare accessibility across Sri Lanka! Say goodbye to long waits and cumbersome processes – with us, booking appointments, managing prescriptions, and accessing stress-counseling support is simpler than ever. Join our mission to revolutionize healthcare delivery and improve patient well-being. Welcome to a new era of healthcare convenience and compassion!</p>
            <a href="about_us" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="colorchange" >
  <div class="page-section" >

    <div class="container">
      
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->firstName}}</p>
              <p class="text-xl mb-0">{{$doctors->lastName}}</p>
              <span class="text-sm text-grey">{{$doctors->specialization}}</span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  </div>
  <!-- Include appointment section -->
  @include('user.appointment')

  <br>
    <!-- Include latest section -->
  @include('user.latest')



  <!-- Footer section -->
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

  <!-- Bootstrap JS from CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>

</html>