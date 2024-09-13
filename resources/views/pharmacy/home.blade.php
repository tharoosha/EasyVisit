<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Pharmacy Interface</title>
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
    background-color: #f9f9f9;
    padding: 50px 0;
}

.page-section.health-tips h2 {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-bottom: 30px;
}

.page-section.health-tips .container {
    max-width: 1200px;
    margin: 0 auto;
}

.page-section.health-tips h3 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.page-section.health-tips p {
    font-size: 16px;
    color: #555;
    margin-bottom: 15px;
}

.page-section.health-tips ul {
    list-style-type: none;
    padding-left: 20px;
}

.page-section.health-tips ul li {
    font-size: 16px;
    color: #555;
    margin-bottom: 10px;
}

.page-section.health-tips .row {
    margin-bottom: 40px;
}

@media (max-width: 768px) {
    .page-section.health-tips h3 {
        font-size: 20px;
    }
    
    .page-section.health-tips p {
        font-size: 14px;
    }
    
    .page-section.health-tips ul li {
        font-size: 14px;
    }
}

  
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
<div class="page-section hero-section">
    <div class="container">
      <div class="hero-content">
        <h1 class="mb-3 wow fadeInUp" data-wow-delay="0.2s">Welcome to the Pharmacy Interface</h1>
        <p class="lead mb-4 wow fadeInUp" data-wow-delay="0.4s">Empowering you with knowledge and tools for a healthier lifestyle.</p>
      </div>
    </div>
  </div> <!-- .page-section -->
  @include('user.latest')
  <div class="page-section health-tips">
    <div class="container">
        <h2 class="mb-5 wow fadeInUp">Diseases & Medicines</h2>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInLeft">Heart Health</h3>
                <p class="wow fadeInLeft" data-wow-delay="0.2s">Commonly prescribed medications for heart health:</p>
                <ul class="wow fadeInLeft" data-wow-delay="0.4s">
                    <li>Statins: Lower cholesterol levels</li>
                    <li>Beta-blockers: Control blood pressure and heart rate</li>
                    <li>ACE inhibitors: Relax blood vessels and lower blood pressure</li>
                    <li>Aspirin: Prevent blood clots</li>
                </ul>
                <p class="wow fadeInLeft" data-wow-delay="0.5s">Tips for maintaining heart health:</p>
                <ul class="wow fadeInLeft" data-wow-delay="0.6s">
                    <li>Follow a heart-healthy diet</li>
                    <li>Engage in regular exercise</li>
                    <li>Manage stress levels</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInRight">Diabetes Management</h3>
                <p class="wow fadeInRight" data-wow-delay="0.2s">Commonly prescribed medications for diabetes management:</p>
                <ul class="wow fadeInRight" data-wow-delay="0.4s">
                    <li>Metformin: Lower blood sugar levels</li>
                    <li>Insulin: Regulate blood sugar levels</li>
                    <li>Sulfonylureas: Stimulate insulin production</li>
                    <li>GLP-1 receptor agonists: Lower blood sugar levels and promote weight loss</li>
                </ul>
                <p class="wow fadeInRight" data-wow-delay="0.5s">Tips for managing diabetes:</p>
                <ul class="wow fadeInRight" data-wow-delay="0.6s">
                    <li>Follow a balanced diet</li>
                    <li>Engage in regular physical activity</li>
                    <li>Monitor blood sugar levels regularly</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInLeft">Mental Wellness</h3>
                <p class="wow fadeInLeft" data-wow-delay="0.2s">Commonly prescribed medications for mental wellness:</p>
                <ul class="wow fadeInLeft" data-wow-delay="0.4s">
                    <li>SSRIs: Treat depression and anxiety</li>
                    <li>Benzodiazepines: Relieve anxiety and promote relaxation</li>
                    <li>Antipsychotics: Manage psychotic disorders such as schizophrenia</li>
                    <li>Mood stabilizers: Stabilize mood and treat bipolar disorder</li>
                </ul>
                <p class="wow fadeInLeft" data-wow-delay="0.5s">Tips for maintaining mental wellness:</p>
                <ul class="wow fadeInLeft" data-wow-delay="0.6s">
                    <li>Practice stress management techniques</li>
                    <li>Engage in mindfulness exercises</li>
                    <li>Seek professional help when needed</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3 class="mb-3 wow fadeInRight">Bone Health</h3>
                <p class="wow fadeInRight" data-wow-delay="0.2s">Commonly prescribed medications for bone health:</p>
                <ul class="wow fadeInRight" data-wow-delay="0.4s">
                    <li>Bisphosphonates: Increase bone density and prevent fractures</li>
                    <li>Calcium supplements: Support bone health</li>
                    <li>Vitamin D supplements: Enhance calcium absorption</li>
                    <li>Calcitonin: Regulate calcium levels and prevent bone loss</li>
                </ul>
                <p class="wow fadeInRight" data-wow-delay="0.5s">Tips for promoting strong bones:</p>
                <ul class="wow fadeInRight" data-wow-delay="0.6s">
                    <li>Consume a diet rich in calcium and vitamin D</li>
                    <li>Engage in weight-bearing exercises</li>
                    <li>Consider supplementation if necessary</li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- .page-section -->


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