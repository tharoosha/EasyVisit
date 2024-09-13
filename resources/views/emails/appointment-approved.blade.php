<!DOCTYPE html>
<html>
<head>
    <title>Appointment Approved</title>
</head>
<body>
    <h1>Your Appointment is Approved</h1>
    <p>Dear {{ $appointment->name }},</p>
    <p>Your appointment with Dr. {{ $appointment->doctor }} on {{ $appointment->date }} has been approved.</p>
    <p>Your
    <p>Thank you for using our service!</p>
</body>
</html>