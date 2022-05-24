@extends('admin/layout')

@section('main-content')

    <div class="page-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">User Profile</h4>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    @if(Session::has('success'))
                    <div class="alert alert-success col-md-12 float-right">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="POST" action="{{route('profile')}}">
                                @csrf

                                <div class="form-group">
                                    <label class="col-md-12" for="name">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" id="name" value="{{ $user->name }}" placeholder="" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">User Name</label>
                                    <div class="col-md-12">
                                        <input type="text" name="username" id="username" value="{{ $user->username }}" placeholder="" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" name="email" id="email" value="{{ $user->email }}" placeholder="" class="form-control form-control-line" name="example-email" id="example-email">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Password</label>
                                    <div class="col-md-12">
                                        <input type="password" name="password" id="password" value="{{ $user->password }}" class="form-control form-control-line">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success" type="submit">Update Profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>

    </div>

@endsection
