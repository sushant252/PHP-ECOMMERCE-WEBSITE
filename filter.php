<?php
include('config.php');

// Get and sanitize input values
$price = isset($_POST['price']) ? (int)$_POST['price'] : 10000; // Ensure price is an integer
$categories = isset($_POST['categories']) ? json_decode($_POST['categories'], true) : [];

$sort = isset($_POST['sort']) ? $_POST['sort'] : '';
$search = isset($_POST['search']) ? mysqli_real_escape_string($con, $_POST['search']) : '';

// Base query to get products
$query = "SELECT * FROM product WHERE action = 1 AND p_price <= $price";

// Filter by category

if (!empty($categories)) {
    $categories = array_map(function($cat) {
        return mysqli_real_escape_string($GLOBALS['con'], $cat); // Sanitize category inputs
    }, $categories);

    $categoryFilter = implode("','", $categories);
    $query .= " AND p_cat IN ('$categoryFilter')";
}

// Filter by search term
if (!empty($search)) {
    $query .= " AND p_name LIKE '%$search%'";
}

// Sorting logic
switch ($sort) {
    case 'newest':
        $query .= " ORDER BY id DESC";
        break;
    case 'sales':
        $query .= " ORDER BY sales DESC";
        break;
    case 'price_low':
        $query .= " ORDER BY p_price ASC";
        break;
    case 'price_high':
        $query .= " ORDER BY p_price DESC";
        break;
}

// Execute query
$result = mysqli_query($con, $query);

// Output results
if (mysqli_num_rows($result) > 0) {
    while ($raw = mysqli_fetch_assoc($result)) {
        echo '
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="200ms">
                <div class="product-img">
                    <a href="shop-details.php?id=' . urlencode($raw['id']) . '"><img src="admin_panel/' . htmlspecialchars($raw['p_img']) . '" alt=""></a>
                    <div class="product-meta d-flex">
                        <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                        <a href="shop-details.php?id=' . urlencode($raw['id']) . '" class="add-to-cart-btn">Add to cart</a>
                        <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                    </div>
                </div>
                <div class="product-info mt-15 text-center">
                    <a href="shop-details.php?id=' . urlencode($raw['id']) . '"><p>' . htmlspecialchars($raw['p_name']) . '</p></a>
                    <h6><a href="shop-details.php?id=' . urlencode($raw['id']) . '">&#8377; ' . number_format($raw['p_price'], 2) . '</a></h6>
                </div>
            </div>
        </div>';
    }
} else {
    echo '<div class="col-12"><p>No products found.</p></div>';
}
?>
