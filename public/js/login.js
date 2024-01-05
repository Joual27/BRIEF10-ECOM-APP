$(document).ready(() => {
    console.log('Initiating the AJAX');
    $('#loginForm').submit(function (e) {
        console.log('Form submitted');
        console.log($(this).serialize());
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "http://localhost/ecom/Pages/loginUser",
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                 window.location.href = "http://localhost/ECOM/Admin/products";
                console.log( data);
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
        });
    });
});