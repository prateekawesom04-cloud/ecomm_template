
                                
<div class="single_product_item mb-5 app_product_card">
    <div class="img_div relative">
        <div class="app_scroll_arrow_section d-flex flex-row gap-1 justify-between items-center absolute w-full h-full top-0 px-5">
            <a href="javascript:void(0)" class="app_scroll_arrow d-flex items-center justify-content-center bg-[#212529] rounded-circle" data-scroll="-" style="height: 22px;width: 22px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
            </a>
            <a href="javascript:void(0)" class="app_scroll_arrow d-flex align-items-center justify-content-center bg-[#212529] text-success rounded-circle" data-scroll="+" style="height: 22px;width: 22px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
            </a>
        </div>
        <a href="{{route('pages.product')}}">
            @include('includes.product_slider')
        </a>
    </div>
    <div class="single_product_text">
        <h3>$ {{$product->price}}</h3>
        <a href="{{route('pages.product')}}">
            <h4>{{substr($product->title,0,9)}} ...</h4>
        </a>
    </div>
</div>