@extends('master')

@section('body')

  <!--================Cart Area =================-->
  <section class="cart_area pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="cart_inner">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody id="cart_items">
                            
                            {{-- @foreach(json_decode($currentUser->cart) as $cart) --}}
                            
                            {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>


                {{-- Checkout UserInfo Form --}}

                <div class="hidden">
                    <h3 class="text-[18px]">Select Delivery Address</h3>
                    <div class="address_cards">
                    </div>
                </div>

                @include('includes.checkoutForm')
            </div>
            <div class="col-md-4">
                @include('includes.checkout')
            </div>
        </div>
  </section>
  
    
@endsection

@section('js')

<script>

    function renderTable(){
        let userLocalStorage = getLocalStorage('userLocalStorage');
        let table = ``;
        $.each(userLocalStorage.cart,function(key,product){
            
            table += `
                <tr>
                    <td>
                    <a href="{{url('product')}}/${product.product_id}" class="media">
                        <div class="d-flex">
                        <img src="${product.image}" alt="" style="width: 9rem;" />
                        </div>
                        <div class="media-body">
                        <p>${product.title}</p>
                        </div>
                    </a>
                    </td>
                    <td>
                    <h5>${product.price}</h5>
                    </td>
                    <td>
                        <div class="product_count" data-product_id="${product.product_id}">
                            <span data-counter="-1" class="cart_counter number-decrement"> <i class="ti-minus"></i></span>
                            <input class="input-number cart_count" type="text" value="${product.quantity}" min="0">
                            <span data-counter="1" class="cart_counter number-increment"> <i class="ti-plus"></i></span>
                        </div>
                    </td>
                    <td>
                    <h5>${product.quantity*product.price}</h5>
                    </td>
                    <td>
                        <a class="delteItem block w-7" href="javascript:void(0)" data-product_id="${product.product_id}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.755 20.283 4 8h16l-1.755 12.283A2 2 0 0 1 16.265 22h-8.53a2 2 0 0 1-1.98-1.717zM21 4h-5V3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v1H3a1 1 0 0 0 0 2h18a1 1 0 0 0 0-2z"/></svg>
                        </a>
                    </td>
                </tr>
            `;
            
        });
            
        $('#cart_items').html(table);
    }
    
    function updateCheckout(){
        let userLocalStorage = getLocalStorage('userLocalStorage');
        let table = ``;
        let subTotalAmount = 0;
        let totalAmount = 0;

        $.each(userLocalStorage.cart,function(key,product){
            
            table += `
            
                <li>
                    <a href="javascript:void(0)">${product.title}
                        <span class="middle">x ${product.quantity}</span>
                        <span class="last">${product.quantity*product.price}</span>
                    </a>
                </li>
            `;

            subTotalAmount += product.quantity*product.price;
            console.log('subTotalAmount---',subTotalAmount);
            
            
        });
            
        $('.checkout_items').html(table);
        $('.subTotalAmount').html(subTotalAmount);
        $('.totalAmount').html(subTotalAmount);
    }

    $(document).ready(function(){
        renderTable();
        updateCheckout();
        renderAddress();
    });
    

    $('body').on('click','.delteItem',function(){
        deleteCartItem($(this).attr('data-product_id'));
        renderTable();
        updateCheckout();
    });

    $('body').on('click','.cart_counter',function(){
        let product_id = $('.product_count').attr('data-product_id');
        $(this).siblings('.cart_count').val(parseInt($(this).siblings('.cart_count').val())+parseInt($(this).attr('data-counter')));
        userLocalStorage.cart[product_id]['quantity'] = $(this).siblings('.cart_count').val();
        setUserLocalStorage();
        renderTable();
        updateCheckout();
    });

    $('.shipping_details').click(function(){

        let exitLoop = true;
        let form =  document.getElementById('shipping_form');
        let formData = new FormData(form);
        // let formData = new FormData($(this).parents('form')[0]);
        
        let data = Object.fromEntries(formData);
        
        for(var i=0; i < form.elements.length; i++){
            var e = form.elements[i];
            if($(e).prop('required') && $(e).val() == ''){
                exitLoop = false;
                scrollToElement($(e));
                return false;
            }
        }

        shipping_details[data.phone] = data;

        if(exitLoop){
            
            $(this).toggleClass('active');
            storeShipping();
            renderAddress();
        }
        
    });
    
    $('body').on('click','.deleteAddress',function(){
        deleteAddressItem($(this).attr('data-phone'));
        renderAddress();
    });

    function createAddressCard(address_card){
        html = ``;

        html += `
            <div class="address_card card flex flex-row justify-center relative p-[0.7rem] m-[0.7rem] mb-0 gap-3 rounded-xl">
                <div class="choose_btn">
                    <input type="radio" id="f-option5" name="add_select">
                </div>
                <div class="user_address text-start flex-1 flex flex-col">
                    <h4 class="mb-1">${address_card.fullname}</h4>
                    <span class="mb-1">Address: ${address_card.address}</span>
                    <span class="mb-1">Pincode: ${address_card.pincode}</span>
                    <span class="mb-1">Phone Number: ${address_card.phone}</span>
                </div>
                <div class="mb-1 flex flex-col gap-2">
                    <a href="javascript:void(0)" data-phone="${address_card.phone}" class="deleteAddress">Delete</a>
                </div>
            </div>
        `;

        return html;
    }

    function renderAddress(){
        $('.address_cards').html('');
        let delivery_addresses = JSON.parse(localStorage.getItem('shipping_details'));
        delivery_addresses = getLocalStorage('shipping_details');

        if(!Object.keys(delivery_addresses).length){
             $('.billing_details').show();
            return false;
            
        }
        $.each(delivery_addresses,function(i,j){
            
            $('.address_cards').append(createAddressCard(j));
        });
        
        $('.address_cards').parent().show();
    }
        

</script>

@endsection