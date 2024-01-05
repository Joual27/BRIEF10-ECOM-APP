

$(document).ready(function(){


  $.ajax({
    url : "http://localhost/ecom/customer/getAllProductsOfCustomer",
    dataType : "json",
    success : function(response){
      fetchProductsOfCard(response);  
    }
})   

  
    
  $("#cartBtn").on("click", function () {
    var cart = $("#cart");

    if (!cart.hasClass("hidden")) {
        cart.addClass("hidden");
    } else {
        cart.removeClass("hidden");
    }
});


$("#cart").on("click", ".delete", function () {
  // console.log("done");
  let productId = $(this).closest('[id="pContainer"]').data("id");
  // console.log(productId);

 $.ajax({
    url : "http://localhost/ecom/customer/deleteProductOfCard",
    type : "POST",
    dataType : "json",
    data : {
      "delete" : 1,
      "productId" : productId
    },
    success : function(response){
      fetchProductsOfCard(response);
    }
 })
});

  
    });

    



    let POC = $("#POC");

    function fetchAllProducts(response){
        POC.empty();
        $.each(response, function(index,row){
            {
                POC.append(`
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="flex-1 flex flex-col p-8" id="pInfos">
                  <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (1).jpg" alt="">
                  <h3 class="mt-6 text-gray-900 text-sm font-medium" id="pName">${row.ProductName}</h3>
                  <dl class="mt-1 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Title</dt>
                    <dd class="text-gray-500 text-sm" id="pDesc">${row.productDesc}</dd>
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                      <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full" id="pPrice">${row.price}</span>
                    </dd>
                  </dl>
                </div>
                <div>
                  <div class="-mt-px flex divide-x divide-gray-200 ">
                    <div class="w-0 flex-1 flex" data-id="${row.productId}" id='addToCard' >
                      <a class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg cursor-pointer hover:text-gray-500">
                      <svg class="w-5 h-6 text-gray-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.546.5a9.5 9.5 0 1 0 9.5 9.5 9.51 9.51 0 0 0-9.5-9.5ZM13.788 11h-3.242v3.242a1 1 0 1 1-2 0V11H5.304a1 1 0 0 1 0-2h3.242V5.758a1 1 0 0 1 2 0V9h3.242a1 1 0 1 1 0 2Z"/>
          </svg>
                        <span class="ml-3">Add To Card</span>
                      </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex">
                      <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                      <svg class="w-5 h-6 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 9h2m3 0h5M1 5h18M2 1h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z"/>
          </svg>
                        <span class="ml-3">More</span>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            `)
            }
        })
    }
  
    $.ajax({
      url : "http://localhost/ecom/customer/getAllProducts",
      type : "GET" ,
      dataType : "json" ,
      success : function(response){
         fetchAllProducts(response);
      }
  })


    function fetchProductsOfCard(response){
       $("#cart").empty();
       $.each(response,function(index,row){
          $("#cart").append(`
        
          <div class="w-[100%] flex justify-between" id="pContainer" data-id="${row.productId}">
          <div class="flex gap-[10px] items-center">
            <div>
                <img class="w-[50px] h-[50px]"  src="../img/icons/category.png" alt="">
            </div>
            <div class="items-center">
                  <p class="font-medium text-gray-600 ">${row.ProductName}</p>
                  <p class="font-medium text-[0.8rem]">${row.productDesc}</p>
            </div>
          </div>
          <div class="flex items-center gap-[20px]">
            <div>
                <p class="font-medium text-indigo-600">${row.price}</p>
            </div>
            <div>
              <img class="w-[30px] h-[30px] delete cursor-pointer" src="../img/icons/delete.png" alt="">       
            </div>
            </div>
         </div>
          
        
    
    `)
       })

       $("#cart").append(
         `<div><a href="http://localhost/ecom/customer/productOfCart" class="underline ml-[3.5rem] text-red-800 ">Proceed To Payment</a></div> `
       )
    }


    $("#POC").on("click","#addToCard",function(){
      let id = $(this).data("id");
      $.ajax({
        url : "http://localhost/ecom/customer/addProductOfCard",
        type : "POST" ,
        dataType : "json" ,
        data : {
          "add" : 1,
          "productId" : id 
        },
        success : function(response){
          fetchProductsOfCard(response);  
        }
      })

      $("#cart").removeClass("hidden");
      $.ajax({
        url : "http://localhost/ecom/customer/getAllProductsOfCustomer",
        dataType : "json",
        success : function(response){
          fetchProductsOfCard(response);  
        }
      })    
    })

    


    $("#search").on("keyup",function(){
      let searchValue = $("#search").val();

      $.ajax({
        url : "http://localhost/ecom/customer/searchForProduct",
        type : "POST",
        dataType : "json",
        data : {
          "search" : 1 ,
          "searchValue" : searchValue,
        },
        success : function(response){
           fetchAllProducts(response);
        }
    })



   
  
})


