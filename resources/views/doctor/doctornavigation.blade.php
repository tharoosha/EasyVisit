<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <!-- Navbar content -->
      <div class="container">
        <a class="navbar-brand" href="#"><img src="easyvisit_logo.png" width="250px" height="100px"></a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_timeslot">Add Time Slots</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('appointment_view')}}">Doctor Appointment</a>
            </li>
            
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->email }}
                        </a>
                        <div class="dropdown-menu">
                            <!-- <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a> -->
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
            </li>
</ul>
  </ul>
</div> <!-- .navbar-collapse -->
</div> <!-- .container -->
</nav>