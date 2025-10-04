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
        }
        
        function getLocalStorage(key){
            return JSON.parse(localStorage.getItem(key));
        }

        let userLocalStorage = {};

        if(localStorage.getItem('userLocalStorage')){
            userLocalStorage = JSON.parse(localStorage.getItem('userLocalStorage'));
            userLocalStorage.favourites = userLocalStorage.favourites;
            userLocalStorage.cart = userLocalStorage.cart;

        } else{
            userLocalStorage.favourites = {};
            userLocalStorage.cart = {};
        }
        
        // if user logged in get its cart and favourites data
            @if($currentUser)

                @if(!empty($currentUser->cart))
                    userLocalStorage.cart = JSON.parse({{$currentUser->cart}});
                @endif

                @if(!empty($currentUser->favourites))
                    userLocalStorage.favourites = JSON.parse({{$currentUser->favourites}});
                @endif
                $(document).ready(function(){
                    setUserLocalStorage();
                });
            @endif

    // manage localStorage end
    

    $('.app_product_heart').click(function(){

        let product_id = $(this).attr('data-product_id');
        if($(this).hasClass('active')){
            userLocalStorage.favourites[product_id] = product_id;
            // callApi('post','{{route('post.updateUserData')}}',{favourites:product_id},ajaxResponse);
            
        } else{
            delete userLocalStorage.favourites[product_id];
            // callApi('post','{{route('post.updateUserData')}}',{favourites:product_id},ajaxResponse);

        }
        $(this).toggleClass('active');
        setUserLocalStorage();

    });

    $('.app_product_cart').click(function(){
        
        let product_id = $(this).attr('data-product_id');
        if($(this).hasClass('active')){
            userLocalStorage.cart[product_id] = 1;
            // callApi('post','{{route('post.updateUserData')}}',{cart:product_id},ajaxResponse);
            
        } else{
            delete userLocalStorage.cart[product_id];
            // callApi('post','{{route('post.updateUserData')}}',{cart:product_id},ajaxResponse);

        }
        $(this).addClass('disabled');
        $(this).toggleClass('active');
        setUserLocalStorage();
        
    });

    $('.cart_counter').click(function(){
        let product_id = $(this).parent().attr('data-product_id');
        $('.cart_count').val($('.cart_count').val()+$(this).attr('data-counter'));
        userLocalStorage.cart[product_id] = $('.cart_count').val();
        setUserLocalStorage();
    });



</script>