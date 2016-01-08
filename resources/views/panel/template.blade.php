<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    @yield('header')

            <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="{{ url('assets/images/ios/fickle-logo-72.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('assets/images/ios/fickle-logo-72.png') }}"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('assets/images/ios/fickle-logo-114.png') }}"/>

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="{{ url('assets/images/ico/fab.ico') }}">

    <title>{{ $title or 'Dashboard' }}</title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="{{ asset('assets/css/rtl-css/plugins/pace-rtl.css') }}">
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="{{ asset('/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl-css/plugins/bootstrap-progressbar-3.1.1-rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rtl-css/plugins/jquery-jvectormap-rtl.css') }}">

    <!--AmaranJS Css Start-->
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/jquery.amaran-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/all-themes-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/awesome-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/default-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/blur-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/user-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/rounded-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/readmore-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl-css/plugins/amaranjs/theme/metro-rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/plugins/fileinput.min.css') }}" rel="stylesheet">
    <!--AmaranJS Css End -->

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->

    @yield('style')

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        #main-content{
            height: auto;
        }
    </style>
</head>
<body class="">
<!--Navigation Top Bar Start-->
<nav class="navigation">
    <div class="container-fluid">
        <!--Logo text start-->
        <div class="header-logo">
            <a href="index.html" title="">
                <h1>{{ $title or 'Dashboard' }}</h1>
            </a>
        </div>
        <!--Logo text End-->
        <div class="top-navigation">
            <!--Collapse navigation menu icon start -->
            <div class="menu-control hidden-xs">
                <a href="javascript:void(0)">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <!--Collapse navigation menu icon end -->
            <!--Top Navigation Start-->
            <!--Navigation Top Bar End-->
</nav>
<section id="main-container">

    <!--Left navigation section start-->
    @if(Auth::check())
        <section id="left-navigation">
            <!--Left navigation user details start-->
            <div class="user-image">
                {{ Auth::user()->name }}
                <div class="user-online-status"><span class="user-status is-online  "></span></div>
            </div>
            <!--Left navigation user details end-->

            <!--Phone Navigation Menu icon start-->
            <div class="phone-nav-box visible-xs">
                <a class="phone-logo" href="index.html" title="">
                    <h1>{{ $title or 'Dashboard' }}</h1>
                </a>
                <a class="phone-nav-control" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                </a>

                <div class="clearfix"></div>
            </div>
            <!--Phone Navigation Menu icon start-->

            <!--Left navigation start-->
            <ul class="mainNav">
                <li class="active">
                    <a class="active" href="{{ url('/panel') }}">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{!! url('auth/logout') !!}">
                        <i class="fa fa-sign-out"></i> <span>Logout</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-list-alt"></i>
                        <span> Main Data </span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ url('panel/main-data') }}"> Main Data </a>
                        </li>

                        <li>
                            <a href="{{ url('panel/main-data/social') }}"> Social Links </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{ url('panel/slider') }}">
                        <i class="fa fa-list-alt"></i>
                        <span> Sliders </span>
                    </a>
                </li>
                <li>
                    <a href="{{ action('Panel\LinksController@index') }}">
                        <i class="fa fa-list-alt"></i>
                        <span> Menu Links </span>
                    </a>
                </li>
                <li>
                    <a href="{{ action('Panel\PagesController@index') }}">
                        <i class="fa fa-list-alt"></i>
                        <span> Pages </span>
                    </a>
                </li>

                <li>
                    <a href="{{ action('Panel\SectionsController@index') }}">
                        <i class="fa fa-list-alt"></i>
                        <span> Sections </span>
                    </a>
                </li>
                <li>
                    <a href="{{ action('Panel\ProductsController@index') }}">
                        <i class="fa fa-list-alt"></i>
                        <span> Products </span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('panel/main-data/admins') }}">
                        <i class="fa fa-list-alt"></i>
                        <span> Admins </span>
                    </a>
                </li>
            </ul>
            <!--Left navigation end-->
        </section>
        <!--Left navigation section end-->
        @endif
                <!--Page main section start-->
        <section id="min-wrapper">
            <div id="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Right hidden  section end -->
        <div id="change-color">
            <div id="change-color-control">
                <a href="javascript:void(0)"><i class="fa fa-magic"></i></a>
            </div>
            <div class="change-color-box">
                <ul>
                    <li class="default active"></li>
                    <li class="red-color"></li>
                    <li class="blue-color"></li>
                    <li class="light-green-color"></li>
                    <li class="black-color"></li>
                    <li class="deep-blue-color"></li>
                </ul>
            </div>
        </div>
</section>

<!--Layout Script start -->
<script type="text/javascript" src="{{ asset('assets/js/color.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/lib/jquery-1.11.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/multipleAccordion.js') }}"></script>

<!--easing Library Script Start -->
<script src="{{ asset('assets/js/lib/jquery.easing.js') }}"></script>
<!--easing Library Script End -->

<!--Nano Scroll Script Start -->
<script src="{{ asset('assets/js/jquery.nanoscroller.min.js') }}"></script>
<!--Nano Scroll Script End -->

<!--switchery Script Start -->
<script src="{{ asset('assets/js/switchery.min.js') }}"></script>
<!--switchery Script End -->

<!--bootstrap switch Button Script Start-->
<script src="{{ asset('assets/js/bootstrap-switch.js') }}"></script>
<!--bootstrap switch Button Script End-->

<!--easypie Library Script Start -->
<script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
<!--easypie Library Script Start -->

<!--bootstrap-progressbar Library script Start-->
<script src="{{ asset('assets/js/bootstrap-progressbar.min.js') }}"></script>
<!--bootstrap-progressbar Library script End-->

<!--FLoat library Script Start -->
<script type="text/javascript" src="{{ asset('assets/js/chart/flot/jquery.flot.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/chart/flot/jquery.flot.pie.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/chart/flot/jquery.flot.resize.js') }}"></script>
<!--FLoat library Script End -->

<script type="text/javascript" src="{{ asset('assets/js/pages/layout.js') }}"></script>
<!--Layout Script End -->


<script src="{{ asset('assets/js/countUp.min.js') }}"></script>

<!-- skycons script start -->
<script src="{{ asset('assets/js/skycons.js') }}"></script>
<!-- skycons script end   -->

<!--Vector map library start-->
<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('assets/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!--Vector map library end-->

<!--AmaranJS library script Start -->
<script src="{{ asset('assets/js/jquery.amaran.js') }}"></script>
<!--AmaranJS library script End   -->
<script src="{{  asset('assets/js/pages/dashboard.js') }}"></script>
<script src="{{  asset('assets/js/pages/sampleForm.js') }}"></script>
<script src="{{  asset('assets/js/fileinput.min.js') }}"></script>
<script src="{{  asset('') }}"></script>
<script src="{{  asset('assets/js/jquery.smartWizard.js') }}"></script>
<script src="{{  asset('assets/js/pages/formWizard.js') }}"></script>
@yield('scripts')

</body>
</html>