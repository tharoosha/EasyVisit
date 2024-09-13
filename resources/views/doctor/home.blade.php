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
  <style>
    /* Custom Styles */
   
    
    .hero-section {
      background-image: linear-gradient(to right, #75ddf2, #69b6f5);
      padding: 100px 0;
      text-align: center;
      color: #333;
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
    /* Styles for Diseases & Health Tips section */

.page-section.health-tips {
    background-color: #f9f9f9; /* Set background color */
    padding: 60px 0; /* Add padding */
}

.page-section.health-tips h2 {
    color: #333; /* Set heading color */
    font-size: 32px; /* Set heading font size */
    text-align: center; /* Center align heading */
}

.page-section.health-tips .row {
    margin-top: 40px; /* Add top margin to rows */
}

.page-section.health-tips h3 {
    color: #007bff; /* Set subheading color */
    font-size: 24px; /* Set subheading font size */
    margin-bottom: 20px; /* Add bottom margin to subheadings */
}

.page-section.health-tips p {
    color: #666; /* Set paragraph color */
    font-size: 16px; /* Set paragraph font size */
}

/* Animation styles */
.page-section.health-tips .wow {
    visibility: hidden; /* Hide elements by default */
}

.page-section.health-tips .wow.fadeInLeft {
    animation-name: fadeInLeft; /* Apply fadeInLeft animation */
}

.page-section.health-tips .wow.fadeInRight {
    animation-name: fadeInRight; /* Apply fadeInRight animation */
}

/* Delay animation */
.page-section.health-tips .wow[data-wow-delay] {
    animation-delay: 0.2s; /* Set animation delay */
}

/* Keyframes for fadeInLeft animation */
@keyframes fadeInLeft {
    from {
        opacity: 0;
        transform: translateX(-100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

/* Keyframes for fadeInRight animation */
@keyframes fadeInRight {
    from {
        opacity: 0;
        transform: translateX(100px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

  </style>
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
<div class="page-section hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="mb-3 wow fadeInUp" data-wow-delay="0.2s">Welcome to the Doctor Interface</h1>
        <p class="lead mb-4 wow fadeInUp" data-wow-delay="0.4s">Empowering you with knowledge and tools for a healthier lifestyle.</p>
      </div>
    </div>
  </div> <!-- .page-section -->
  @include('user.latest')
  <div class="page-section health-tips">
    <div class="container">
        <h2 class="mb-5 wow fadeInUp">Diseases & Health Tips</h2>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInLeft">Heart Health</h3>
                <p class="wow fadeInLeft" data-wow-delay="0.2s">Provide tips for maintaining heart health, including advice on a heart-healthy diet, regular exercise, and managing stress levels to prevent heart disease.</p>
            </div>
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInRight">Diabetes Management</h3>
                <p class="wow fadeInRight" data-wow-delay="0.2s">Offer guidance on managing diabetes through diet, exercise, and medication adherence. Include tips for monitoring blood sugar levels and preventing complications.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInLeft">Mental Wellness</h3>
                <p class="wow fadeInLeft" data-wow-delay="0.2s">Provide strategies for maintaining mental wellness, such as stress management techniques, mindfulness exercises, and seeking professional help when needed.</p>
            </div>
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInRight">Bone Health</h3>
                <p class="wow fadeInRight" data-wow-delay="0.2s">Offer tips for promoting strong bones and preventing osteoporosis through proper nutrition, weight-bearing exercises, and vitamin D supplementation.</p>
            </div>
        </div>
    </div>
</div> <!-- .page-section -->

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