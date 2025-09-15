
    <!--::header part start::-->
    <header class="main_menu home_menu !static w-full py-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler !static w-min" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="flex flex-row justify-between items-center flex-grow">
                            <div class="flex flex-row items-center justify-start gap-1">
                                <a class="navbar-brand" href="{{route('pages.index')}}"> 
                                    <!-- <img src="img/logo.png" alt="logo"> -->
                                    Brand
                                </a>

                                <div class="app_search flex-row items-center p-3 bg-gray-100 w-64 h-6 rounded-md gap-4 hidden lg:flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" style="font-size: 24px;" class="w-1/6" stroke="none"><path stroke="#303030" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.926 11.338a7.588 7.588 0 1 1-15.176 0 7.588 7.588 0 0 1 15.176 0Zm-1.692 5.896L21 21"></path></svg>
                                    <input class="bg-transparent border-none outline-none w-5/6" type="text" name="search" placeholder="Search by Products">
                                </div>
                            </div>

                            <div class="flex flex-row items-center justify-end gap-1">
                                <div class="main-menu-item hidden lg:flex basis-auto navbar-collapse" id="ds_navLinks">
                                    <a href="{{route('pages.login')}}" class="btn customBg p-2 my-1 rounded-0">Login/Sign Up</a>
                                </div>
                                <div class="hearer_icon d-flex">
                                    <a href=""><i class="ti-heart"></i></a>
                                    <div class="dropdown cart">
                                        <a class="dropdown-toggle" href="{{route('pages.cart')}}" id="navbarDropdown3">
                                            <i class="fas fa-cart-plus"></i>
                                        </a>
                                        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <div class="single_product">
            
                                            </div>
                                        </div> -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input hidden" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->