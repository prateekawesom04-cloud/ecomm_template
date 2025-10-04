
                                
<div class="single_product_item mb-5 app_product_card app_scroller_p relative productInfo" data-product_id="{{$product->product_id}}" data-image="{{asset('storage').'/'.json_decode($product->image)[0]}}" data-title="{{$product->title}}" data-price="{{$product->price}}">
    <div class="img_div relative">
        {{-- <div class="app_scroll_arrow_section d-flex flex-row gap-1 justify-between items-center absolute w-full h-full top-0 px-5">
            <span href="javascript:void(0)" class="app_scroll_arrow d-flex items-center justify-content-center bg-[#212529] rounded-circle cursor-pointer" data-scroll="-" style="height: 22px;width: 22px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
            </span>
            <span href="javascript:void(0)" class="app_scroll_arrow d-flex align-items-center justify-content-center bg-[#212529] text-success rounded-circle cursor-pointer" data-scroll="+" style="height: 22px;width: 22px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
            </span>
        </div> --}}
        <div>
            @include('includes.product_slider')
        </div>
        <a href="{{route('pages.product',$product->product_id)}}" class="absolute h-full w-full block"></a>
    </div>
    <div class="single_product_text">
        <h3>$ {{$product->price}}</h3>
        <a href="{{route('pages.product',$product->product_id)}}">
            <h4>{{substr($product->title,0,9)}} ...</h4>
        </a>
    </div>
    <div class="absolute top-0 right-0 m-3 w-[20px] h-[20px] z-[999] cursor-pointer app_product_heart {{($currentUser)?'loginTrue':''}}" data-product_id="{{$product->product_id}}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" class="" style="stroke: #303ab2;stroke-width: 2px;"><path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z"></path></svg>
    </div>
    <div class="absolute top-8 right-0 m-3 w-[20px] h-[20px] z-[999] cursor-pointer app_product_cart {{($currentUser)?'loginTrue':''}}" data-product_id="{{$product->product_id}}">
        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="" style="stroke: #303ab2;stroke-width: 2px;"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M16 64C7.2 64 0 71.2 0 80C0 88.8 7.2 96 16 96L61.3 96C69 96 75.7 101.5 77 109.1L127.9 388.8C134.1 423 163.9 447.9 198.7 447.9L464 448C472.8 448 480 440.8 480 432C480 423.2 472.8 416 464 416L198.7 416C179.4 416 162.8 402.2 159.3 383.2L153.6 352L466.6 352C500.5 352 529.9 328.3 537 295.1L569.4 144.4C574.8 119.5 555.8 96 530.3 96L106.6 96C99.9 77.1 81.9 64 61.3 64L16 64zM113 128L530.3 128C535.4 128 539.2 132.7 538.1 137.7L505.8 288.4C501.8 306.8 485.6 320 466.7 320L147.9 320L113 128zM188 524C188 513 197 504 208 504C219 504 228 513 228 524C228 535 219 544 208 544C197 544 188 535 188 524zM260 524C260 495.3 236.7 472 208 472C179.3 472 156 495.3 156 524C156 552.7 179.3 576 208 576C236.7 576 260 552.7 260 524zM432 504C443 504 452 513 452 524C452 535 443 544 432 544C421 544 412 535 412 524C412 513 421 504 432 504zM432 576C460.7 576 484 552.7 484 524C484 495.3 460.7 472 432 472C403.3 472 380 495.3 380 524C380 552.7 403.3 576 432 576z"/></svg> --}}
{{-- 
        <svg xmlns="http://www.w3.org/2000/svg" style="stroke: #303ab2;stroke-width: 2px;"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M8 64C3.6 64 0 67.6 0 72C0 76.4 3.6 80 8 80L53.7 80C65.1 80 75 88.1 77.2 99.4L136.6 402.8C141.7 429.1 164.8 448 191.6 448L488 448C492.4 448 496 444.4 496 440C496 435.6 492.4 432 488 432L191.5 432C172.4 432 155.9 418.5 152.2 399.7L142.9 352L461.2 352C494.7 352 523.7 328.9 531.3 296.4L566.6 145.1C572.5 120 553.4 96 527.7 96L92.8 96C89 77.4 72.7 64 53.7 64L8 64zM96 112L527.7 112C543.2 112 554.6 126.4 551.1 141.5L515.8 292.7C509.9 318 487.3 336 461.3 336L139.8 336L96 112zM176 528C176 510.3 190.3 496 208 496C225.7 496 240 510.3 240 528C240 545.7 225.7 560 208 560C190.3 560 176 545.7 176 528zM256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576C234.5 576 256 554.5 256 528zM432 496C449.7 496 464 510.3 464 528C464 545.7 449.7 560 432 560C414.3 560 400 545.7 400 528C400 510.3 414.3 496 432 496zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z"/></svg> --}}
    </div>
</div>