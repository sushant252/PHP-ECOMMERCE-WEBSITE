<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f5f5f5;
            padding: 40px;
        }

        .checkout-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .checkout-container h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2b7a78;
        }

        .checkout-form label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            margin-top: 15px;
        }

        .checkout-form input,
        .checkout-form select,
        .checkout-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 10px;
        }

        .checkout-form input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }

        .checkout-form .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .checkout-form .radio-group label {
            margin-right: 20px;
            font-weight: normal;
        }

        .checkout-form button {
            background-color: #2b7a78;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .checkout-form button:hover {
            background-color: #205e5b;
        }

        .card-section {
            display: none;
        }

        .show-card .card-section {
            display: block;
        }
    </style>
</head>
<body>

<div class="checkout-container">
    <h2>Checkout Form</h2>
    <form class="checkout-form" action="checkout_process.php" method="POST" id="checkoutForm">
        <label for="fullname">Full Name</label>
        <input type="text" name="fullname" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" required>

        <label for="address">Shipping Address</label>
        <textarea name="address" rows="3" required></textarea>

        <label for="city">City</label>
        <input type="text" name="city" required>

        <label for="state">State</label>
        <input type="text" name="state" required>

        <label for="zip">Zip Code</label>
        <input type="text" name="zip" required>

        <label for="country">Country</label>
        <select name="country" required>
            <option value="">Select Country</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
        </select>

        <label>Payment Method</label>
        <div class="radio-group">
            <label><input type="radio" name="payment_method" value="card" required onclick="toggleCard(true)"> Credit/Debit Card</label>
            <label><input type="radio" name="payment_method" value="cod" onclick="toggleCard(false)"> Cash on Delivery</label>
        </div>

        <div class="card-section" id="cardSection">
            <label for="card_number">Card Number</label>
            <input type="text" name="card_number">

            <label for="card_name">Name on Card</label>
            <input type="text" name="card_name">

            <label for="expiry">Expiry Date</label>
            <input type="month" name="expiry">

            <label for="cvv">CVV</label>
            <input type="text" name="cvv">
        </div>

        <button type="submit">Place Order</button>
    </form>
</div>

<script>
    function toggleCard(show) {
        const form = document.getElementById("checkoutForm");
        if (show) {
            form.classList.add('show-card');
        } else {
            form.classList.remove('show-card');
        }
    }
</script>

</body>
</html>
