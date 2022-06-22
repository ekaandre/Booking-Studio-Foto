<div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white fixed-top navbar-fixed-top" data-aos="fade-down">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="{{url('Frontend/images/capro.png')}}" alt="Logo Candradimuka Production">
            </a>
            <!--tombol humbuger-->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--Navigasi-->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="{{route('home')}}" class="nav-link {{ request()->is('/') ? 'active' : ''}}">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="{{route('reservasi')}}" class="nav-link {{ request()->is('reservasi','detail/{slug}') ? 'active' : ''}}">Reservasi</a>
                    </li>
                    
                </ul>
               
                @guest
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{ url ('login')}}';" >
                        Login
                    </button>
                </form>

                <!-- Desktop Button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right1 my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href='{{ url ('login')}}';">
                        Login
                    </button>
                </form>
                @endguest

                @auth
                <!-- Mobile Button -->
                <form class="form-inline d-sm-block d-md-none" action="{{ route('myaccount-edit')}}">
                    <button class="btn btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                      Akun
                    </button>
                </form>
                <form class="form-inline d-sm-block d-md-none" action="{{ route('myorder')}}">
                    <button class="btn btn-navbar-right my-2 my-sm-0 px-4 {{ request()->is('myaccount/edit') ? 'active' : ''}}" type="submit">
                      My Order
                    </button>
                </form>
                <form class="form-inline d-sm-block d-md-none" action="{{ url('logout')}}"
                method="POST">
                @csrf
                    <button class="btn btn-logout my-2 my-sm-0 px-4" type="submit">
                        logout
                    </button>
                </form>

                <!-- Desktop Button -->
                <div class="nav-item dropdown d-none d-md-block">
                <a href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name}}" alt="" class="rounded-circle mr-2 profile-picture" />
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name}}" alt="" class="rounded-circle mr-2 profile-picture1" /> 
                <p class="name justify-content-center">{{Auth::user()->username}}</p>
                <hr>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('myaccount-edit')}}">
                    <button class="btn btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                      Akun
                    </button>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ route('myorder')}}">
                    <button class="btn btn-navbar-right my-2 my-sm-0 px-4 {{ request()->is('myaccount/edit') ? 'active' : ''}}" type="submit">
                      My Order
                    </button>
                </form>
                <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout')}}"
                method="POST">
                @csrf
                    <button class="btn btn-navbar-right-logout my-2 my-sm-0 px-4" type="submit">
                      Logout
                    </button>
                </form>
                @endauth
            </div>
        </nav>
    </div>