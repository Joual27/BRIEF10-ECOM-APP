$(document).ready(function(){


     let userName = $("#username");
     let password = $("#password");




    $.ajax({
        url : "http://localhost/ecom/LoginpCntrl/loginUser",
        type : "post",
        data:{
            uid: userName,
            pwd: password
        },
        dataType : "json" ,
        success : function(response){
           
        }
    })
})