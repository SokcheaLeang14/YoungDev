<!DOCTYPE html>
<html lang="zxx">
<head>         
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">  
        <!-- Title -->
        <title>Library</title>
        <!-- Favicon -->
        <link href="{{ asset('frontend/images/favicon.ico') }}" rel="icon" type="image/x-icon" />
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="{{ asset('frontend/css/mmenu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css" />
        <!-- Stylesheet -->
        <link href="{{ asset('frontend/style.css') }}" rel="stylesheet" type="text/css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
        <!-- Start: Header Section -->
        @include('frontend.layout.header')
        <!-- End: Header Section -->
        
        @yield('content')
        
        <!-- Start: Footer -->
        @include('frontend.layout.footer')
        <!-- End: Footer -->
        
        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="{{ asset('frontend/js/mmenu.min.js') }}"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="{{ asset('frontend/js/harvey.min.js') }}"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="{{ asset('frontend/js/waypoints.min.js') }}"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="{{ asset('frontend/js/facts.counter.min.js') }}"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="{{ asset('frontend/js/mixitup.min.js') }}"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="{{ asset('frontend/js/accordion.min.js') }}"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="{{ asset('frontend/js/responsive.tabs.min.js') }}"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="{{ asset('frontend/js/responsive.table.min.js') }}"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="{{ asset('frontend/js/masonry.min.js') }}"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="{{ asset('frontend/js/carousel.swipe.min.js') }}"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="{{ asset('frontend/js/bxslider.min.js') }}"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="{{ asset('frontend/js/main.js') }}"></script>
        
    </body>


</html>