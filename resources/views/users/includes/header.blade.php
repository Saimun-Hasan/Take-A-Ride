<!-- ======= Top-Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:support@takearide.com">support@takearide.com</a>
        <i class="bi bi-phone"></i> <a href="tel:+02-58315626">+02-58315626</a>
      </div>
    </div>
  </div>
<!-- End Top-Bar -->

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="/users/img/logo.png" alt="rtplogo" class="img-fluid lazyload"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#resources">Services</a></li>
          <li><a class="nav-link scrollto" href="/#resources">Pricing</a></li>
          <li><a class="nav-link scrollto" href="/#team">Team</a></li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>

          @auth

            <li></li>
                <form action="/logout" method="POST">
                    @csrf

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary"><span class="font-weight-bold">{{ auth()->user()->name }}</span></button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu">

                            @if(auth()->User()->username === 'Saimun_Hasan')
                                <button class="dropdown-item" type="button"  onclick="location.href='{{ route ('cars') }}';">Dashboard</button>
                            @endif
                            <button class="dropdown-item" type="button"  onclick="location.href='{{ route ('profile') }}';">My Profile</button>
                            <button class="dropdown-item" type="submit">Logout</button>
                        </div>
                    </div>
                </form>
            @else

            <li>
                <div class="btn-group">

                    <button type="button" class="btn btn-primary" onclick="location.href='{{ route ('signup') }}';">Sign Up</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" onclick="location.href='{{ route ('login') }}';">Login</a>
                    </div>
                </div>
            </li>
          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- End Header -->
