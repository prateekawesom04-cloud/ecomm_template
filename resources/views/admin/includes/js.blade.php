<script>

    // App loader functionality on page load start
        $(document).ready(function(){
            setTimeout(() => {
                $('.app_body').show();
                $('.app_loader').fadeOut(500);
            }, 1000);
        })
    // App loader functionality on page load end


    // slider click start
        $('.app_scroll_arrow').click(function(e){

            let scroll_arrow = $(this);
            let currentScroller = $(this).parents('.app_scroller_p').find('.app_scroller');
            
            $(currentScroller).animate({
                scrollLeft: '+='+$(scroll_arrow).attr('data-scroll')+currentScroller.width()
            },300);
        });
    // slider click end

    // 

</script>