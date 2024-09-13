<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.slidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;">
          <!-- Links for summary reports -->
          <div style="display: flex; justify-content: center; gap: 20px;">
            <a href="{{ url('/report/summary') }}" class="nav-link">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Summary Report</span>
            </a>
            <a href="{{ url('/report/stress_summary') }}" class="nav-link">
              <i class="menu-icon mdi mdi-heart-pulse"></i>
              <span class="menu-title">Stress Summary</span>
            </a>
          </div>

          <!-- Search Fields -->
          <div style="margin: 20px 0;">
            <input type="text" id="searchName" placeholder="Search by Customer Name" onkeyup="searchTable()" style="margin-right: 10px;">
            <input type="text" id="searchDate" placeholder="Search by Date (YYYY-MM-DD)" onkeyup="searchTable()" style="margin-right: 10px;">
            <input type="text" id="searchPhone" placeholder="Search by Phone Number" onkeyup="searchTable()">
          </div>

          <!-- Appointment Table -->
          <table id="appointmentsTable">
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
            </tr>

            @foreach($data as $appoint)
            <tr align="center" style="background-color:skyblue;">
              <td>{{$appoint->name}}</td>
              <td>{{$appoint->email}}</td>
              <td>{{$appoint->phone}}</td>
              <td>{{$appoint->doctor}}</td>
              <td>{{$appoint->date}}</td>
              <td>{{$appoint->message}}</td>
              <td>{{$appoint->status}}</td>
              <td>
                <a class="btn btn-success {{ $appoint->status == 'Canceled' ? 'disabled-link' : '' }}"
                 href="{{url('adapproved',$appoint->id)}}"
                 @if($appoint->status == 'Canceled') disabled @endif>Approved
                </a>
              </td>
              <td>
                <a class="btn btn-danger {{ $appoint->status == 'approved' ? 'disabled-link' : '' }}" 
                   href="{{url('adcanceled',$appoint->id)}}"
                   @if($appoint->status == 'Approved') disabled @endif>
                  Canceled
                </a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

    <!-- JavaScript for Search Functionality -->
    <script>
      function searchTable() {
        // Get the search values
        var nameInput = document.getElementById("searchName").value.toLowerCase();
        var dateInput = document.getElementById("searchDate").value;
        var phoneInput = document.getElementById("searchPhone").value;

        // Get the table and rows
        var table = document.getElementById("appointmentsTable");
        var rows = table.getElementsByTagName("tr");

        // Loop through all table rows (except the first, which contains the headers)
        for (var i = 1; i < rows.length; i++) {
          var nameCell = rows[i].getElementsByTagName("td")[0]; // Customer Name
          var dateCell = rows[i].getElementsByTagName("td")[4]; // Date
          var phoneCell = rows[i].getElementsByTagName("td")[2]; // Phone

          // Get the text content of the name, date, and phone cells
          var nameValue = nameCell ? nameCell.textContent.toLowerCase() : "";
          var dateValue = dateCell ? dateCell.textContent : "";
          var phoneValue = phoneCell ? phoneCell.textContent : "";

          // Check if the current row matches the search criteria
          if ((nameValue.indexOf(nameInput) > -1 || nameInput === "") &&
              (dateValue.indexOf(dateInput) > -1 || dateInput === "") &&
              (phoneValue.indexOf(phoneInput) > -1 || phoneInput === "")) {
            rows[i].style.display = ""; // Show the row
          } else {
            rows[i].style.display = "none"; // Hide the row
          }
        }
      }
    </script>

    <style>
      /* CSS to gray out the disabled button */
      .disabled-link {
        pointer-events: none;
        opacity: 0.6;
        cursor: not-allowed;
      }
      /* Style for the search input fields */
      input[type="text"] {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 250px;
      }
    </style>
  </body>
</html>
