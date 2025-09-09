<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="{{asset('js/tailwind.js')}}"></script>
</head>
<body>
    <div class="flex flex-row w-full h-screen">
        <div class="w-1/2 flex items-center">
            <img src="https://media.istockphoto.com/id/1132309095/photo/sunset-light-shining-on-the-buildings-and-cars-on-42nd-street-in-midtown-new-york-city.jpg?s=612x612&w=0&k=20&c=8J-Uu_ZVAkq_LZKVLifhh7Vf5-0Ly_9VcwmLNnfeLXU=" alt="" class="w-full h-full lgn_img">
        </div>
        <div class="w-1/2 bg-gray-100 flex flex-col items-center justify-center">
            <div class="min-w-80 text-left flex flex-col items-center justify-center p-10 gap-3">
                <h3 class="font-medium w-full">Login/SignUp</h3>
                <p class="text-sm w-full">Join Us</p>
                <input class="w-full bg-white h-10 rounded-lg" type="text" name="phone">
                <a href="javacript:void(0)" class="appbtn w-full rounded-lg bg-gray-300 p-2 text-center">Continue</a>
                <p class="text-sm my-4 w-full">or</p>
                <div class="flex flex-row items-center justify-evenly w-full">
                    <a href="javacript:void(0)" class="appbtn border-b border-solid border-gray-200">Google</a>
                    <a href="javacript:void(0)" class="appbtn border-b border-solid border-gray-200">Facebook</a>
                </div>
                <div class="flex flex-row w-full">
                    <div class="checkbox">
                        <input type="checkbox" name="agree">
                    </div>
                    <p>Fetch my address for fast checkout</p>
                </div>
                <p>Privacy Policies</p>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery-3.7.1.min.js')}}"></script>
    
    @include('includes.js')
</body>
</html>