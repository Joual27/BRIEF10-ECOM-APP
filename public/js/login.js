$(document).ready(function(){


    $POC = $("#POC");




    $.ajax({
        url : "http://localhost/ecom/customer/getAllProducts",
        type : "GET" ,
        dataType : "json" ,
        success : function(response){
           fetchAllProducts(response);
        }
    })
})