
    <!--::header part start::-->
    <header class="main_menu home_menu !static w-full">
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
                                <a class="navbar-brand" href="index.html"> 
                                    <!-- <img src="img/logo.png" alt="logo"> -->
                                    Brand
                                </a>

                                <div class="app_search flex flex-row items-center p-3 bg-gray-100 w-64 h-6 rounded-md gap-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="none" viewBox="0 0 24 24" style="font-size: 24px;" class="w-1/6" stroke="none"><path stroke="#303030" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.926 11.338a7.588 7.588 0 1 1-15.176 0 7.588 7.588 0 0 1 15.176 0Zm-1.692 5.896L21 21"></path></svg>
                                    <input class="bg-transparent border-none outline-none w-5/6" type="text" name="search" placeholder="Search by Products">
                                </div>
                            </div>

                            <div class="flex flex-row items-center justify-end gap-1">
                                <div class="main-menu-item hidden lg:flex basis-auto navbar-collapse" id="ds_navLinks">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Shop
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                                <a class="dropdown-item" href="category.html"> shop category</a>
                                                <a class="dropdown-item" href="single-product.html">product details</a>
                                                
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                pages
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                                <a class="dropdown-item" href="login.html"> login</a>
                                                <a class="dropdown-item" href="tracking.html">tracking</a>
                                                <a class="dropdown-item" href="checkout.html">product checkout</a>
                                                <a class="dropdown-item" href="cart.html">shopping cart</a>
                                                <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                                <a class="dropdown-item" href="elements.html">elements</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                blog
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                                <a class="dropdown-item" href="blog.html"> blog</a>
                                                <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                            </div>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="hearer_icon d-flex">
                                    <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                    <a href=""><i class="ti-heart"></i></a>
                                    <div class="dropdown cart">
                                        <a class="dropdown-toggle" href="#" id="navbarDropdown3" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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