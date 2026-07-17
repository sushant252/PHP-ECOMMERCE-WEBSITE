
<?php include 'header.php'; ?>


<?php
// session_start();
include 'config.php'; // Database connection

// Function to calculate delivery charge
function getDeliveryCharge($user_lat, $user_lng) {
    $admin_lat = 28.657182;
    $admin_lng = 77.351672;

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

    $distance = getDistance($user_lat, $user_lng, $admin_lat, $admin_lng);
    $delivery_charge = ceil($distance / 5) * 50;

    return [
        'distance_km' => round($distance, 2),
        'charge' => $delivery_charge
    ];
}

// Get user location and calculate delivery charge
$user_id = $_SESSION['user_id'] ?? null;
$shipping = 0;
$delivery = [];

if ($user_id) {
    $stmt = $con->prepare("SELECT latitude, longitude FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        $delivery = getDeliveryCharge($user['latitude'], $user['longitude']);
        $shipping = $delivery['charge'];
    }
}
?>

<!-- form data fatch -->

<?php
// Fetch user data if logged in
$userData = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'addr' => '',
    'company' => '',
    'notes' => ''
    
];

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $stmt = $con->prepare("SELECT fullname, email, addr , phone FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($user = $result->fetch_assoc()) {
        $userData = array_merge($userData, $user);
    }
}
?>

<!-- update user details  -->

<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
        <h2>Checkout</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Checkout Area Start ##### -->
<div class="checkout_area mb-100">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Billing Details -->
            <div class="col-12 col-lg-7">
            <div class="checkout_details_area clearfix">
    <h5>Billing Details</h5>
    <form id="checkout-form" >
        <div class="row">
            <div class="col-md-12 mb-4">
                <label for="first_name">Customer Name *</label>
                <input type="text" class="form-control" name="first_name" required value="<?= htmlspecialchars($userData['fullname']) ?>">
            </div>
            
            <div class="col-12 mb-4">
                <label for="email_address">Email Address *</label>
                <input type="email" class="form-control" name="email" required value="<?= htmlspecialchars($userData['email']) ?>">
            </div>

            <div class="col-12 mb-4">
                <label for="phone_number">Phone Number *</label>
                <input type="number" class="form-control" name="phone" required value="<?= htmlspecialchars($userData['phone']) ?>">
            </div>

            <div class="col-12 mb-4">
                <label for="company">Company Name</label>
                <input type="text" class="form-control" name="company" value="<?= htmlspecialchars($userData['company']) ?>" >
            </div>

            <div class="col-12 mb-4">
                <label for="address">Address *</label>
                <input type="text" class="form-control" name="address" required value="<?= htmlspecialchars($userData['addr']) ?>">
            </div>

            <div class="col-md-12 mb-4">
                <label for="order-notes">Order Notes</label>
                <textarea class="form-control" name="order_notes" rows="4"></textarea>
            </div>
        </div>

       
    </form>
</div>

            </div>

            <!-- Order Summary -->
            <div class="col-12 col-lg-4">
                <div class="checkout-content">
                    <h5 class="title--">Your Order</h5>
                    <div class="products">
                        <div class="products-data">
                            <h5>Products:</h5>
                            <?php
                            $grand_total = 0;

                            if (isset($_SESSION['cart1']) && !empty($_SESSION['cart1'])):
                                foreach ($_SESSION['cart1'] as $item):
                                    $item_total = $item['price'] * $item['quantity'];
                                    $grand_total += $item_total;
                            ?>
                                <div class="single-products d-flex justify-content-between align-items-center">
                                    <p><?= htmlspecialchars($item['name']) ?> (x<?= $item['quantity'] ?>)</p>
                                    <h5>₹<?= number_format($item_total, 2) ?></h5>
                                </div>
                            <?php endforeach; endif; ?>
                        </div>
                    </div>

                    <div class="subtotal d-flex justify-content-between align-items-center mt-3">
                        <h5>Subtotal</h5>
                        <h5>₹<?= number_format($grand_total, 2) ?></h5>
                    </div>

                   

                    <div class="shipping d-flex justify-content-between align-items-center">
                        <h5>Shipping</h5>
                        <h5>₹<?= number_format($shipping, 2) ?></h5>
                    </div>

                    <div class="order-total d-flex justify-content-between align-items-center">
                        <h5>Total</h5>
                        <h5>₹<?= number_format($grand_total + $shipping, 2) ?></h5>
                    </div>
                    <div class="checkout-btn mt-30">
                            <button type="submit" id="place-order-btn" class="btn alazea-btn w-100">Place Order</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Footer Area Start ##### -->
<?php include 'footer.php'; ?>
