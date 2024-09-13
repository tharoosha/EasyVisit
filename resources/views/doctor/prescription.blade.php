<!DOCTYPE html>
<html lang="en">
<head>
    <title>QR Code Generator</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>
        body {
            margin: 0;
            background-color: #3EB4A5;
        }
        .typing-limit {
            float: left;
            resize: none; /* Prevent resizing */
            border: 1px solid #ccc; /* Optional: Add border for visibility */
        }
    </style>
</head>
<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-md-12"> 
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card card-outline-secondary">
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">x</button>
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                            <div class="card-header">
                                <h3 class="mb-0">Patient Information and Prescription</h3>
                            </div>
                         
                            <div class="card-body">
                            @foreach($appointments as $appointment)
                                <form id="patientForm{{$appointment->id}}" autocomplete="off" class="form" role="form" action="{{ route('sendemail', ['id' => $appointment->id]) }}" method="post" novalidate>
                                     <!-- Added novalidate to prevent default browser validation -->
                                     @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="name"  value="{{ $appointment->name }}" readonly required> <!-- Use $appointment->name instead of $name -->
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Doctor Name</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text" name="dname"  value="{{ $appointment->doctor }}" readonly required> <!-- Use $appointment->name instead of $name -->
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        
                                        <div class="col-lg-9">
                                            <input class="form-control" type="hidden" name="email"  value="{{ $appointment->email }}" readonly required> <!-- Use $appointment->name instead of $name -->
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Age</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="number" name="age" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Id Number</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" type="text"  name="idNo" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Prescription</label>
                                        <div class="col-lg-9">
                                            <textarea class="form-control typing-limit" name="Prescription" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            <a href="#" id="generateQRButton{{$appointment->id}}" class="btn btn-primary generateQRButton">Generate QR Code</a>
                                        </div>
                                    </div>
                                    <div id="qrCodeContainer{{$appointment->id}}" class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">QR Code</label>
                                        <div class="col-lg-9">
                                            <div class="qrCode"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="buttonGroup{{$appointment->id}}" style="display: none;">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        
                                            <!-- Button group for other actions -->
                                            <div class="row" id="otherButtons{{$appointment->id}}">
                                                <div class="col-lg-4">
                                                    <a href="#" class="btn btn-success btn-block sendToPharmacyButton" id="sendToPharmacyButton{{$appointment->id}}">Send to Pharmacy</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <a href="#" class="btn btn-info btn-block printPrescriptionButton" id="printPrescriptionButton{{$appointment->id}}" disabled>Print Prescription</a>
                                                </div>
                                                <div class="col-lg-4">
                                                    <input type="submit" class="btn btn-primary btn-block sendMailButton{{$appointment->id}}" disabled  value="Send Mail">
                                                </div>
                                            </div>
                                        
                                    </div>
                                </form>
                                <a href="{{ url('appointment_view') }}" class="btn btn-secondary btn-block">Back</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            @foreach($appointments as $appointment)
            var generateQRButton{{$appointment->id}} = document.getElementById("generateQRButton{{$appointment->id}}");
            var sendToPharmacyButton{{$appointment->id}} = document.getElementById("sendToPharmacyButton{{$appointment->id}}");
            var printPrescriptionButton{{$appointment->id}} = document.getElementById("printPrescriptionButton{{$appointment->id}}");
            var sendMailButton{{$appointment->id}} = document.getElementsByClassName("sendMailButton{{$appointment->id}}")[0];

            generateQRButton{{$appointment->id}}.addEventListener("click", function(event) {
                event.preventDefault();
                var form = document.getElementById("patientForm{{$appointment->id}}");
                if (!form.checkValidity()) {
                    form.reportValidity();
                    return;
                }
                var formData = new FormData(form);

                var prescription = formData.get("Prescription");
                var qrData = "Name: " + formData.get("name") + "\n";
                qrData += "Doctor Name: " + formData.get("dname") + "\n";
                qrData += "Age: " + formData.get("age") + "\n";
                qrData += "ID Number: " + formData.get("idNo") + "\n";
                qrData += "Prescription: " + prescription;

                var qrCodeContainer = document.getElementById("qrCodeContainer{{$appointment->id}}");
                qrCodeContainer.innerHTML = ""; // Clear previous QR code
                var qr = new QRCode(qrCodeContainer, {
                    text: qrData,
                    width: 128,
                    height: 128
                });

                // Check if QR code is generated
                if (qrCodeContainer.children.length > 0) {
                    // Enable other buttons
                    sendToPharmacyButton{{$appointment->id}}.disabled = false;
                    printPrescriptionButton{{$appointment->id}}.disabled = false;
                    sendMailButton{{$appointment->id}}.disabled = false;

                    // Show other buttons
                    document.getElementById("buttonGroup{{$appointment->id}}").style.display = "block";
                } else {
                    alert("QR code generation failed. Please check the form inputs.");
                }
            });
            @endforeach
        });

        @foreach($appointments as $appointment)
        document.getElementById("printPrescriptionButton{{$appointment->id}}").addEventListener('click', function() {
            window.print();
        });
        @endforeach

        // Event listener for "Send to Pharmacy" button
        @foreach($appointments as $appointment)
        sendToPharmacyButton{{$appointment->id}}.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent the default action of navigating to a new page
            var form = document.getElementById("patientForm{{$appointment->id}}");
            var formData = new FormData(form);

            // Assuming you have a route named 'sendToPharmacyAndEmail'
            var url = "{{ url('prescription') }}";

            // Using Fetch API to send data
            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // If successful response, do something (maybe show a success message)
                    alert("Data sent to pharmacy successfully!");
                } else {
                    // If error response, handle it accordingly
                    alert("Failed to send data to pharmacy. Please try again.");
                }
            })
            .catch(error => {
                // If fetch fails, handle the error
                console.error('Error:', error);
            });
        });
        @endforeach
    </script>
   
</body>
</html>
