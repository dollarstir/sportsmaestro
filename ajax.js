$(function(){


    function isLoading(){
        swal({   
            title: "Validating!",   
            text: "<small>Please wait........</small>",
            type: "info",
            html: true 
            });
    }

    function resp(response){

        if(response=="ok"){
            swal({   
                title: "Comment sent!",   
                text: "<small>Your comment is delivered successfully</small>",
                type: "success",
                html: true 
                });

        }
        else{

            swal({   
                title: "Warning!",   
                text: "<small>" + response + "</small>",
                type: "error",
                html: true 
                });

        }




    }

    

    $(".contfrm").submit(function(e){

        e.preventDefault();

        var reg1opt = {
            url: 'dollar.php?action=addmess',
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: isLoading,
            success: resp


        }
        $.ajax(reg1opt);

    })

    $(".logfrm").submit(function(e){

        e.preventDefault();

        var reg1opt = {
            url: 'dollar.php?action=login',
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: isLoading,
            success: resp


        }
        $.ajax(reg1opt);

    })


    $(".regfrm").submit(function(e){

        e.preventDefault();

        var reg1opt = {
            url: 'dollar.php?action=register',
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: isLoading,
            success: resp


        }
        $.ajax(reg1opt);

    })

})