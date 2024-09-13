<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>
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


        <div class="container" align="center" style="padding-top:100px ;">

            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    {{ session()->get('message') }}
                </div>
            @endif

            <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div style="padding:15px;">
                    <label>First Name</label>
                    <input type="text" style="color:black;" name="firstName" placeholder="write the name" required="">
                </div>

                <div style="padding:15px;">
                    <label>Last Name</label>
                    <input type="text" style="color:black;" name="lastName" placeholder="write the name" required="">
                </div>

                <div style="padding:15px;">
                    <label>Telephone number</label>
                    <input type="telephoneNumber" style="color:black;" name="telephoneNumber" placeholder="write the number" required="">
                </div>
                <div style="padding:15px;">
                    <label>Address</label>
                    <input type="address" style="color:black;" name="address" placeholder="write the address" required="">
                </div>
                <div style="padding:15px;">
                    <label>Email</label>
                    <input type="email" style="color:black;" name="email" placeholder="write the email" required="">
                </div>
                
                <div style="padding:15px;">
                    <label>Password</label>
                    <input type="password" style="color:black;" name="password" placeholder="" required="">
                </div>
                <div style="padding:15px;">
                    <label>Specialization</label>
                    <select name="specialization" style="color:black;" width="200px">
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

                <div style="padding:15px;">
                    <label>Doctor Image</label>
                    <input type="file" name="file" required="">
                </div>

                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
</body>
</html>
