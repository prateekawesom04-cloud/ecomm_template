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
    <link rel="stylesheet" href="{{asset('css/app_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>
<body>
    
    <div class="flex flex-row justify-center items-center h-[100vh]">
        
        <div class="app_modal_body md:h-[50%] h-full justify-start col-md-5 p-5 app_col app_content_box relative">
            <div class="col-md-10 scroll_main">
                <h1 class="mb-3">Admin Login</h1>
                <div class="flex flex-row overflow-hidden overflow-x-auto scrollContainer1">
                    
                    <div class="my-3 app_input_box min-w-full">
                        <label class="m-0" for="phone">Username</label>
                        <div class="">
                            <span class="px-1 py-2 border-r-1 border-[#1a1a1a]">+91</span>
                            <input class="px-1 py-2" type="text" name="username" placeholder="Enter your username">
                        </div>
                    </div>
                    
                    <div class="my-3 min-w-full">
                        <label class="m-0" for="otp">Enter Password</label>
                        <div class="">
                            <input class="px-1 py-2" type="password" name="password" placeholder="Enter Password">
                        </div>
                    </div>

                </div>
                <div class="flex justify-end">
                    <a href="javascript:void(0)" class="app_btn app_scroll_arrow admin_login active" data-scroll="+">Continue</a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tailwind.js')}}"></script>
    @include('admin.includes.ajaxCall')
    @include('includes.js')

    <script>
        $('.admin_login').click(function(){
            if(!$(this).hasClass('active')){
                $(this).attr('href',"{{route('admin.post.login')}}");
            } else{
                $(this).text('Login');
                $(this).removeClass('active');
                $(this).attr('data-scroll','-');
            }
        });
    </script>

</body>
</html>