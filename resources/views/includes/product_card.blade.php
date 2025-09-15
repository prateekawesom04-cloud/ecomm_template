
                                
                                    <div class="single_product_item">
                                        <div class="img_div h-300px">
                                            <img class="" src="{{$product->image}}" alt="">
                                        </div>
                                        <div class="single_product_text">
                                            <a href="{{route('pages.product')}}">
                                                <h4>{{substr($product->title,0,9)}} ...</h4>
                                            </a>
                                            <h3>$ {{$product->price}}</h3>
                                            <a href="{{route('pages.singleCheckout')}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                        </div>
                                    </div>