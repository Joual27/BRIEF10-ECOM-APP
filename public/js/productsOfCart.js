$(document).ready(function() {
    
    let POFC =$("#POFC");

    function fetchAllProductsOfCart(response){
        POFC.empty();
        $.each(response, function(index,row){
            {
                POFC.append(`  
                <li class="flex py-6 space-x-6">
                <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-06-product-02.jpg" alt="Model wearing women's artwork tee with isometric dots forming a cube in small." class="flex-none w-24 h-24 bg-gray-100 rounded-md object-center object-cover">
                <div class="flex-auto space-y-1">
                  <h3 class="text-gray-900 font-bold text-xl">${row.ProductName}</h3>
                  <p class="text-gray-800">${row.productDesc}</p>
                  <label for="">Select Quantite</label><br>
                  <input class="bg-gray-100 border-2 border-gray-600 px-2 w-14" placeholder="1" type="number" min="1">
                </div>
                <p class="flex-none font-bold text-sm text-gray-900">${row.price}</p>
              </li>

              `)
            }
        })
        }

        $.ajax({
            url : "http://localhost/ecom/customer/getAllProductsOfCart",
            type : "GET",
            dataType : "json",
            success : function(response){
                fetchAllProductsOfCart(response);
            }
        })
    
 })