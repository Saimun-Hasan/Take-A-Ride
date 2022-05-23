<!-- ======= Top-Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:support@chalao.com">support@chalao.com</a>
        <i class="bi bi-phone"></i> <a href="tel:+8801959523513">+8801959523513</a>
      </div>
      <div class="d-none d-lg-flex align-items-center">
       <div class="contact-info d-flex align-items-center">
         <i class="bi bi-clock"></i> <a href="javascript:(void)">Mon-Fri:9:00AM - 05:00PM</a>
       </div>
      </div>
    </div>
  </div>
<!-- End Top-Bar -->

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="/users/img/rtplogo.png" alt="rtplogo" class="img-fluid lazyload"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#resources">Resources</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#insurances">Insurance</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

          @auth

            <li><span class="font-weight-bold">Welcome {{ auth()->user()->name }}</span></li>
            <form action="/logout" method="POST">
                @csrf

                <button type="submit">logout</button>
            </form>

            @else

            <li><a class="btn btn-primary text-white float-right" href="{{ route ('signup') }}">Sign Up</a></li>
            <li><a class="btn btn-primary text-white float-right" href="{{ route ('login') }}">Login</a></li>

          @endauth
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Chalao</h1>
      <h2>We Offer The Best Cars In Affordable Prices!</h2>
      <a href="tel:+8801959523513" class="btn-get-started scrollto">Call Now</a>
    </div>
  </section>
<!-- End Hero -->
