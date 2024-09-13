<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
        /* CSS for print styles */
        @media print {
            body * {
                visibility: hidden;
            }
            .print-area, .print-area * {
                visibility: visible;
            }
            .print-area {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="container-scroller">
   
    <div class="container-fluid page-body-wrapper">
        <div align="center" style="padding-top:100px;" class="print-area">
            <h1>Appointment Summary Report by Doctor</h1>
            <table>
                <tr style="background-color:grey;">
                    <th style="padding:10px">Doctor Name</th>
                    <th style="padding:10px">Total Appointments</th>
                    <th style="padding:10px">Approved Appointments</th>
                    <th style="padding:10px">Canceled Appointments</th>
                    <th style="padding:10px">Pending Appointments</th>
                </tr>
                @foreach($summary as $data)
                <tr align="center" style="background-color:skyblue;">
                    <td style="padding:10px">{{ $data['doctor'] }}</td>
                    <td style="padding:10px">{{ $data['total'] }}</td>
                    <td style="padding:10px">{{ $data['approved'] }}</td>
                    <td style="padding:10px">{{ $data['Canceled'] }}</td>
                    <td style="padding:10px">{{ $data['In progress'] }}</td>
                </tr>
                @endforeach
            </table>
        </div>
        <div align="center" style="padding-top:20px;">
            <button onclick="window.print()" class="no-print" style="padding:10px 20px; font-size:16px;">Print Report</button>
            <a href="{{ url('/showappointment') }}" class="no-print" style="padding:10px 20px; font-size:16px; text-decoration:none; background-color:#f8f9fa; color:#000; border:1px solid #ccc; border-radius:4px; margin-left:10px;">Back</a>
        </div>
    </div>
</div>

@include('admin.script')
</body>
</html>
