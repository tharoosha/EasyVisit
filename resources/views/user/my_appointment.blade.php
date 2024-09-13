<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com/">
  <title>Welcome to EasyVisit</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    .appointment-table {
      width: 80%;
      margin: 0 auto;
      border-collapse: collapse;
    }
    .appointment-table th, .appointment-table td {
      padding: 20px;
      font-size: 18px;
      border: 1px solid #ddd;
    }
    .appointment-table th {
      background-color: #154360;
      color: white;
    }
    .appointment-table tr {
      background-color: #95A5A6 ;
      color: white;
    }
    .appointment-table tr:hover {
      background-color: #1B527E;
    }
  </style>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+94760625621</a>
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
    </div> <!-- .topbar -->

    @include('user.navigation')
  </header>

  <div align="center" style="padding:70px;">
    <table class="appointment-table">
        <tr align="center">
            <th>Doctor Name</th>
            <th>Date</th>
            <th>Message</th>
            <th>Status</th>
        </tr>
        @foreach($appoint as $appoints)
        <tr align="center">
            <td>{{$appoints->doctor}}</td>
            <td>{{$appoints->date}}</td>
            <td>{{$appoints->message}}</td>
            <td>{{$appoints->status}}</td>
        </tr>
        @endforeach
    </table>
  </div>
 
  <footer>
    <!-- Footer content -->
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
