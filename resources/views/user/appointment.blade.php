<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    // Hide all form sections except specialization initially
    $('#doctor_section').hide();
    $('#time_slot_section').hide();
    $('#user_details_section').hide();

    // When specialization and date are selected
    $('#specialization, #date').change(function() {
        var specialization = $('#specialization').val();
        var date = $('#date').val();

        if (specialization && date) {
            $.ajax({
                url: "{{ url('get-doctors') }}", // Route to fetch doctors
                type: "GET",
                data: { specialization: specialization, date: date },
                success: function(data) {
                    $('#doctor').empty(); // Clear doctor select options

                    if (data.length > 0) {
                      $('#doctor').append('<option value="">---Select Doctor---</option>');
                    $.each(data, function(key, value) {
                        $('#doctor').append('<option value="'+ value.id +'">'+ value.firstName + ' ' + value.lastName +'</option>');
                    });

                    // Show doctor selection section
                    $('#doctor_section').show();
                    } else {
                      $('#doctor_section').show();
                      $('#doctor').append('<option value="">No doctors available for the selected date and specialization</option>');
                    }
                    
                }
            });
        }
    });

    // When doctor is selected, fetch time slots
    $('#doctor').change(function() {
        var doctor_id = $(this).val();
        var date = $('#date').val(); // Ensure the selected date is passed when fetching time slots
        if (doctor_id && date) {
            $.ajax({
                url: "{{ url('get-time-slots') }}", // Route to fetch time slots
                type: "GET",
                data: { doctor_id: doctor_id, date: date },
                success: function(data) {
                    $('#time_slot').empty(); // Clear time slot options
                    if (data.length > 0) {
                        $('#time_slot').append('<option value="">---Select Time Slot---</option>');
                        $.each(data, function(key, value) {
                            $('#time_slot').append('<option value="'+ value.id +'">'+ value.start_time + ' - ' + value.end_time + ' (Tokens available: ' + value.available_token + ')</option>');
                        });
                        // Show time slot selection section
                        $('#time_slot_section').show();
                    } else {
                        // No time slots available, display message
                        $('#time_slot_section').show();
                        $('#time_slot').append('<option value="">No time slots available for the selected doctor and date</option>');
                    }
                }
            });
        }
    });

    // When time slot is selected, show user details form
    $('#time_slot').change(function() {
        var time_slot = $(this).val();
        if (time_slot) {
            // Show user details section
            $('#user_details_section').show();
        }
    });
  });
</script>

<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}} " method="POST">

      @csrf
        <div class="row mt-5 ">
          
          <!-- Specialization Selection -->
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" style="padding:15px;">
            <label for="specialization">Specialization</label>
            <select name="specialization" id="specialization" class="custom-select" style="color:black;" width="200px">
            <option value="">-----Select------</option>
                        <option value="neurology">Neurology</option>
                        <option value="cardiology">Cardiology</option>
                        <option value="skin">Skin</option>
                        <option value="eye">Eye</option>
                        <option value="dermatologist">Dermatologist</option>
                        <option value="ent Surgeon">ENT Surgeon</option>
                        <option value="gastroenterologist">Gastroenterologist</option>
                        <option value="haematologists">Haematologists</option>
                        <option value="orthopaedic Surgeon">Orthopaedic Surgeon</option>
            </select>
          </div>
         
          <!-- Date Selection -->
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms" style="padding:15px;">
              <label for="date">Date</label>
              <input type="date" name="date" id="date" class="form-control">
          </div>

          <!-- Doctor Selection Section -->
          <div id="doctor_section" class="col-12 col-sm-6 py-2 wow fadeInRight" style="padding:15px;">
            <label for="doctor">Doctor</label>
            <select name="doctor" id="doctor" class="custom-select">
              <option value="">---Select Doctor---</option>
              <!-- Options will be filled dynamically -->
            </select>
          </div>

          <!-- Time Slot Selection Section -->
          <div id="time_slot_section" class="col-12 col-sm-6 py-2 wow fadeInLeft" style="padding:15px;">
            <label for="time_slot">Available Time Slots</label>
            <select name="time_slot" id="time_slot" class="custom-select">
              <option value="">---Select Time Slot---</option>
              <!-- Options will be filled dynamically -->
            </select>
          </div>

          <!-- User Details Section -->
          <div id="user_details_section">
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <input type="text" name="name" class="form-control" placeholder="Full name">
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <input type="email" name="email" class="form-control" placeholder="Email address">
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <input type="text" name="phone" class="form-control" placeholder="Phone Number">
            </div>
            <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
              <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
          </div>
        </div>
      </form>
    </div>
</div>
