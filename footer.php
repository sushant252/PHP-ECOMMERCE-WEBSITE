<footer class="footer-area bg-img" style="background-image: url(img/bg-img/3.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="footer-logo mb-30">
                                <a href="#"><img src="img/core-img/leaf2.png" alt=""></a>
                            </div>
                            <p></p>
                            <div class="social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <!-- <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> -->
                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="https://www.instagram.com/greenyflycart?igsh=encwdHQ1d3hpcDZh"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <!-- <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>QUICK LINK</h5>
                            </div>
                            <nav class="widget-nav">
                                <ul>
                                    <li><a href="#">Purchase</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Payment</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Return</a></li>
                                    <li><a href="#">Advertise</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Career</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Policities</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>BEST SELLER</h5>
                            </div>


                           
                            <?php
               include ('config.php');
               $q="SELECT * FROM `product` WHERE action = 1 ORDER BY id DESC LIMIT 2";
               
               $r=mysqli_query($con,$q);

               
                if(mysqli_num_rows($r)>0)
                    {
                    while($row= mysqli_fetch_assoc($r))
                {    

               ?>
                            <!-- Single Best Seller Products -->
                            <div class="single-best-seller-product d-flex align-items-center">
                                <div class="product-thumbnail">
                                    <a href="shop-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo 'admin_panel/'  . $row['p_img']  ?>" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <a href="shop-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['p_name']; ?></a>
                                    <p>&#8377;<?php echo $row['p_price']; ?></p>
                                </div>
                            </div>
                            <?php
                }}
                ?>
                        </div>
                    </div>
                    



                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget">
                            <div class="widget-title">
                                <h5>CONTACT</h5>
                            </div>
                        
                        <?php
                        include('config.php');
                        $sql="SELECT * FROM `contact_us`  ORDER BY id DESC LIMIT 1" ;
                        $r=mysqli_query($con,$sql);

                        if(mysqli_num_rows($r)>0)
                        {
                            while($row= mysqli_fetch_assoc($r))
                            {    
                     ?>
               
                            <div class="contact-information">
                            <p><span>Address:</span> <?php echo $row['address'] ?></p>
                        <p><span>Phone:</span> <?php echo $row['phone'] ?></p>
                        <p><span>Email:</span> <?php echo $row['email'] ?></p>
                        <p><span>Open hours:</span> <?php echo $row['open_hours'] ?></p>
                        <p><span>Happy hours:</span> <?php echo $row['happy_hours'] ?></p>
                            </div>
                            <?php
                            }}
                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="border-line"></div>
                    </div>
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p>GreenFlycart All rights reserved | This website is made <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://mrsushant.netlify.app/" target="_blank">mr.sushant kumar</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        </div>
                    </div>
                    <!-- Footer Nav -->
                    <div class="col-12 col-md-6">
                        <div class="footer-nav">
                            <!-- <nav>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Service</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>
<!-- Aos Animation js -->
<script src="js/aos.js"></script>
<script src="js/filter.js"></script>
<script src="js/checkout.js"></script>

<!-- jQuery 3.6 for AJAX -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script>
    AOS.init();

    function addToCart(id, p_name, p_price, p_img) {
        <?php if (!isset($_SESSION['user_id'])): ?>
            alert("Please login first.");
            return;
        <?php endif; ?>

        fetch('cart-process.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `id=${encodeURIComponent(id)}&p_name=${encodeURIComponent(p_name)}&p_price=${encodeURIComponent(p_price)}&p_img=${encodeURIComponent(p_img)}`
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            location.reload();
        });
    }

    function removeFromCart(id) {
        fetch('cart-process.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `action=remove&id=${id}`
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
            location.reload();
        });
    }

    function updateQuantity(productId, change) {
        let qtyInput = document.getElementById(`qty_${productId}`);
        let newQty = parseInt(qtyInput.value) + change;

        if (newQty < 1) newQty = 1;

        qtyInput.value = newQty;
        updateTotalPrice(productId);
    }

    function updateTotalPrice(productId) {
        let row = document.querySelector(`tr[data-id='${productId}']`);
        let unitPrice = parseFloat(row.getAttribute("data-price"));
        let qty = parseInt(document.getElementById(`qty_${productId}`).value);

        let totalPrice = unitPrice * qty;
        document.getElementById(`total_price_${productId}`).innerHTML = `<span>$${totalPrice.toFixed(2)}</span>`;

        updateGrandTotal();
    }

    function updateGrandTotal() {
        let totalElements = document.querySelectorAll(".total_price span");
        let grandTotal = 0;

        totalElements.forEach(item => {
            grandTotal += parseFloat(item.innerText.replace("$", ""));
        });

        document.getElementById("grand_total").innerHTML = `<b>&#8377;${grandTotal.toFixed(2)}</b>`;
    }

    // Load grand total on page load
    window.onload = function () {
        updateGrandTotal();
    };


    
</script>


</body>

</html>