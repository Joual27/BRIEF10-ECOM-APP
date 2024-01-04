$(document).ready(function(){
    const cart = document.getElementById('cart');
    const cartBtn = document.getElementById('cartBtn');
    cartBtn.addEventListener('click', (e) => {
    cart.classList.remove("scale-0");
    cart.classList.add("scale-95");
    });

    let POC = $("#POC");

    function fetchAllProducts(response){
        POC.empty();
        $.each(response, function(index,row){
            {
                POC.append(`
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                <div class="flex-1 flex flex-col p-8">
                  <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-full" src="images (1).jpg" alt="">
                  <h3 class="mt-6 text-gray-900 text-sm font-medium">${row.ProductName}</h3>
                  <dl class="mt-1 flex-grow flex flex-col justify-between">
                    <dt class="sr-only">Title</dt>
                    <dd class="text-gray-500 text-sm">${row.productDesc}</dd>
                    <dt class="sr-only">Role</dt>
                    <dd class="mt-3">
                      <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">${row.price}</span>
                    </dd>
                  </dl>
                </div>
                <div>
                  <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex">
                      <a class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
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

})
