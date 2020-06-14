<!DOCTYPE html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Zumbola</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/assets/css/main-color.css')}}" id="colors">
</head>

<body class="transparent-header">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <header id="header-container">

        <!-- Header -->
        <div id="header">
            <div class="container">

                <!-- Left Side Content -->
                <div class="centered">

                    <!-- Logo -->
                    <div id="logo">
                        <a href=""><img src="{{asset('website/assets/images/logo2.png')}}"
                                        data-sticky-logo="{{asset('website/assets/images/logo2.png')}}"
                                        alt=""></a>
                    </div>

                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
                        </button>
                    </div>

                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">

                    </nav>
                    <div class="clearfix"></div>

                </div>
            </div>
        </div>
        <!-- Header / End -->

    </header>
    <div class="clearfix"></div>
    @yield('content')

    @include('website.layouts.scripts')
    <div class="row">
        <div class="col-md-12">
            <div class="copyrights">© {{date("Y")}} City Mobile. All Rights Reserved.</div>
        </div>
    </div>
</div>
</section>
</div>
</body>


</html>


