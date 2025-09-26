<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/montserrat.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    
    @yield('head')
</head>
<body>
    <div class="app_body app_light flex flex-column h-[100vh]" style="display:none;">
            <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                @include('admin.includes.header')
            </header>
            
            <div class="app_body_part container-fluid flex-1">
                <div class="row h-full">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar" style="">
                        
                        <div class="p-4">
                            <div class="user_info_card">
                                <div class="p-4">
                                    <div class="rounded-full">
                                        <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" alt="">
                                    </div>
                                </div>
                                <h4>Vendor Name</h4>
                                {{-- <span>56</span> --}}
                            </div>
                        </div>
                        @include('admin.includes.navbar')
                    </nav>
                    
                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        @yield('body')
                    </main>
                </div>
            </div>
            
        <div class="app_footer_part">
            @include('admin.includes.footer')
        </div>
    </div>
    @include('admin.includes.loader')

    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>

    @include('admin.includes.ajaxCall')
    @include('includes.main_js')
    @include('admin.includes.js')
    @yield('js')
    
</body>
</html>