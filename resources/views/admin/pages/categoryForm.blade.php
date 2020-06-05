@extends('admin.layouts.main')
@section('title', 'Post New Mobile')
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
                                <li class="breadcrumb-item active">Add new brand name</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add new mobile brand name</h4>
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
                            <form method="post" method="post" action="{{route('category.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Mobile Brand Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="" name="name" id="name"
                                               placeholder="Samsung, Nokia, LG, OPPO ..">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="batteryCapacity" class="col-sm-2 col-form-label">Summary (optional)</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="summary" id="summary" placeholder="summary .."></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="batteryCapacity" class="col-sm-2 col-form-label">Summary (optional)</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image"/>
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
