<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <title>BrandFit</title>

    <!-- <link rel="icon" href="img/favicon.png"> -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/price_rangs.css')}}">
    <link rel="stylesheet" href="{{asset('css/montserrat_font.css')}}">
    <link rel="stylesheet" href="{{asset('css')}}/tailwind.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    @yield('head')

</head>
<body class="app_light">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/app_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">

    <div class="app_body app_light" style="display:none;">

                    
        <div id="pcoded" class="pcoded">
            <div class="pcoded-container navbar-wrapper">
                @include('admin.includes.header')
                
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        @include('admin.includes.sidebar')
                        
                        <div class="pcoded-content">
                            @include('admin.includes.page_header')
                            <div class="pcoded-inner-content">
                                @yield('body')
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </div>


        
        @include('admin.includes.footer')
    
    </div>
    @include('admin.includes.loader')
    @include('admin.includes.appModal')
    
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/lightslider.min.js')}}"></script>
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
    <script src="{{asset('js/stellar.js')}}"></script>
    <script src="{{asset('js/price_rangs.js')}}"></script>
    <script src="{{asset('js/theme.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    @include('admin.includes.ajaxCall')
    @include('admin.includes.js')
    
    <script>
        $(document).ready(function(){
            setTimeout(() => {
                $('.app_body').show();
                $('.app_loader').fadeOut(500);
            }, 1000);
        })
    </script>
    
    @yield('js')

</body>
</html>