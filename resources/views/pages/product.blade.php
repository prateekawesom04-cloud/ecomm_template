@extends('master')

@section('body')

<div class="app_product py-3">
    
  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-md-6 col-lg-8">
          <div class="app_desktop_product_img hidden lg:block">
            @include('includes.product_img')
          </div>
          <div class="app_mobile_product_img block lg:hidden relative app_scroller_p">
            <div class="app_scroll_arrow_section d-flex flex-row gap-1 justify-between items-center absolute w-full h-full top-0 px-5">
                <span href="javascript:void(0)" class="app_scroll_arrow d-flex items-center justify-content-center bg-[#212529] rounded-circle" data-scroll="-" style="height: 22px;width: 22px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                </span>
                <span href="javascript:void(0)" class="app_scroll_arrow d-flex align-items-center justify-content-center bg-[#212529] text-success rounded-circle" data-scroll="+" style="height: 22px;width: 22px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                </span>
            </div>
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
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
              <a href="#" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
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