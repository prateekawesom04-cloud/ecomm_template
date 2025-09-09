<div class="app_navbar mobile_nav flex-col justify-around items-center p-2 w-100 border-b border-solid border-gray-200">
    <div class="container mx-auto">
        <div class="flex flex-row justify-around items-center gap-2">
            <div class="flex-row flex justify-around w-1/2 gap-2">
                <div class="logo">Bewakoof.com</div>
                <div class="nav_item flex-row gap-10 flex">
                    <a href="{{route('pages.products')}}">Men</a>
                    <a href="{{route('pages.products')}}">Women</a>
                    <a href="{{route('pages.products')}}">Mobile Covers</a>
                </div>
            </div>
            <div class="flex-row flex justify-around w-1/2 gap-2">
                <div class="app_search flex flex-row items-center p-3 bg-gray-100 w-64 h-6 rounded-md gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" style="font-size: 24px;" class="w-1/6" stroke="none"><path stroke="#303030" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.926 11.338a7.588 7.588 0 1 1-15.176 0 7.588 7.588 0 0 1 15.176 0Zm-1.692 5.896L21 21"></path></svg>
                    <input class="bg-transparent border-none outline-none w-5/6" type="text" name="search" placeholder="Search by Products">
                </div>
                <div class="user_nav items-center flex-row gap-4 flex">
                    <a href="{{route('pages.login')}}" class="login">Login</a>
                    <a href="javscript:void(0)" class="app_wishlist">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                            <path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                        </svg>
                    </a>
                    <a href="javscript:void(0)" class="app_cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 16 20"><path stroke="#303030" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M.75 4.8c0-.02.003-.037.006-.05h14.488c.003.013.006.03.006.05v14.4c0 .02-.003.037-.006.05H.756a.196.196 0 0 1-.006-.05V4.8ZM4.5 3.75c0-.73.395-1.429 1.098-1.945C6.302 1.29 7.255 1 8.25 1c.995 0 1.948.29 2.652.805C11.605 2.321 12 3.021 12 3.75"></path></svg>
                    </a>

                </div>

            </div>
        </div>
    </div>
</div>