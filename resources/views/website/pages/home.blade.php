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

            <div class="row">
                <!-- Stage -->

                @foreach($products as $product)
                    <div class="col-md-4" style="border:1px solid #f2eef2">
                        <div class="icon-box  ml-2 p-2">
                            <img src="{{$product->images}}" alt="{{$product->mobileName}}" style="margin: 0; padding:0"
                                 width="200" height="160" onclick="detailModal()">
                            <span value="{{$product->id}}">
                            <h3 ><strong>Rs. {{$product->mobilePrice}}</strong></h3>
                                </span>
                        </div>

                        <div class="col-12">
                            <p id="">{{$product->mobileName}}</p>

                            <div class="col-md-6 col-sm-3">
                                <sapn><i class=" sl sl-icon-envelope-open"></i><small>  3GB</small> </sapn>
                            </div>
                            <div class="col-md-6 col-sm-3">
                                <sapn><i class="  sl sl-icon-settings"></i> <small>  234 MP</small></sapn>
                            </div>
                            <div class="col-md-6 col-sm-3">
                                <sapn><i class=" sl sl-icon-check"></i><small>  3400 lioukkjkn</small> </sapn>
                            </div>
                            <div class="col-md-6 col-sm-3">
                                <sapn><i class=" sl sl-icon-envelope-open"></i><small>  noraml</small> </sapn>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

{{--    Modal--}}
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection
