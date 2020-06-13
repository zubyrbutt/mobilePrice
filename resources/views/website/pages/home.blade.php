@extends('website.layouts.main')
@section('content')
    <!-- Header Container / End -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h5 class="headline centered margin-top-20">
                    <strong class="headline-with-separator">Popular Categories</strong>
                </h5>
            </div>

            <div class="col-md-12">
                <div class="categories-boxes-container margin-top-5 margin-bottom-10">

                    <!-- Box -->

                    @foreach($categories as $category)
                        <a href="#" class="category-small-box">
                            {{--                            <i class="im im-icon-Hamburger"></i>--}}
                            <h4>{{$category->name}}</h4>
                            @if($category->count()>0)
                                {{--                                <span class="category-box-counter">12</span>--}}

                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Products-->
    <section class="fullwidth padding-top-75 padding-bottom-70" data-background-color="#f9f9f9">
        <div class="container">

            <div class="row icons-container">
                <!-- Stage -->

                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="icon-box-2">
                            <img src="{{$product->images}}" alt="{{$product->mobileName}}" style="margin: 0; padding:0"
                                 width="200" height="160">
                            <h3><strong>Rs. {{$product->mobilePrice}}</strong></h3>

                            <p>{{$product->mobileName}}</p>
                        </div>
                    </div>
                @endforeach
                {{ $products->links() }}
                {{--                <a href="#" class="pull-right"><p class="pull-right">Latest mobiles</p>--}}
                {{--                </a>--}}
            </div>
            {{$products->links()}}
            {{--            <div class="row icons-container">--}}
            {{--                <!-- Stage -->--}}

            {{--                @foreach($oppo as $item)--}}
            {{--                    <div class="col-md-4">--}}
            {{--                        <div class="icon-box-2">--}}
            {{--                            <img src="{{$item->images}}" alt="{{$item->mobileName}}" style="margin: 0; padding:0"--}}
            {{--                                 width="200" height="160">--}}
            {{--                            <h3><strong>Rs. {{$item->mobilePrice}}</strong></h3>--}}

            {{--                            <p>{{$item->mobileName}}</p>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                @endforeach--}}


@endsection
