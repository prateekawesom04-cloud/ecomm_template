<script>

    
    $('.app_login').click(function(){
        $('.app_custom_modal').show();
    });
    $('.app_custom_modal .btn-close').click(()=>{
        $('.app_custom_modal').hide();
    });

    let scrollCounter = 0;

    setInterval(() => {
        
        if(scrollCounter<3){
            scrollCounter+=1;
        } else{
            scrollCounter=0;
        }
        $('.app_scroller').animate({
            scrollLeft: scrollCounter*$('.app_scroller').innerWidth()
            // scrollLeft: $('.app_scroller').scrollLeft()+window.innerWidth
        },700);
        
        // $('.app_scroller').scrollLeft($('.app_scroller').scrollLeft()+window.innerWidth)
    }, 3000);

    $('.owl-nav').hide();


    // slider click
    $('.app_scroll_arrow').click(function(e){
        if($(this).hasClass('no_scroll')){
            return false;
        }
        let currentScroller = $(this).parents('.scroll_main').find('.scrollContainer1');
        
        $(currentScroller).animate({
            scrollLeft: '+='+$(this).attr('data-scroll')+currentScroller.width()
        },300);
    });

    $('.single_product_item').hover(function(){
        $(this).find('img').parent().toggleClass('app_scroller');
        
        $('.app_scroller').animate({
            scrollLeft: scrollCounter*$('.app_scroller').innerWidth()
            // scrollLeft: $('.app_scroller').scrollLeft()+window.innerWidth
        });
    }) 
    

    $('.get_otp').on('click',function(){
        if($(this).hasClass('active')){
            callApi('post','{{route('post.login.getOtp')}}',{phone:$('input[name=phone]').val()},getOtp);

        } else{    
            let btn = $('.get_otp');
            let currentScroller = $(btn).parents('.scroll_main').find('.scrollContainer1');
            $(currentScroller).animate({
                scrollLeft: '+='+$(btn).attr('data-scroll')+currentScroller.width()
            },300);
            $(this).text('Continue');
            $(this).addClass('active');
            $(this).attr('data-scroll','+');
            resetCounter();
        }
    });

    let counterInterval = '';
    let counter = 120;

    function resetCounter(){
        counter = 120;
        $('.otpCounter').hide();
        clearInterval(counterInterval);
    }

    function getOtp(response){
        
        if(response.code==200){
            responseToast(response.message,'bg-success');
            let btn = $('.get_otp');
            let currentScroller = $(btn).parents('.scroll_main').find('.scrollContainer1');
            
            $(currentScroller).animate({
                scrollLeft: '+='+$(btn).attr('data-scroll')+currentScroller.width()
            },300);

            localStorage.setItem('otp_varified',0);
            
            $(btn).text('Back');
            $(btn).removeClass('active');
            $(btn).attr('data-scroll','-');
            
            $('.otpCounter').show();
            $('#otpCounter').html(counter);

            counterInterval = setInterval(() => {
                if(counter > 0){
                    counter-=1;
                    $('#otpCounter').html(counter);
                } else{
                    counter = 120;
                    $('.otpCounter').hide();
                    $('.get_otp').html('Resent OTP');
                    $('.get_otp').addClass('active');
                    $(btn).attr('data-scroll','+');
                    clearInterval(counterInterval);
                }
            }, 1000);
        } else{
            responseToast(response.message,'bg-warning');
        }
    }

    $('input[name=otp]').on('keyup',function(){
        if($(this).val().length == 6){
            callApi('post','{{route('post.login.verifyOtp')}}',{otp:$('input[name=otp]').val()},verifyOtp);
        }
    });
    
    function verifyOtp(response){
        if(response.code==200){
            localStorage.setItem('otp_varified',1);
            $('.otpCounter').hide();
            responseToast(response.message,'bg-success');
            $('.app_custom_modal').hide();
            window.location.reload();
        } else{
            responseToast(response.message,'bg-warning');
        }
    }


    // manage localStorage start

        function setUserLocalStorage(){
            localStorage.setItem('userLocalStorage',JSON.stringify(userLocalStorage));
            updateCart();
            updateHeart();
            userLocalStorageData = localStorage.getItem('userLocalStorage');

            callApi('post','{{route("post.updateUserData")}}',{userLocalStorage:userLocalStorageData});
        }
        
        function getLocalStorage(key){
            return JSON.parse(localStorage.getItem(key));
        }

        let userLocalStorage = {};

        userLocalStorage.favourites = {};
        userLocalStorage.cart = {};
        
     
        // if user logged in get its cart and favourites data
        @if($currentUser)
        
            // if(localStorage.getItem('userLocalStorage')){
            //     userLocalStorage = JSON.parse(localStorage.getItem('userLocalStorage'));
            //     userLocalStorage.favourites = userLocalStorage.favourites;
            //     userLocalStorage.cart = userLocalStorage.cart;

            // } else{

                @if($currentUser->cart)
                    userLocalStorage.cart = JSON.parse(JSON.stringify({!!$currentUser->cart!!}));
                @endif
                @if($currentUser->favourites)
                    userLocalStorage.favourites = JSON.parse(JSON.stringify({!! $currentUser->favourites !!}));
                @endif
                // setUserLocalStorage();
                localStorage.setItem('userLocalStorage',JSON.stringify(userLocalStorage));

            // }

        @endif
        

    // manage localStorage end
    
    // update nav counters
    
    function updateHeart(){
        let cartCount = Object.keys(userLocalStorage.favourites).length;
        (cartCount)?$('.app_n_heart').show():$('.app_n_heart').hide();
        $('.app_n_heart').html(cartCount);
    }

    
    function addToFavourites(btn){
        let productInfo = $(btn).parents('.productInfo');
        let product_id = `${$(productInfo).attr('data-product_id')}`;
        let image = $(productInfo).attr('data-image');
        let title = $(productInfo).attr('data-title');
        let price = $(productInfo).attr('data-price');
        
        console.log('userLocalStorage--',userLocalStorage);
        

        userLocalStorage.favourites[product_id]={};
        userLocalStorage.favourites[product_id]['product_id'] = product_id;
        userLocalStorage.favourites[product_id]['title'] = title;
        userLocalStorage.favourites[product_id]['image'] = image;
        userLocalStorage.favourites[product_id]['price'] = price;
    }

    $('.app_product_heart').click(function(){

        if(!$(this).hasClass('loginTrue')){
            $('.app_custom_modal').show();
            return false;
        }

        let product_id = $(this).attr('data-product_id');
        if(!$(this).hasClass('active')){
            addToFavourites($(this));
            responseToast('Added to favourites');
            // callApi('post','{{route('post.updateUserData')}}',{favourites:product_id},ajaxResponse);
            
        } else{
            delete userLocalStorage.favourites[product_id];
            responseToast('Removed from favourites');
            // callApi('post','{{route('post.updateUserData')}}',{favourites:product_id},ajaxResponse);

        }
        $(this).toggleClass('active');
        setUserLocalStorage();
        

    });
    
    function updateCart(){
        let cartCount = Object.keys(userLocalStorage.cart).length;
        (cartCount)?$('.app_n_cart').show():$('.app_n_cart').hide();
        $('.app_n_cart').html(cartCount);
    }

    function addToCart(btn){
        let productInfo = $(btn).parents('.productInfo');
        let product_id = $(productInfo).attr('data-product_id');
        let image = $(productInfo).attr('data-image');
        let title = $(productInfo).attr('data-title');
        let price = $(productInfo).attr('data-price');
        let quantity = $('.cart_count').val();

        userLocalStorage.cart[product_id]={};
        userLocalStorage.cart[product_id]['product_id'] = product_id;
        userLocalStorage.cart[product_id]['title'] = title;
        userLocalStorage.cart[product_id]['image'] = image;
        userLocalStorage.cart[product_id]['price'] = price;
        userLocalStorage.cart[product_id]['quantity'] = quantity;
    }

    $('.app_product_cart').click(function(){
        let product_id = $(this).attr('data-product_id');


        if(!$(this).hasClass('loginTrue')){
            $('.app_custom_modal').show();
            return false;
        }

        if(!$(this).hasClass('active')){
            addToCart($(this));
            responseToast('Added to cart');
            // callApi('post','{{route('post.updateUserData')}}',{cart:product_id},ajaxResponse);
            
        } else{
            delete userLocalStorage.cart[product_id];
            responseToast('Removed from cart');
            // callApi('post','{{route('post.updateUserData')}}',{cart:product_id},ajaxResponse);

        }
        $(this).addClass('disabled');
        $(this).toggleClass('active');
        setUserLocalStorage();
        
    });

    $('.cart_counter').click(function(){
        @if($currentUser)
        let productInfo = $(this).parents('.productInfo');
        let product_id = $(productInfo).attr('data-product_id');
        userLocalStorage.cart[product_id]['quantity'] = $('.cart_count').val();
        setUserLocalStorage();
        @endif
    });

    function deleteCartItem(product_id){
        delete userLocalStorage.cart[product_id];
        setUserLocalStorage();
        responseToast('Removed from Cart');
    }
    
    function deleteFavouritesItem(product_id){
        delete userLocalStorage.favourites[product_id];
        setUserLocalStorage();
        responseToast('Removed from Favourites');
    }


    $(document).ready(function(){
        if(localStorage.getItem('userLocalStorage')){
            updateCart();
            updateHeart();
        }
    });

    // Shipping details data

        let shipping_details = {};
        
        @if($currentUser)
        @if($currentUser->shipping_details)
            shipping_details = JSON.parse(JSON.stringify({!!$currentUser->shipping_details!!}));
        @endif
        @endif

        function storeShipping(){
            localStorage.setItem('shipping_details',JSON.stringify(shipping_details));
            callApi('post','{{route("post.update_shipping_details")}}',{shipping_details:shipping_details},ajaxResponse);
        }

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
                
                storeShipping();
            }
            
        });

        
        function scrollToElement(element){
            
            $(element).parent().append('<div class="input_error text-red-600"></div>');
            $(element).get(0).scrollIntoView({behavior: 'smooth'});
            $(element).focus();
            $(element).siblings('.input_error').html(`Please Enter ${$(element).attr('name')}`);

            setTimeout(() => {
                $(element).siblings('.input_error').hide();
                $(element).siblings('.input_error').remove();
            }, 1000);
        }

    // Shipping details data

        $('input').on('keyup',function(){
            $('.input_error').hide();
            $('.input_error').remove();
        });

</script>