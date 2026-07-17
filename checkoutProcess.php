<?php
session_start();
include 'config.php'; // DB connection


if (!isset($_SESSION['user_id']) || !isset($_SESSION['cart1'])) {
    
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Get form data
$name = $_POST['first_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$address = $_POST['address'];
$order_notes = $_POST['order_notes'];

// Update user details
$stmt = $con->prepare("UPDATE users SET fullname=?, email=?, phone=?, company=?, addr=? WHERE id=?");
$stmt->bind_param("sssssi", $name, $email, $phone, $company, $address, $user_id);
$stmt->execute();

// Fetch user location
$stmt = $con->prepare("SELECT latitude, longitude FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$res = $stmt->get_result();
$user = $res->fetch_assoc();
$lat = $user['latitude'];
$lng = $user['longitude'];

// Delivery charge calculation
function getDistance($lat1, $lon1, $lat2, $lon2) {
    $earthRadius = 6371; // km
    $dLat = deg2rad($lat2 - $lat1);
    $dLon = deg2rad($lon2 - $lon1);
    $a = sin($dLat/2) * sin($dLat/2) +
         cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
         sin($dLon/2) * sin($dLon/2);
    $c = 2 * atan2(sqrt($a), sqrt(1-$a));
    return $earthRadius * $c;
}

$admin_lat = 28.657182;
$admin_lng = 77.351672;

$distance = getDistance($lat, $lng, $admin_lat, $admin_lng);
$delivery_charge = ceil($distance / 5) * 50;
$delivery_charge = round($delivery_charge, 2);

// Calculate grand total
$cart = $_SESSION['cart1'];
$subtotal = 0;

foreach ($cart as $item) {
    $subtotal += $item['price'] * $item['quantity'];
}

$grand_total = $subtotal + $delivery_charge;

// Insert into orders table

date_default_timezone_set("Asia/Kolkata"); // Set timezone at top

$order_date = date("Y-m-d H:i:s");
$status = "Pending";

$stmt = $con->prepare("INSERT INTO orders (user_id, total_amount, delivery_charge, order_notes, order_date, sub_total) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iddsss", $user_id, $grand_total, $delivery_charge, $order_notes, $order_date ,$subtotal);

$stmt->execute();

$order_id = $stmt->insert_id;

// Insert each item into order_items table
foreach ($cart as $item) {
    $product_id = $item['id'];
    $quantity = $item['quantity'];
    $price = $item['price'];

    $stmt = $con->prepare("INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iiid", $order_id, $product_id, $quantity, $price);
    $stmt->execute();
}

// Clear cart
unset($_SESSION['cart1']);

// Redirect to thank you page
header('Content-Type: application/json');

http_response_code(200);

echo json_encode([
    'status' => 'success',
    'order_id' => $order_id,
    'redirect_url' => 'thank_you.php?order_id=' . $order_id
]);
exit;
?>
