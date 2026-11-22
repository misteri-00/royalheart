  <!-- Header Section Start -->
  <header class="position-relative z-3">

    <div class="header-top py-1 bg-secondary white">
      <div class="container">
        <div class="header-top-inner">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="header-top-left">
                <ul class="list-unstyled d-flex gap-4 small mb-0">
                  <li><i class="fas fa-phone me-2 primary"></i>+33 877 554 332</li>
                  <li><i class="far fa-envelope me-2 primary"></i>info@royalheart.org</li>
                  <li><i class="far fa-clock me-2 primary"></i>Mon - Fri: 9:00 - 18:30</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="header-top-left d-flex align-items-center justify-content-end">
                <ul class="list-unstyled d-flex gap-4 me-4 small mb-0">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <a href="{{ route('donate') }}" class="btn-primary" style="padding: 10px 20px;">Donate Now<i class="fas fa-arrow-right ms-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="header-nav header-nav-menu py-3" id="header-nav-menu">
      <div class="container">
        <div class="header-nav-inner d-flex justify-content-between">
          <div class="header-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('landing/images/logo1.png') }}" alt="logo"></a>
          </div>
          <div class="header-nav-right d-flex align-items-center">
            <div class="navbar-collapse justify-content-center playfair" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav flex-row align-items-center" id="responsive-menu">
                  <li class="nav-item">
                    <a class="nav-link text fw-bold {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text fw-bold {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text fw-bold {{ request()->routeIs('causes.*') ? 'active' : '' }}" href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Causes
                    </a>
                    <ul class="dropdown-menu bg-lightgrey p-0 rounded-0 border-0">
                      <li><a class="dropdown-item fw-bold text-capitalize black border-0"
                          href="{{ route('causes.index') }}">Causes List</a></li>
                      <li><a class="dropdown-item fw-bold text-capitalize black border-0"
                          href="{{ route('causes.detail') }}">Causes Details</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text fw-bold {{ request()->routeIs('events.*') ? 'active' : '' }}" href="#" role="button"
                      data-bs-toggle="dropdown" aria-expanded="false">
                      Event
                    </a>
                    <ul class="dropdown-menu bg-lightgrey p-0 rounded-0 border-0">
                      <li><a class="dropdown-item fw-bold text-capitalize black border-0"
                          href="{{ route('events.index') }}">Event List</a></li> 
                      <li><a class="dropdown-item fw-bold text-capitalize black border-0"
                          href="{{ route('events.detail') }}">Event Details</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text fw-bold {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text fw-bold {{ request()->routeIs('donate') ? 'active' : '' }}" href="{{ route('donate') }}">Donate</a>
                  </li>
                </ul>
              </div>
              <a href="#search1" class="mt_search text px-3">
                <i class="fa fa-search"></i>
              </a>
          </div>
          <div id="slicknav-mobile"></div>
        </div>
      </div>
      <div id="search1" class="search-popup">
        <button type="button" class="close">×</button>
        <form>
          <input type="search" placeholder="Search...">
          <button type="submit" class="btn-primary rounded-0 border-0">
            <i class="fa fa-search text-white" aria-hidden="true"></i>
          </button>
        </form>
      </div>
    </div>


  </header>
  <!-- Header Section End -->
