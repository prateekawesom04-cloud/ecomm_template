@extends('master')

@section('body')

<div class="app_product py-3">
    
  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-md-6 col-lg-8">
          <div class="app_desktop_product_img hidden lg:block">
            @include('includes.product_img')
          </div>
          <div class="app_mobile_product_img block lg:hidden relative scroll_main">
            {{-- <div class="app_scroll_arrow_section d-flex flex-row gap-1 justify-between items-center absolute w-full h-full top-0 px-5"> --}}
                <span href="javascript:void(0)" class="app_scroll_arrow d-flex items-center justify-content-center bg-[#212529] rounded-circle absolute top-[50%] cursor-pointer left-[3%]" data-scroll="-" style="height: 22px;width: 22px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                </span>
                <span href="javascript:void(0)" class="app_scroll_arrow d-flex align-items-center justify-content-center bg-[#212529] text-success rounded-circle absolute top-[50%] cursor-pointer right-[3%]" data-scroll="+" style="height: 22px;width: 22px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                </span>
            {{-- </div> --}}
            @include('includes.product_slider')
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="s_product_text">
            
            <h3>Faded SkyBlu Denim Jeans</h3>
            <h2>$149.99</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> : Household</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>
            <p>
              First replenish living. Creepeth image image. Creeping can't, won't called.
              Two fruitful let days signs sea together all land fly subdue
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count" data-product_id="{{$product->product_id}}">
                <span data-counter="-1" class="cart_counter inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number cart_count" type="text" value="1" min="0" max="10">
                <span data-counter="1" class="cart_counter number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="javascript:void(0)" class="btn_3 app_product_cart {{($currentUser)?'loginTrue':''}}" data-product_id="{{$product->product_id}}">add to cart</a>
              <a href="javascript:void(0)" class="like_us app_product_heart {{($currentUser)?'loginTrue':''}} flex items-center justify-center" data-product_id="{{$product->product_id}}"> 
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" class="w-25 h-25" style="stroke: #303ab2;stroke-width: 2px;"><path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z"></path></svg>  
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  @include('includes.p_description')

  @include('includes.bestSellers')

</div>

@endsection