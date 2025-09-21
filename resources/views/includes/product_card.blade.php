
                                
                                    <div class="single_product_item mb-5 relative">
                                        <div class="img_div">
                                            <a href="{{route('pages.product')}}">
                                                <img class="" src="{{$product->image}}" alt="">
                                            </a>
                                        </div>
                                        <div class="single_product_text">
                                            <h3>$ {{$product->price}}</h3>
                                            <a href="{{route('pages.product')}}">
                                                <h4>{{substr($product->title,0,9)}} ...</h4>
                                            </a>
                                        </div>
                                        <div class="absolute top-0 right-0 m-3 w-[20px] h-[20px] z-[999] cursor-pointer app_product_heart">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="" class="w-100 h-100" style="stroke: #303ab2;stroke-width: 2px;"><path d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z"></path></svg>
                                        </div>
                                    </div>