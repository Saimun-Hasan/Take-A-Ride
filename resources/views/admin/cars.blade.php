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
                            <button type="button" class="col-xl-3 col-md-12 btn btn-success" style="margin-top: 30px !important;"> Apply</button>
                        </div>

                        <div class="col-xl-12 col-lg-3 col-md-12 col-sm-6">
                            <button type="button" class="btn btn-success mt-4 float-right" id="add-new-car"><i class="fa fa-plus-circle"></i> Add Car</button>
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
                                            <th>ID</th>
                                            <th>Action</th>
                                            <th>Car Name</th>
                                            <th>Plate Number</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>

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
            <div id="car-modal" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="add-car"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <form action="javascript:void(0)" id="update-car" name="update-car" class="form-horizontal"method="POST">
                                <div class="row">
                                    <input type="hidden" name="id" id="id">

                                    <div class="form-group col-md-12">
                                        <label for="car_name" class="control-label">Car Name:</label>
                                        <input type="text" class="form-control required" id="car_name">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="car_platenum" class="control-label">Plate Number:</label>
                                        <input type="text" class="form-control required" id="car_platenum">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="car_description" class="control-label">Description:</label>
                                        <textarea type="text" class="form-control required" id="car_description"></textarea>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="car_price" class="control-label">Price:</label>
                                        <input type="number" class="form-control required" id="car_price">
                                    </div>
                                </div>

                                {{-- <div class="form-group col-md-6">
                                    <label for="registration-date" class="control-label">Registration Date:</label>
                                    <input type="date" class="form-control required" id="registration-date">
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
                                </div> --}}

                                <button type="button" class="btn btn-success waves-effect waves-light col-12 text-uppercase font-weight-bold" id="btn-save" value="add-new-car">ADD</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        <!--Add A Car End-->

    </div>

@endsection
