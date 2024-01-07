$(document).ready(function() {
    
    let POFC = $("#POFC");

    function fetchAllProductsOfCart(response) {
        POFC.empty();
        $.each(response, function(index, row) {
            POFC.append(`  
                <li class="flex py-6 space-x-6 data-productId=${row.productId}">
                    <img src="https://tailwindui.com/img/ecommerce-images/confirmation-page-06-product-02.jpg" alt="Model wearing women's artwork tee with isometric dots forming a cube in small." class="flex-none w-24 h-24 bg-gray-100 rounded-md object-center object-cover">
                    <div class="flex-auto space-y-1">
                        <h3 class="text-gray-900 font-bold text-xl">${row.ProductName}</h3>
                        <p class="text-gray-800">${row.productDesc}</p>
                        <label for="">Select Quantite</label><br>
                        <input class="bg-gray-100 border-2 border-gray-600 px-2 w-14 quantity-input" placeholder="1" type="number" min="1">
                    </div>
                    <p class="flex-none font-bold text-sm text-gray-900 price">${row.price}</p>
                    <p class="flex-none font-bold text-sm text-gray-900 total-price">${row.price}</p>
                </li>
            `);
        });

        // Add an event listener to update the total price when the quantity changes
        $(".quantity-input").on("input", function() {
            updateTotalPrice($(this));
        });

        // Initial total price calculation
        updateTotalPrices();
    }

    function updateTotalPrices() {
        $(".quantity-input").each(function() {
            updateTotalPrice($(this));
        });
    }

    function updateTotalPrice(quantityInput) {
        const quantity = parseInt(quantityInput.val()) || 0;
        const price = parseFloat(quantityInput.closest("li").find(".price").text()) || 0;
        const totalPrice = quantity * price;
        quantityInput.closest("li").find(".total-price").text(totalPrice.toFixed(2));
    }

    $.ajax({
        url: "http://localhost/ecom/customer/getAllProductsOfCart",
        type: "GET",
        dataType: "json",
        success: function(response) {
            fetchAllProductsOfCart(response);
        }
    });


    $("#addOrder").on("click", function(e){
        e.preventDefault();
        
    })
});