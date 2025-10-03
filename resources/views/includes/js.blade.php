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
            $(this).text('Back');
            $(this).removeClass('active');
            $(this).attr('data-scroll','-');
            callApi('post','{{route('api.login.getOtp')}}',{phone:$('input[name=phone]').val()},ajaxResponse);
        } else{    
            $(this).text('Continue');
            $(this).addClass('active');
            $(this).attr('data-scroll','+');
        }
    });


    function setLocalStorage(userLocalStorage){
        localStorage.setItem('userLocalStorage',JSON.stringify(userLocalStorage));
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
    
    $('.app_product_heart').click(function(){
        
        $(this).toggleClass('active');
        let product_id = $(this).attr('data-product_id');
        userLocalStorage.favourites[product_id] = product_id;
        setLocalStorage(userLocalStorage);
        callApi('post','{{route('post.updateUserData')}}',{favourites:product_id},ajaxResponse);

    });

    $('.app_product_cart').click(function(){
        
        $(this).toggleClass('active');
        let product_id = $(this).attr('data-product_id');
        userLocalStorage.cart[product_id] = product_id;
        setLocalStorage(userLocalStorage);
        callApi('post','{{route('post.updateUserData')}}',{cart:product_id},ajaxResponse);
        
    });

    
</script>