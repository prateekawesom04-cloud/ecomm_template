
                                
                                    <div class="single_product_item mb-5">
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
                                    </div>