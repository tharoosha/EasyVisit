
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

    <table>
                <tr style="background-color:black;">
                    <th style="padding:10px">First Name</th>
                    <th style="padding:10px">Last Name</th>
                    <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Specialization</th>
                    <th style="padding:10px">Doctor Image</th>
                    <th style="padding:10px">Delete</th>
                    <th style="padding:10px">Update</th>
                </tr>

                @foreach($data as $doctor)
                <tr align="center" style="background-color:skyblue;">
                    <td>{{$doctor->firstName}}</td>
                    <td>{{$doctor->lastName}}</td>
                    <td>{{$doctor->phone}}</td>
                    <td>{{$doctor->specialization}}</td>
                    <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                    <td><a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                    <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>
                </tr>

                @endforeach
    </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
