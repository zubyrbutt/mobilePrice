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
                                <li class="breadcrumb-item active">Key Specs</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Key Specs</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            @endif
                            <form method="post" method="post" action="{{route('android.store')}}">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Company Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="company_id" id="company_id"
                                                class="form-control dynamic"
                                                data-dependent="version">
                                            <option>Select Company Name</option>
                                            <option value="1">Samsung</option>
                                            <option value="2">Infinix</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Mobile Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" name="mobileName" id="name"
                                               placeholder="Mobile Name ..">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="price" class="col-sm-2 col-form-label">Price PKR.</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="mobilePrice" type="text" value="" id="price"
                                               placeholder="123456..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="display" class="col-sm-2 col-form-label">Display <i class="mdi mdi-monitor"></i></label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="display" type="text" value="" id="display"
                                               placeholder="display..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="processor" class="col-sm-2 col-form-label">Processor</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="processor" type="text" value="" id="processor"
                                               placeholder="processor..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="frontCamera" class="col-sm-2 col-form-label">Front Camera</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="frontCamera" type="text" value=""
                                               id="frontCamera"
                                               placeholder="front camera..">
                                    </div>
                                </div>

<div class="form-group row">
                                    <label for="rearCamera" class="col-sm-2 col-form-label">Rear Camera</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="rearCamera" type="text" value=""
                                               id="rearCamera"
                                               placeholder="rear camera..">
                                    </div>
                                </div>


<div class="form-group row">
                                    <label for="ram" class="col-sm-2 col-form-label">Ram</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="ram" type="text" value=""
                                               id="ram"
                                               placeholder="ram..">
                                    </div>
                                </div>


<div class="form-group row">
                                    <label for="storage" class="col-sm-2 col-form-label">Storage</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="storage" type="text" value=""
                                               id="storage"
                                               placeholder="storage..">
                                    </div>
                                </div>


<div class="form-group row">
                                    <label for="batteryCapacity" class="col-sm-2 col-form-label">Battery Capacity</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="batteryCapacity" type="text" value=""
                                               id="batteryCapacity"
                                               placeholder="battery capacity..">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Android OS</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="os" id="os"
                                                class="form-control dynamic"
                                                data-dependent="version">
                                            <option>Select Code Name</option>
                                            <option value="10">10</option>
                                            <option value="9">9</option>

                                        </select>
                                    </div>

                                </div>



                                <div class="form-group row">
                                    <label for="batteryCapacity" class="col-sm-2 col-form-label">Market Status</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="marketStatus" type="text" value=""
                                               id="marketStatus"
                                               placeholder="market status..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="batteryCapacity" class="col-sm-2 col-form-label">images</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="images" type="file" value=""
                                               id="images">
                                    </div>
                                </div>

   <div class="form-group row">
                                    <label for="batteryCapacity" class="col-sm-2 col-form-label">Summary</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="summary" id="summary" placeholder="summary .."></textarea>
                                    </div>
                                </div>

                                <button class="btn btn-primary pull-right">Post</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


@endsection
