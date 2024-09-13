<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.css')
    <style>
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
            <h1>Stress Level Summary</h1>
            <table>
                <tr style="background-color:grey;">
                    <th style="padding:10px">First Name</th>
                    <th style="padding:10px">Last Name</th>
                    <th style="padding:10px">Email</th>
                    <th style="padding:10px">Stress Level</th>
                </tr>
                @foreach($stressData as $user)
                <tr align="center" style="background-color:skyblue;">
                    <td style="padding:10px">{{ $user->firstName }}</td>
                    <td style="padding:10px">{{ $user->lastName }}</td>
                    <td style="padding:10px">{{ $user->email }}</td>
                    <td style="padding:10px">{{ $user->stress_level }}</td>
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
