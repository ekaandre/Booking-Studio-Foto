        <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
          <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
          </button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-none d-lg-flex">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name}}" alt="" class="rounded-circle mr-2 profile-picture" />
                  Hi, {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <form action="{{ url('logout')}}" method="POST">
                    @csrf
                    <button class="btn btn-navbar-right" type="submit">Logout</button> 
                  </form>
                </div>
              </li>
            </ul>
            <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none mt-3">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Hi, Andre
                </a>
              </li>
              <li class="nav-item">
              <div>
               <form action="{{ url('logout')}}" method="POST">
                  @csrf
               <button class="nav-link d-inline-block btn btn-navbar-right" type="submit">Logout</button> 
               </form>
              </div>
              </li>
            </ul>
          </div>
        </nav>