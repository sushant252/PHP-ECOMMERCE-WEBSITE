<?php
session_start();
include 'config.php';

// Admin login check (optional)
// if (!isset($_SESSION['admin_logged_in'])) {
//     header('Location: admin_login.php');
//     exit;
// }

if (!isset($_GET['order_id'])) {
    die("Invalid Order ID.");
}

$order_id = intval($_GET['order_id']); // Security Improvement

// Get order with user info
$sql = "SELECT o.*, u.fullname, u.email, u.phone, u.addr 
        FROM orders o 
        JOIN users u ON o.user_id = u.id 
        WHERE o.id = $order_id
        ORDER BY o.order_date DESC";

$result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Orders</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            margin: 20px;
        }

        .order-box {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .order-header {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .section {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .no-orders {
            color: red;
            font-weight: bold;
        }

        /* Print button style */
        .print-btn {
            margin-bottom: 20px;
            padding: 10px 15px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Back button style */
        .back-btn {
            margin-bottom: 20px;
            padding: 10px 15px;
            background: #2196F3;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        /* Print media */
        @media print {
            .print-btn,
            .back-btn {
                display: none !important;
            }

            body {
                background: white;
                margin: 0;
            }

            .order-box {
                box-shadow: none;
                border: 1px solid #000;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<a href="order.php" class="back-btn">🔙 Back</a>
<button onclick="window.print()" class="print-btn">🖨️ Print Order</button>

<h2>🧾 Admin Order Dashboard</h2>

<?php
if (mysqli_num_rows($result) > 0) {
    while ($order = mysqli_fetch_assoc($result)) {
        $order_id = $order['id'];
        echo "<div class='order-box'>";
        echo "<div class='order-header'>Order #{$order_id}</div>";

        // User Info
        echo "<div class='section'><span class='label'>Customer:</span> {$order['fullname']} ({$order['email']}, {$order['phone']})</div>";
        echo "<div class='section'><span class='label'>Address:</span> {$order['addr']}</div>";

        // Order Info
        echo "<div class='section'><span class='label'>Order Date:</span> {$order['order_date']}</div>";
        echo "<div class='section'><span class='label'>Order Notes:</span> {$order['order_notes']}</div>";
        echo "<div class='section'><span class='label'>Subtotal:</span> ₹{$order['sub_total']} | <span class='label'>Delivery Charge:</span> ₹{$order['delivery_charge']} | <span class='label'>Total:</span> ₹{$order['total_amount']}</div>";

        // Order items
        $item_sql = "SELECT oi.*, p.p_name 
                     FROM order_items oi 
                     JOIN product p ON oi.product_id = p.id 
                     WHERE oi.order_id = $order_id";

        $item_result = mysqli_query($con, $item_sql);

        echo "<div class='section'>";
        echo "<table><tr><th>Product</th><th>Quantity</th><th>Price (₹)</th><th>Total (₹)</th></tr>";

        while ($item = mysqli_fetch_assoc($item_result)) {
            $total_price = $item['quantity'] * $item['price'];
            echo "<tr>
                   <td>{$item['p_name']}</td>
                   <td>{$item['quantity']}</td>
                   <td>{$item['price']}</td>
                   <td>{$total_price}</td>
                 </tr>";
        }

        echo "</table></div>";
        echo "</div>";
    }
} else {
    echo "<p class='no-orders'>No orders found.</p>";
}
?>

</body>
</html>
