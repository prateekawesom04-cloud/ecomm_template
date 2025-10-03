<script>

    // toast js start
        
        function responseToast(msg,background){
            $('.app_toast .toast-body').html(msg);
            $('.app_toast').css('right','1%');
            $('.app_toast').addClass(background);
            $('.app_toast').fadeIn('slow',function(){
                setTimeout(() => {
                    $('.app_toast').fadeOut('slow');
            $('.app_toast').css('right','-100%');
                }, 2000);
            });
        }
        
    // toast js end

    
    function ajaxResponse(response){
        if(response.code==200){
            responseToast(response.message,'bg-success');
        } else{
            responseToast(response.message,'bg-warning');
        }
    }

</script>