
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">

        label
        {
            display: inline-block;
            width:200px;
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

            <div class="container" align="center" style="padding:100px">
                
            @if(session()->has('message'))

                <div class="alert alert-success">
                <button type="button" class="close" date-dismiss="alert">
                </button>

            {{session()->get('message')}}
                </div>
            @endif

            

            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div style="padding:15px;">
                    <label>First Name </label>
                    <input type="text" style="color:black;" name="firstName" value="{{$data->firstName}}">
                </div>

                <div style="padding:15px;">
                    <label>Second Name </label>
                    <input type="text"  style="color:black;" name="lastName" value="{{$data->lastName}}">
                </div>

                <div style="padding:15px;">
                    <label>Phone</label>
                    <input type="text" style="color:black;" name="phone" value="{{$data->phone}}">
                </div>

               
                <div style="padding:15px;">
                    <label>Specialization</label>
                    <select name="specialization" style="color:black;" width="200px" value="{{$data->specialization}}">
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
                    <label>Old Image</label>
                    <img height="150" width="150" src="doctorimage/{{$data->image}}">
                </div>

                <div style="padding:15px;">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>

                <div style="padding:15px;">
                
                    <input type="submit" class="btn btn-primary">
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
