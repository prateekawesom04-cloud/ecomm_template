<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organisation</title>

    <!-- <link rel="icon" href="img/favicon.png"> -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    @yield('head')

</head>
<body>
    @include('includes.header')
    
    @include('includes.navbar')
    @include('includes.m_navbar')

    <div class="app_body">

        @yield('body')

    </div>
    
    @include('includes.footer')
    
    @include('includes.loader')
    
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @include('includes.js')
    
    @yield('js')

</body>
</html>