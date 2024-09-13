<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Interface</title>
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: ;
      margin: 0;
      padding: 0;
    }
    .container {
      margin-top: 30px;
    }
    .form-container {
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      padding: 30px;
      margin-bottom: 40px;
    }
    .form-container h1 {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    .form-row {
      margin-bottom: 1rem;
    }
    .form-row .form-group {
      margin-bottom: 0;
    }
    .form-row .form-group label {
      font-weight: 600;
      color: #333;
    }
    .form-row .form-group input,
    .form-row .form-group textarea {
      border-radius: 4px;
      border: 1px solid #ced4da;
      padding: 10px;
    }
    .form-row .form-group input:focus,
    .form-row .form-group textarea:focus {
      border-color: #007bff;
      box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }
    .btn {
      margin-top: 10px;
      border-radius: 4px;
      font-weight: 600;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    /* Professional table styling */
  .history-table {
    margin-top: 30px;
    border-collapse: collapse;
    width: 100%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  .history-table th, .history-table td {
    padding: 12px 15px;
    text-align: center;
    border: 1px solid #dddddd;
    vertical-align: middle;
  }
  .history-table th {
    background-color: #f8f9fa;
    color: #333;
    font-weight: bold;
  }
  .history-table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
  }
  .history-table tbody tr:hover {
    background-color: #f1f1f1;
  
    }
    .btn-edit, .btn-delete {
      margin: 0 5px;
      padding: 6px 12px;
      cursor: pointer;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      font-size: 14px;
    }
    .btn-edit {
      background-color: #007bff;
    }
    .btn-edit:hover {
      background-color: #0056b3;
    }
    .btn-delete {
      background-color: #dc3545;
    }
    .btn-delete:hover {
      background-color: #c82333;
    }
    .page-footer {
      background-color: #343a40;
      color: #ffffff;
      padding: 30px 0;
      text-align: center;
    }
    .page-footer h5 {
      font-size: 18px;
      margin-bottom: 20px;
    }
    .page-footer .footer-menu {
      list-style: none;
      padding: 0;
    }
    .page-footer .footer-menu li {
      margin-bottom: 10px;
    }
    .page-footer .footer-menu a {
      color: #ffffff;
      text-decoration: none;
    }
    .page-footer .footer-menu a:hover {
      text-decoration: underline;
    }
    .footer-sosmed a {
      color: #ffffff;
      margin: 0 10px;
      font-size: 20px;
      transition: color 0.3s;
    }
    .footer-sosmed a:hover {
      color: #007bff;
    }
  </style>
</head>
<body>
  <header>
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
        </div>
      </div>
    </div>
    @include('doctor.doctornavigation')
  </header>
  <main>
    <section class="page-section">
      <div class="container">
        <div class="form-container">
          <h1>Manage Time Slots</h1>
          @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
          <form id="timeslotForm" method="POST" action="{{ route('doctor.add_timeslot') }}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="date">Date</label>
            <input type="text" id="date" name="date" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="startTime">Start Time</label>
            <input type="text" id="startTime" name="startTime" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="endTime">End Time</label>
            <input type="text" id="endTime" name="endTime" class="form-control" required>
        </div>
    </div>
    <div class="form-group">
        <label for="tokens">Number of Tokens</label>
        <input type="number" id="tokens" name="tokens" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="details">Details</label>
        <textarea id="details" name="details" class="form-control" rows="3" required></textarea>
    </div>

    
  
    <button type="submit" class="btn btn-primary">Add Timeslot</button>
</form>

        </div>

        <div class="history-table">
          <h3>Doctor Timeslot Summary</h3>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Number of Tokens</th>
                <th>Details</th>
                
              </tr>
            </thead>
            
              <tbody id="historyTableBody">
              @foreach($timeslots as $slot)
              <tr>
              <td>{{ $slot->date }}</td>
              <td>{{ $slot->start_time }}</td>
              <td>{{ $slot->end_time }}</td>
              <td>{{ $slot->no_of_tokens }}</td>
              <td>{{ $slot->details }}</td>
             
          </tr>
            @endforeach
          </tbody>

              <!-- </tr>
            </tbody> -->
          </table>
        </div>
      </div>
    </section>
  </main>

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
          <h5>Our Partner</h5>
          <ul class="footer-menu">
            <li><a href="#">Pharmacies</a></li>
            <li><a href="#">Laboratories</a></li>
            <li><a href="#">Reports</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">223 Lady McCullum's Drive Kandy</p>
          <a href="#" class="footer-link">0760625621</a>
          <a href="#" class="footer-link">easyvisit@gmail.com</a>
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
      <p id="copyright">Copyright &copy; 2024 <a href="mailto:easyvisit@gmail.com" target="_blank">EasyVisit</a>. All rights reserved</p>
    </div>
  </footer>

  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script>
    flatpickr('#date', {
      dateFormat: 'Y-m-d',
      minDate: 'today'
    });
    flatpickr('#startTime', {
      enableTime: true,
      noCalendar: true,
      dateFormat: 'H:i'
    });
    flatpickr('#endTime', {
      enableTime: true,
      noCalendar: true,
      dateFormat: 'H:i'
    });
  </script>
</body>
</html>
