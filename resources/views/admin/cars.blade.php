@extends('admin/layout')

@section('main-content')

    <div class="page-wrapper">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Cars</h4>
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

                <div class="col-12">
                    <!--Filters Start-->
                    <div class="row mb-2">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6">
                            <form>
                                <div class="form-group">
                                    <label for="car-name" class="control-label font-weight-bold">Filter:</label>
                                    <select class="select2 m-b-10 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                        <optgroup label="Available Cars">
                                            <option value="">Toyota</option>
                                            <option value="">BMW</option>
                                        </optgroup>
                                        <optgroup label="Unavailable Cars">
                                            <option value="">Audi</option>
                                            <option value="">Marcedes</option>
                                        </optgroup>
                                        <optgroup label="Archived Cars">
                                            <option value="">Tesla</option>
                                            <option value="">SUV</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6">
                            <form>
                                <div class="form-group">
                                    <label for="car-name" class="control-label font-weight-bold">Date:</label>
                                    <div class='input-group mb-3'>
                                        <input type='text' class="form-control datetime" />
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <span class="ti-calendar"></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6">
                            <button type="button" class="col-xl-3 col-md-12 btn btn-success mt-4"> Apply</button>
                        </div>
                        <div class="col-xl-12 col-lg-3 col-md-12 col-sm-6">
                            <button type="button" class="btn btn-success mt-4 float-right" data-toggle="modal" data-target="#add-car-modal"><i class="fa fa-plus-circle"></i> Add Car</button>
                        </div>
                    </div>
                    <!--Filters End-->

                    <!--Table Start-->
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive m-t-20">
                                <table id="cars-table" class="table table-bordered table-striped">
                                    <thead>
                                        <tr class="font-weight-bold text-primary">
                                            <th>Action</th>
                                            <th>Status</th>
                                            <th>Car Name</th>
                                            <th>Car Picture</th>
                                            <th>Plate Number</th>
                                            <th>Registration Date</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="btn-group col-8">
                                                    <button type="button" class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#edit-car-modal">Edit</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Unavailable</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Archive</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success p-2 font-weight-bold col-8">Available</span></td>
                                            <td>Toyota Corolla</td>
                                            <td><img src="admin/img/cars/toyota.jpg" alt="" width="180"></td>
                                            <td>DH-1211-1231</td>
                                            <td>11-11-11</td>
                                            <td>200tk</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group col-8">
                                                    <button type="button" class="btn btn-warning font-weight-bold" data-toggle="modal" data-target="#edit-car-modal">Edit</button>
                                                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Available</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Archive</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-warning p-2 font-weight-bold col-8">Pending</span></td>
                                            <td>Toyota Alion</td>
                                            <td><img src="admin/img/cars/toyota.jpg" alt="" width="180"></td>
                                            <td>DH-1211-1231</td>
                                            <td>11-11-11</td>
                                            <td>200tk</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group col-8">
                                                    <button type="button" class="btn btn-danger font-weight-bold" data-toggle="modal" data-target="#edit-car-modal">Edit</button>
                                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0)">Unarchive</a>
                                                        <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-danger p-2 font-weight-bold col-8">Archived</span></td>
                                            <td>Toyota Premio</td>
                                            <td><img src="admin/img/cars/toyota.jpg" alt="" width="180"></td>
                                            <td>DH-1211-1231</td>
                                            <td>11-11-11</td>
                                            <td>200tk</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--Table End-->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>



        <!-- ============================================================== -->
        <!-- Modals -->
        <!-- ============================================================== -->
        <!--Add A Car Start-->
            <div id="add-car-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="add-car-modal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold text-primary">Add A New Car</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <form class="row" method="post" action="{{route ('cars')}}">
                                <div class="form-group col-md-6">
                                    <label for="car-name" class="control-label">Car Name:</label>
                                    <input type="text" class="form-control required" id="car-name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="plate-number" class="control-label">Plate Number:</label>
                                    <input type="text" class="form-control required" id="plate-number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="registration-date" class="control-label">Registration Date:</label>
                                    <input type="date" class="form-control required" id="registration-date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price-hour" class="control-label">Price:</label>
                                    <input type="text" class="form-control required" id="price-hour">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="availability" class="control-label">Availability:</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Available</option>
                                        <option value="">Unavailable</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="car-picture" class="control-label">Upload Picture:</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect waves-light col-12 text-uppercase font-weight-bold">ADD</button>
                        </div>
                    </div>
                </div>
            </div>
        <!--Add A Car End-->

        <!--Edit A Car Start-->
            <div id="edit-car-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit-car-modal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title font-weight-bold text-primary">Edit Car</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="row">
                                <div class="form-group col-md-6">
                                    <label for="car-name" class="control-label">Car Name:</label>
                                    <input type="text" class="form-control required" id="car-name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="plate-number" class="control-label">Plate Number:</label>
                                    <input type="text" class="form-control required" id="plate-number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="registration-date" class="control-label">Registration Date:</label>
                                    <input type="date" class="form-control required" id="registration-date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="price-hour" class="control-label">Price:</label>
                                    <input type="text" class="form-control required" id="price-hour">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="availability" class="control-label">Availability:</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Available</option>
                                        <option value="">Unavailable</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="car-picture" class="control-label">Upload Picture:</label>
                                    <input type="file" id="input-file-now" class="dropify" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success waves-effect waves-light col-12 text-uppercase font-weight-bold">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        <!--Edit A Car End-->

    </div>

@endsection
