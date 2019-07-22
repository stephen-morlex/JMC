<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
     <meta name="author" content="@stephen_vicson">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- title of site -->
   {!! SEOMeta::generate() !!}
    <!-- google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!--flaticon.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!--text-animation.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/text-animation.css') }}">

    <!--fancybox.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

    <!--fancybox.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <!--owl.carousel.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!--slider revolution css -->
    <link rel="stylesheet" href="/rs-plugin/css/layers.css" type="text/css" />
    <link rel="stylesheet" href="/rs-plugin/css/settings.css" type="text/css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!--plugins.css-->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">

    <!--icons.css-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!--menu-css.css-->
    <link href="{{ asset('assets/css/menu-css.css') }}" rel="stylesheet">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <!--Start Preloader-->
        <div class="preloader">
            <div class="preloader-inner-area">
                <div class="loader-overlay">
                    <div class="l-preloader">
                        <div class="c-preloader"></div>
                    </div>
                </div>
            </div>
        </div>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('script')

    <!--jquery.min.js-->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr and waypoints -->
    <script src="{{ asset('assets/js/modernizr.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}" type="text/javascript"></script>

    <!--bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--plugins js-->
    <script src="{{ asset('assets/js/plugins.js') }}" type="text/javascript"></script>

    <!--scrollup js-->
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>

    <!--gmaps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY"></script>
    <script src="{{ asset('assets/js/gmaps.js') }}" type="text/javascript"></script>

    <!--jquery.fancybox.min.js-->
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}" type="text/javascript"></script>

    <!--jquery.magnific-popup.min.js-->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>

    <!--isotope.pkgd.min.js-->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>

    <!--jquery counterup-->
    <script src="{{ asset('assets/js/counterup.min.js') }}" type="text/javascript"></script>

    <!--owl.carousel.min.js-->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="text/javascript"></script>

    <!--jquery.lettering.js-->
    <script src="{{ asset('assets/js/jquery.lettering.js') }}" type="text/javascript"></script>

    <!--jquery.textillate.js-->
    <script src="{{ asset('assets/js/jquery.textillate.js') }}" type="text/javascript"></script>

    <!--mixitup.js-->
    <script src="{{ asset('assets/js/mixitup.js') }}" type="text/javascript"></script>

    <!--slider revolution scripts -->
    <script src="/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

    <!-- slider revolution 5.0 extensions  -->
    <script src="/rs-plugin/js/extensions/revolution.extension.actions.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.migration.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
    <script src="/rs-plugin/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>

    <!-- custom.js-->
    <script src="{{ asset('assets/js/custom.js') }}" type="text/javascript"></script>
</body>
</html>
