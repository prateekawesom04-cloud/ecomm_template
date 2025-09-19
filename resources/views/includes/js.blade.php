<script>

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

        let scroll_arrow = $(this);
        let currentScroller = $(this).parents('.app_product_card').find('.app_scroller');
        
        $(currentScroller).animate({
            scrollLeft: '+='+$(scroll_arrow).attr('data-scroll')+currentScroller.width()
        },300);
    });

</script>