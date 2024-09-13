
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <!-- Navbar content -->
    <div class="container">
        <a class="navbar-brand" href="#"><img src="easyvisit_logo.png" width="250px" height="100px"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupport"
            aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('doctor') }}">Doctors</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact_us') }}">Contact</a>
                </li>

                @auth
                    <!-- User is authenticated, show the following links -->
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('laboratory') }}">Laboratory</a>
                </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('counselling') }}">Counselling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('myappointment') }}">My Appointment</a>
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
                @else
                    <!-- User is not authenticated, show login and register links -->
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                    </li>
                @endauth
            </ul>
        </div><!-- .navbar-collapse -->
    </div> <!-- .container -->
</nav>
