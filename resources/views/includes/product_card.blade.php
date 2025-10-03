                                    <div class="single_product_item mb-5 relative">
                                        <div class="img_div">
                                            <a href="{{route('pages.product',$product->product_id)}}">
                                                <img class="" src="{{asset('storage').'/'.json_decode($product->image)[0]}}" alt="">
                                            </a>
                                        </div>
                                        <div class="single_product_text">
                                            <h3>$ {{$product->price}}</h3>
                                            <a href="{{route('pages.product',$product->product_id)}}">
                                                <h4>{{substr($product->title,0,9)}} ...</h4>
                                            </a>
                                        </div>
                                        <div class="absolute top-0 right-0 m-3 w-[20px] h-[20px] z-[999] cursor-pointer app_product_heart" data-product_id="{{$product->product_id}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" class="w-100 h-100" style="stroke: #303ab2;stroke-width: 2px;"><path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z"></path></svg>
                                        </div>
                                        {{-- <div class="absolute top-5 right-0 m-3 w-[20px] h-[20px] z-[999] cursor-pointer app_product_cart" data-product_id="{{$product->product_id}}">
                                            <svg version="1.1" id="shopping_x5F_carts_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 128 128"style="stroke: #303ab2;stroke-width: 2px;" style="enable-background:new 0 0 128 128" xml:space="preserve"><style>.st0{display:none}.st1{display:inline}.st2{fill:#020202}</style><g id="_x34__1_"><path class="st2" d="M45.3 81.2h78V43.7L35.9 25.4l-3.1-12.9-12.6-4.2c0-.2.1-.3.1-.5 0-4.3-3.5-7.8-7.8-7.8S4.7 3.5 4.7 7.8s3.5 7.8 7.8 7.8c1.8 0 3.4-.6 4.7-1.6l9.4 4.7L39 78l-12.5 9.4V103l5.7 7.1c-1.6 1.9-2.5 4.3-2.5 7 0 6 4.9 10.9 10.9 10.9s10.9-4.9 10.9-10.9-4.9-10.9-10.9-10.9c-.9 0-1.8.1-2.6.3l-2.1-3.4h65.6l3.6 6c-2.2 2-3.6 4.9-3.6 8.1 0 6 4.9 10.9 10.9 10.9s10.9-4.9 10.9-10.9-4.9-10.9-10.9-10.9h-.3l-1.3-3.1h12.5V97H32.8v-6.2l12.5-9.6zm0-6.3-4.6-21.4.6 3L59.8 58l3.8 17H45.3zm21.8 0-3.7-16.7 18.1 1.4 1.4 15.3H67.1zm18.8 0-1.4-15 17 1.3v13.7H85.9zm31.2-15.6v15.6h-12.5V61.5l12.5 1v-3.2l-12.5-1V44.4l12.5 2.4v12.5zM35.9 31.2l65.6 12.6V58l-17.3-1.4-1.5-16.4-3.1-.6 1.6 16.8-18.5-1.5-4.3-19.3-3.7-.7 4.4 19.7-18.5-1.5-4.7-21.9zm76.5 81.2c2.6 0 4.7 2.1 4.7 4.7s-2.1 4.7-4.7 4.7-4.7-2.1-4.7-4.7 2.1-4.7 4.7-4.7zm-71.8 0c2.6 0 4.7 2.1 4.7 4.7s-2.1 4.7-4.7 4.7-4.7-2.1-4.7-4.7 2.1-4.7 4.7-4.7z" id="icon_11_"/></g></svg>
                                        </div> --}}
                                    </div>