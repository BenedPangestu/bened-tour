<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{route('Home')}}" class="navbar-brand">
            <img src="{{url('/front-end/images/logo.png')}}" alt="logo bened"></a>

            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-3 ml-auto">
                    <li class="nav-item mx-md-2">
                        <a class="nav-link active" href="{{route('Home')}}">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Paket Travel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            data-toggle="dropdown">
                            Service
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Visa</a>
                            <a class="dropdown-item" href="#">Passport</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a class="nav-link" href="#">Testimonial</a>
                    </li>
                </ul>
                @guest
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
                        Login
                    </button>
                </form>
                <!-- Dekstop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button" onclick="event.preventDefault(); location.href='{{url('login')}}';">
                        Login
                    </button>
                </form>
                @endguest

                @auth
                    <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-login my-2 my-sm-0" type="submit">
                        Logout
                    </button>
                </form>
                <!-- Dekstop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                        Logout
                    </button>
                </form>
                @endauth
            </div>
        </nav>
    </div>