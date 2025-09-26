<script>
    
    // Ajax call for custom data pass
    function callApi(type = null, url = null, data = null, action = null, beforeAction = null, catchError = null) {
        // if(type.tpLowerCase() != 'get'){
        $.ajax({
            type: type,
            // url: `{{ url('/') }}/${url}`,
            url: url,
            data: data,
            beforeSend: () => {
                if (beforeAction) beforeAction();
            },
            success: (response) => {
                if(response.error_code == '409'){
                    alert(response.error);
                    setTimeout(() => {
                        window.location.href = response.redirect;
                    }, 2000);
                    return false;
                }
                if (action) {
                    action(response);
                } else {
                    return response;
                }
            },
            error: (error) => {
                if (catchError) catchError();
            }
        });
        // }
    }
    
    // Ajax call for formdata object
    function callApiFormData(type = null, url = null, data = null, action = null, beforeAction = null, catchError = null) {
        // if(type.tpLowerCase() != 'get'){
        $.ajax({
            type: type,
            url: url,
            processData: false,
            contentType: false,
            enctype: "multipart/form-data",
            data: data,
            beforeSend: () => {
                if (beforeAction) beforeAction();
            },
            success: (response) => {
                if(response.error_code == '409'){
                    alert(response.error);
                    setTimeout(() => {
                        window.location.href = response.redirect;
                    }, 2000);
                    return false;
                }
                if (action) {
                    action(response);
                } else {
                    return response;
                }
            },
            error: (error) => {
                if (catchError) catchError();
            }
        });
        // }
    }
    
</script>