@extends('admin.layouts.main')

@section('content')

    <div class="page-content-wrapper ">

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Form Elements</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Form Elements</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                        <form method="post">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Company Name</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="companyName" id="companyName" class="form-control dynamic"
                                            data-dependent="version">
                                        <option>Select Company Name</option>
                                        <option value="1">Samsung</option>


                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Mobile Name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="" id="name" placeholder="Mobile Name ..">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price PKR.</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="" id="price" placeholder="123456..">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Android OS</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="code_name" id="code_name" class="form-control dynamic"
                                            data-dependent="version">
                                        <option>Select Code Name</option>

                                    </select>
                                </div>

                            </div>


                        </form>
                        </div>
                    </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->


    @endsection
