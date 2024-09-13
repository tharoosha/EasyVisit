<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
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
    <h1 style="font-size:30px; font-align:center;">Add the Lab assistant details</h1>
    @if(session()->has('message'))

        <div class="alert alert-success">
            <button type="button" class="close" date-dismiss="alert">
            </button>
    
        {{session()->get('message')}}
        </div>
    @endif
   

        <form action="{{url('upload_labassistant')}}" method="POST" enctype="multipart/form-data">
        
            @csrf

            <div style="padding:15px;">
                <label>First Name</label>
                <input type="text" style="color:black;" name="firstname" placeholder="write the name" required="">
            </div>

            <div style="padding:15px;">
                <label>Last Name</label>
                <input type="text" style="color:black;" name="lastname" placeholder="write the name" required="">
            </div>

            <div style="padding:15px;">
                <label>Telephone number</label>
                <input type="number" style="color:black;" name="phone" placeholder="write the number" required="">
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
              
                <input type="submit"  class="btn btn-success">
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
