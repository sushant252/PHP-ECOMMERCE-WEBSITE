// Checkout process AJAX
$(document).ready(function () {
    $('#place-order-btn').on('click', function (e) {
        e.preventDefault();

        const formData = $('#checkout-form').serialize();

        $.ajax({
            type: 'POST',
            url: 'checkoutProcess.php',
            data: formData,
            success: function (response) {
                console.log('Response from server:', response);
            
                if (response.status === "success") {
                    window.location.href = response.redirect_url;
                } else {
                    alert('Something went wrong: ' + response.message);
                }
            },
            error: function (xhr, status, error) {
                console.error("AJAX Error: ", error);
                alert('AJAX error occurred. Check console.');
            }
        });
    });
});