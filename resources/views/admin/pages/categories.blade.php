@extends('admin.layouts.main')
@section('title', 'Categories')
@section('content')

        <a class="btn btn-success m-4" href="{{route('category.create')}}">
            <i class="mdi mdi-checkbox-marked-outline"></i>
            Add New Category
        </a>



        @if($brands->count() >0)
            @foreach($brands as $brand)
                <div class="row">
                    <!-- Column -->

                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                        <div class="round">
                                            <i class="mdi mdi-webcam"></i>
                                        </div>
                                    </div>
                                    <div class="col-12 align-self-center text-center">
                                        <div class="">
                                            <h5 class="">
                                                {{$brand->name}}
                                            </h5>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3>Sorry.. Not Found</h3>

        @endif

@endsection
