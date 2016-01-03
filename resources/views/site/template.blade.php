
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <link href="{!! asset('site/css/bootstrap.css') !!}" rel="stylesheet">

    <link href="{!! asset('site/css/font-awesome.css')!!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('site/css/style.css') !!}">
    <link href="{!! asset('site/css/mobile.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! asset('site/css/owl.carousel.css') !!}">
    <link rel="stylesheet" href="{!! asset('site/css/owl.theme.css') !!}">
    <link rel="stylesheet" href="{!! asset('site/css/owl.transitions.css') !!}">
    <!--<link rel="stylesheet" href="css/english.css">-->
    @yield('styles')


</head>
<body>

    <div class="master">

        <div class="container">

        @yield('content')

        </div>

        @yield('products')
        @yield('contact-form')
        @yield('footer')

    </div>


    <script src="{!! asset('site/js/jquery.js') !!}"></script>
    <script src="{!! asset('site/js/bootstrap.js') !!}"></script>
    <script src="{!! asset('site/js/head.js') !!}"></script>
    <script src="{!! asset('site/js/botsstrap-select.min.js') !!}"></script>
    <script src="{!! asset('site/js/animat.js') !!}"></script>
    <script src="{!! asset('site/js/owl.carousel.min.js') !!}"></script>
    <script src="{!! asset('site/js/scrollspy.js') !!}"></script>
    @yield('scripts')
</body>
</html>


