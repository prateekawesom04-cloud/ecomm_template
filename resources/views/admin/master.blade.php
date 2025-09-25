<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />
    <title>BrandFit</title>

    <!-- <link rel="icon" href="img/favicon.png"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/pages/waves/css/waves.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
    @yield('head')

</head>
<body class="app_light">
    

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
    
    <script src="{{asset('admin/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset('admin/pages/widget/excanvas.js')}}"></script>
    <script src="{{asset('admin/pages/waves/js/waves.min.js')}}"></script>
    <script src="{{asset('admin/pages/widget/amchart/gauge.js')}}"></script>
    <script src="{{asset('admin/pages/widget/amchart/serial.js')}}"></script>
    <script src="{{asset('admin/pages/widget/amchart/light.js')}}"></script>
    <script src="{{asset('admin/pages/widget/amchart/pie.min.js')}}"></script>
    <script src="{{asset('admin/pages/dashboard/custom-dashboard.js')}}"></script>

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