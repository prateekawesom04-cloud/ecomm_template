<script>

    // toast js start
        
        function responseToast(msg,background='bg-light'){
            $('.app_toast .toast-body').html(msg);
            $('.app_toast').css('right','1%');
            $('.app_toast').addClass(background);
            $('.app_toast').fadeIn('slow',function(){
                setTimeout(() => {
                    $('.app_toast').fadeOut('slow');
                    $('.app_toast').css('right','-100%');
                    $('.app_toast').removeClass(background);
                }, 2000);
            });
        }
        
    // toast js end

    
    function ajaxResponse(response){
        if(response.code==200){
            responseToast(response.response,'bg-success');
        } else{
            responseToast(response.response,'bg-warning');
        }
    }

</script>