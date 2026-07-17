<?php
session_start();
$order_id = isset($_GET['order_id']) ? htmlspecialchars($_GET['order_id']) : 'N/A';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You for Your Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Segoe UI', sans-serif;
        }
        .thank-you-box {
            margin-top: 100px;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .order-id {
            font-size: 1.2rem;
            font-weight: 600;
            color: #007bff;
        }
        .btn-home {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="thank-you-box text-center">
        <h1 class="mb-4 text-success">🎉 Thank You!</h1>
        <p>Your order has been placed successfully.</p>
        <p class="order-id">Order ID: <strong>#<?php echo $order_id; ?></strong></p>
        <a href="index.php" class="btn btn-primary btn-home">Go Back to Home</a>
    </div>
</div>

</body>
</html>
