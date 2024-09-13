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
      @include('user.navigation')

    </header>

    <div class="page-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 py-3 wow fadeInUp">
                    <h2>About Us <br> </h2>
                    <p class="text-grey mb-4" style="text-align:justify;">At EasyVisit, we're dedicated to modernizing healthcare practices in Sri Lanka by harnessing the power of technology. Our team comprises passionate individuals committed to improving patient experiences and streamlining medical processes. Through our user-friendly online platform, patients can effortlessly schedule appointments with registered doctors and manage their healthcare needs conveniently. We prioritize accuracy and efficiency by digitizing prescriptions and implementing innovative features like stress-counseling via our integrated Chatbot. With a focus on accessibility and quality, EasyVisit aims to empower both patients and healthcare providers, ensuring smoother interactions and better outcomes. Join us on our journey to transform healthcare delivery and make a positive impact on the lives of individuals across Sri Lanka.</p><br>
                    <p class="text-grey mb-4" style="text-align:justify;">Join EasyVisit to revolutionize healthcare accessibility in Sri Lanka with innovative technology and compassionate service. Our platform simplifies appointment booking, offers digital prescriptions, and provides stress-counseling via Chatbot. Together, let's modernize healthcare delivery and build healthier communities.</p>
                    <!-- <a href="about.html" class="btn btn-primary">Learn More</a> -->
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                    <div class="img-place custom-img-1">
                        <img src="../assets/img/bg-doctor.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .bg-light -->

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

            <p id="copyright">Copyright &copy; 2024 <a href="easyvisit@gmail.com" target="_blank">EasyVisit</a>.
                All
                right reserved</p>
        </div>
    </footer>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
