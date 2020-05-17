
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <link href="{{asset('admin/assets/plugins/morris/morris.css')}}" rel="stylesheet">

    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/style.css')}}" rel="stylesheet" type="text/css">


</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
            <i class="ion-close"></i>
        </button>

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> Annex</a>
                <!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">

            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Main</li>

                    <li>
                        <a href="{{url('admins')}}" class="waves-effect">
                            <i class="mdi mdi-airplay"></i>
                            <span> Dashboard <span class="badge badge-pill badge-success float-right">7</span></span>
                        </a>
                    </li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cellphone"></i> <span> Post New Mobile </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/mobile/android')}}"><i class="mdi mdi-android"></i>Android</a></li>
                            <li><a href="#"><i class="mdi mdi-apple"></i>Apple</a></li>
                            <li><a href="advanced-alertify.html">Alertify</a></li>
                            <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                        </ul>
                    </li>

{{--                    <li>--}}
{{--                        <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Calendar </span></a>--}}
{{--                    </li>--}}

{{--                    <li class="menu-title">Components</li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> UI Elements </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="ui-buttons.html">Buttons</a></li>--}}
{{--                            <li><a href="ui-cards.html">Cards</a></li>--}}
{{--                            <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>--}}
{{--                            <li><a href="ui-modals.html">Modals</a></li>--}}
{{--                            <li><a href="ui-images.html">Images</a></li>--}}
{{--                            <li><a href="ui-alerts.html">Alerts</a></li>--}}
{{--                            <li><a href="ui-progressbars.html">Progress Bars</a></li>--}}
{{--                            <li><a href="ui-dropdowns.html">Dropdowns</a></li>--}}
{{--                            <li><a href="ui-lightbox.html">Lightbox</a></li>--}}
{{--                            <li><a href="ui-navs.html">Navs</a></li>--}}
{{--                            <li><a href="ui-pagination.html">Pagination</a></li>--}}
{{--                            <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>--}}
{{--                            <li><a href="ui-badge.html">Badge</a></li>--}}
{{--                            <li><a href="ui-carousel.html">Carousel</a></li>--}}
{{--                            <li><a href="ui-video.html">Video</a></li>--}}
{{--                            <li><a href="ui-typography.html">Typography</a></li>--}}
{{--                            <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>--}}
{{--                            <li><a href="ui-grid.html">Grid</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Forms </span> <span class="badge badge-pill badge-info float-right">8</span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="form-elements.html">Form Elements</a></li>--}}
{{--                            <li><a href="form-validation.html">Form Validation</a></li>--}}
{{--                            <li><a href="form-advanced.html">Form Advanced</a></li>--}}
{{--                            <li><a href="form-editors.html">Form Editors</a></li>--}}
{{--                            <li><a href="form-uploads.html">Form File Upload</a></li>--}}
{{--                            <li><a href="form-mask.html">Form Mask</a></li>--}}
{{--                            <li><a href="form-summernote.html">Summernote</a></li>--}}
{{--                            <li><a href="form-xeditable.html">Form Xeditable</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gauge"></i><span> Charts </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="charts-morris.html">Morris Chart</a></li>--}}
{{--                            <li><a href="charts-chartist.html">Chartist Chart</a></li>--}}
{{--                            <li><a href="charts-chartjs.html">Chartjs Chart</a></li>--}}
{{--                            <li><a href="charts-flot.html">Flot Chart</a></li>--}}
{{--                            <li><a href="charts-c3.html">C3 Chart</a></li>--}}
{{--                            <li><a href="charts-other.html">Jquery Knob Chart</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cards-outline"></i> <span> Icons </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="icons-material.html">Material Design</a></li>--}}
{{--                            <li><a href="icons-ion.html">Ion Icons</a></li>--}}
{{--                            <li><a href="icons-fontawesome.html">Font Awesome</a></li>--}}
{{--                            <li><a href="icons-themify.html">Themify Icons</a></li>--}}
{{--                            <li><a href="icons-dripicons.html">Dripicons</a></li>--}}
{{--                            <li><a href="icons-typicons.html">Typicons Icons</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table"></i><span> Tables </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="tables-basic.html">Basic Tables</a></li>--}}
{{--                            <li><a href="tables-datatable.html">Data Table</a></li>--}}
{{--                            <li><a href="tables-responsive.html">Responsive Table</a></li>--}}
{{--                            <li><a href="tables-editable.html">Editable Table</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="menu-title">Extra</li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-marker-multiple"></i><span> Maps </span> <span class="badge badge-pill badge-danger float-right">2</span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="maps-google.html"> Google Map</a></li>--}}
{{--                            <li><a href="maps-vector.html"> Vector Map</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

{{--                    <li class="has_sub">--}}
{{--                        <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>--}}
{{--                        <ul class="list-unstyled">--}}
{{--                            <li><a href="pages-login.html">Login</a></li>--}}
{{--                            <li><a href="pages-register.html">Register</a></li>--}}
{{--                            <li><a href="pages-recoverpw.html">Recover Password</a></li>--}}
{{--                            <li><a href="pages-lock-screen.html">Lock Screen</a></li>--}}
{{--                            <li><a href="pages-blank.html">Blank Page</a></li>--}}
{{--                            <li><a href="pages-404.html">Error 404</a></li>--}}
{{--                            <li><a href="pages-500.html">Error 500</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <!-- Top Bar Start -->
            <div class="topbar">

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <!-- language-->

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="ti-email noti-icon"></i>
                                <span class="badge badge-danger noti-icon-badge">5</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">745</span>Messages</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{asset('admin/assets/images/users/avatar-2.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Charles M. Jones</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{asset('admin/assets/images/users/avatar-3.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Thomas J. Mimms</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="{{asset('admin/assets/images/users/avatar-4.jpg')}}" alt="user-img" class="img-fluid rounded-circle" /> </div>
                                    <p class="notify-details"><b>Luis M. Konrad</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="ti-bell noti-icon"></i>
                                <span class="badge badge-success noti-icon-badge">23</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><span class="badge badge-danger float-right">87</span>Notification</h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                    <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
                                    <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
                                    <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>Welcome</h5>
                                </div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet m-r-5 text-muted"></i> My Wallet</a>
                                <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                    <div class="clearfix"></div>

                </nav>

            </div>
            <!-- Top Bar End -->

            <div class="page-content-wrapper ">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->


                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-webcam"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-center text-center">
                                            <div class="m-l-10">
                                                <h5 class="mt-0 round-inner">$18090</h5>
                                                <p class="mb-0 text-muted">Visits Today</p>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-end align-self-center">
                                            <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>5.26%</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-account-multiple-plus"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 text-center align-self-center">
                                            <div class="m-l-10 ">
                                                <h5 class="mt-0 round-inner">562</h5>
                                                <p class="mb-0 text-muted">New Users</p>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-end align-self-center">
                                            <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>8.68%</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round ">
                                                <i class="mdi mdi-basket"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-center text-center">
                                            <div class="m-l-10 ">
                                                <h5 class="mt-0 round-inner">7514</h5>
                                                <p class="mb-0 text-muted">New Orders</p>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-end align-self-center">
                                            <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span>2.35%</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-rocket"></i>
                                            </div>
                                        </div>
                                        <div class="col-6 align-self-center text-center">
                                            <div class="m-l-10">
                                                <h5 class="mt-0 round-inner">$32874</h5>
                                                <p class="mb-0 text-muted">Total Sales</p>
                                            </div>
                                        </div>
                                        <div class="col-3 align-self-end align-self-center">
                                            <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span>2.35%</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>

                    @yield('content')
                </div><!-- container -->


            </div> <!-- Page content Wrapper -->

        </div> <!-- content -->

        <footer class="footer">
            © 2018 Annex by Mannatthemes.
        </footer>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('admin/assets/js/detect.js')}}"></script>
<script src="{{asset('admin/assets/js/fastclick.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.blockUI.js')}}"></script>
<script src="{{asset('admin/assets/js/waves.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.scrollTo.min.js')}}"></script>

<script src="{{asset('admin/assets/plugins/skycons/skycons.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>

<script src="{{asset('admin/assets/pages/dashborad.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script>
    /* BEGIN SVG WEATHER ICON */
    if (typeof Skycons !== 'undefined'){
        var icons = new Skycons(
            {"color": "#fff"},
            {"resizeClear": true}
            ),
            list  = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for(i = list.length; i--; )
            icons.set(list[i], list[i]);
        icons.play();
    };

    // scroll

    $(document).ready(function() {

        $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});
        $("#boxscroll2").niceScroll({cursorborder:"",cursorcolor:"#cecece",boxzoom:true});

    });
</script>
{{--<script>--}}
{{--    $(document).ready(function () {--}}
{{--        $('.dynamic').change(function () {--}}
{{--            if($(this).val() !== ''){--}}
{{--                var select = $(this).attr('id');--}}
{{--                var value = $(this).val();--}}
{{--                var dependent = $(this).data('dependent');--}}
{{--                var _token = $('input[name="_token"]').val();--}}

{{--                $.ajax({--}}
{{--                    url: "{{ route('dynamicDependent.fetch') }}",--}}
{{--                    method: "POST",--}}
{{--                    data:{select:select, value:value, _token:_token, dependent:dependent},--}}
{{--                    success:function (result) {--}}
{{--                        $('#'+dependent).html(result);--}}
{{--                    }--}}
{{--                })--}}
{{--            }--}}
{{--        })--}}
{{--    })--}}
{{--</script>--}}
</body>
</html>
