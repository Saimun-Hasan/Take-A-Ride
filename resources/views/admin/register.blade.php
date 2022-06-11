<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">

    <title> Take A Ride</title>

    <!-- page css -->
    <link href="/admin/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/admin/css/style.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"> Take A Ride</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(admin/img/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">

                    <form class="form-horizontal " method="POST" action="{{route ('signup')}}">
                        @csrf

                        <h3 class="text-center m-b-20">Sign Up</h3>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control required" type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Name">
                                @error('name')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control required" type="text" name="username" id="username" required placeholder="Username">
                                @error('username')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control required" type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Email">
                                @error('email')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control required" type="password" name="password" id="password" required placeholder="Password">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control required" type="password" name="confirm_password" id="confirm_password" required placeholder="Confirm Password">
                                @error('password')
                                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group text-center p-b-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="{{ route ('login') }}" class="text-info m-l-5"><b>Sign In</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/admin/css/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/admin/css/node_modules/popper/popper.min.js"></script>
    <script src="/admin/css/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Js -->
    <script src="/admin/js/custom.js"></script>

</body>

</html>
