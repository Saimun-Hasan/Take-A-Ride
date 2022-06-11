

<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route ('cars') }}">
                    <span>
                        <img src="/admin/img/logo.png" class="light-logo mb-3" alt="homepage" style="height: 83px !important;margin-left: 12px;" />
                    </span>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><img src="/admin/img/icon/menu.PNG" alt="" style="height: 30px;"> </li>
                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        @auth
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/admin/img/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">{{ auth()->user()->name }} &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href='{{ route ('profile') }}' class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="{{ route ('home') }}" class="dropdown-item"><i class="ti-wallet"></i> Website</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item" type="submit"><i class="fa fa-power-off"></i> logout</button>
                                </form>
                                <!-- text-->
                            </div>
                        @endauth
                    </li>
                    <!-- ============================================================== -->
                    <!-- End User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap">--- Inventory</li>
                    <li><a class="waves-effect waves-dark" href="{{ route ('cars') }}" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Cars </span></a></li>
                   {{--  <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Test <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:(void)">Analytical</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
