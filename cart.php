<?php
    include 'header.php';
?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Cart</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Cart Area Start ##### -->
    <div class="cart-area section-padding-0-100 clearfix">
      
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cart-table clearfix">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>TOTAL</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- session start -->
                                <?php if(isset($_SESSION['cart1']) && !empty($_SESSION['cart1'])): ?>
                                    <?php foreach($_SESSION['cart1'] as $cart_item): ?>
         
                                <tr>
                                <td class="cart_product_img">
                                <a href="#">
                                   <img src="<?= !empty($cart_item['img']) ? htmlspecialchars($cart_item['img']) : 'admin_panel/default.jpg'; ?>" 
                                                alt="<?= htmlspecialchars($cart_item['name']) ?>" 
                                                                >
                                                </a>
                                                <h5><?= htmlspecialchars($cart_item['name']) ?></h5>
                                                </td>
                                                <td class="qty">
    <div class="quantity">
        <span class="qty-minus" onclick="updateQuantity(<?= $cart_item['id'] ?>, -1)">
            <i class="fa fa-minus" aria-hidden="true"></i>
        </span>
        
        <input type="number" class="qty-text qty-input" id="qty_<?= $cart_item['id'] ?>" 
               step="1" min="1" max="99" name="quantity" value="<?= $cart_item['quantity'] ?>" 
               onchange="updateTotalPrice(<?= $cart_item['id'] ?>)">
        
        <span class="qty-plus" onclick="updateQuantity(<?= $cart_item['id'] ?>, 1)">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </span>
    </div>
</td>

<td class="price"><span><?= $cart_item['price'] ?></span></td>

<td class="total_price" id="total_price_<?= $cart_item['id'] ?>">
   
<span><?= $cart_item['price'] * $cart_item['quantity'] ?></span>

</td>

            <td class="action">
                    <a href="#"><i onclick="removeFromCart(<?= $cart_item['id'] ?>)" class="icon_close"></i></a>
            </td>
                                </tr>
                                <?php endforeach; ?>
                                <?php else: ?>
                                    <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            
            <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>COUPON DISCOUNT</h5>
                        <p>Stay updated with our latest offers and exclusive plant coupons. Subscribe via the homepage to receive them directly in your inbox.</p>
                        <form action="#" method="post">
                            <input type="text" name="coupon-code" placeholder="Enter your coupon code">
                            <button type="submit">APPLY COUPON</button>
                        </form>
                    </div>
                </div>

                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <h5 class="title--">Cart Total</h5>
                        <div class="subtotal d-flex justify-content-between">
                            
                        <h5>Subtotal</h5>
                        
                        <?php 
$grand_total = 0; // Initialize grand total

if(isset($_SESSION['cart1']) && !empty($_SESSION['cart1'])): 

    foreach($_SESSION['cart1'] as $cart_item): 
        $item_total = $cart_item['price'] * $cart_item['quantity'];
        $grand_total += $item_total; // Add to grand total
    endforeach; 
?>
    <!-- Show only the final grand total after the loop -->
    <h5 class="total_price" id="grand_total">
        <?= $grand_total ?>
    </h5>
<?php endif; ?>
                        
                        </div>
                     
                        <div class="total d-flex justify-content-between">
                           
                    </div>
                        <div class="checkout-btn">
                            <a href="checkout.php?id='<?php echo $cart_item['id'] ?>'" class="btn alazea-btn w-100">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Cart Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
    include 'footer.php';
?>