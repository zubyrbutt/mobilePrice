<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><i class="mdi mdi-assistant"></i> City Mobile</a>
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

                <li>
                    <a href="{{url('mobile/categories')}}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span> Categories <span class="badge badge-pill badge-success float-right">7</span></span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cellphone"></i> <span> Post New Mobile </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('/mobile/android/create')}}"><i class="mdi mdi-android"></i>Android</a></li>
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
