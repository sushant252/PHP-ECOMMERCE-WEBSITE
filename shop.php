<?php
    include 'header.php';
?>




    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Shop</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Shop</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
    <div class="container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop-sidebar-area">
                    
                    <!-- Price Filter -->

                    


                   


                    <div class="shop-widget price mb-50">
                        <h4 class="widget-title">Price</h4>
                        <input type="range" id="priceRange" min="0" max="10000" value="10000" style="background:green">
                        <span id="priceValue">10000</span>
                    </div>

                     <!-- Shop Widget -->


                    <!-- Categories Filter -->
                    <div class="shop-widget category mb-50">
                        <h4 class="widget-title">Categories</h4>
                        <div class="widget-desc">

                        <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">All plants <span class="text-muted">(72)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input categoryFilter" id="customCheck2" value="Indoor">
                                    <label class="custom-control-label" for="customCheck2">Outdoor plants <span class="text-muted">(20)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2" >
                                    <input type="checkbox" class="custom-control-input categoryFilter" id="customCheck3" value="Office">
                                    <label class="custom-control-label" for="customCheck3">Indoor plants <span class="text-muted">(15)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input categoryFilter" id="customCheck4" value="outdoor">
                                    <label class="custom-control-label" for="customCheck4">Office Plants <span class="text-muted">(20)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input categoryFilter" id="customCheck5" value="Potted">
                                    <label class="custom-control-label" for="customCheck5">Potted <span class="text-muted">(15)</span></label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input categoryFilter" id="customCheck6" value="Other">
                                    <label class="custom-control-label" for="customCheck6">Others <span class="text-muted">(2)</span></label>
                                </div>
<!-- 
                        <label><input type="checkbox" class="categoryFilter" value="*">All</label><br>
                            <label><input type="checkbox" class="categoryFilter" value="Indoor"> Indoor Plants</label><br>
                            <label><input type="checkbox" class="categoryFilter" value="Office"> Office Plants</label><br>
                            <label><input type="checkbox" class="categoryFilter" value="outdoor"> Outdoor Plants</label><br>
                            <label><input type="checkbox" class="categoryFilter" value="Potted"> Outdoor Plants</label><br>
                            <label><input type="checkbox" class="categoryFilter" value="Other">Other</label><br> -->
                        
                        </div>
                    </div>


                     <!-- Shop Widget -->
                     <div class="shop-widget sort-by mb-50">
                            <h4 class="widget-title">Sort by</h4>
                            <div class="widget-desc">
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                                    <label class="custom-control-label" for="customCheck7">New arrivals</label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8">Alphabetically, A-Z</label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label" for="customCheck9">Alphabetically, Z-A</label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10">Price: low to high</label>
                                </div>
                                <!-- Single Checkbox -->
                                <div class="custom-control custom-checkbox d-flex align-items-center">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                    <label class="custom-control-label" for="customCheck11">Price: high to low</label>
                                </div>
                            </div>
                        </div>

                    <!-- Sorting -->
                    <div class="shop-widget sort-by mb-50">
                        <h4 class="widget-title">Sort By</h4>
                        <select id="sortOrder">
                            <option value="newest">Newest</option>
                            <option value="sales">Best Sales</option>
                            <option value="price_low">Price: Low to High</option>
                            <option value="price_high">Price: High to Low</option>
                        </select>
                    </div>


                  <!-- Shop Widget -->
                  <div class="shop-widget best-seller mb-50">
                            <h4 class="widget-title">Best Seller</h4>
                            <div class="widget-desc">

                                <!-- Single Best Seller Products -->


                                <?php
               include ('config.php');
               $q="SELECT * FROM `product` WHERE action = 1 ORDER BY id DESC LIMIT 3";
               
               $r=mysqli_query($con,$q);

               
                if(mysqli_num_rows($r)>0)
                    {
                    while($row= mysqli_fetch_assoc($r))
                {    

               ?>
                                <div class="single-best-seller-product d-flex align-items-center">
                                    <div class="product-thumbnail">
                                    <a href="shop-details.php?id=<?php echo $row['id']; ?>"><img src="<?php echo 'admin_panel/'  . $row['p_img']  ?>" alt=""></a>
                                    </div>
                                    <div class="product-info">
                                    <a href="shop-details.php?id=<?php echo $row['id']; ?>"><?php echo $row['p_name']; ?></a>
                                        <p>&#8377;<?php echo $row['p_price']; ?></p>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php
                }}
                ?>


                               
                              

                            </div>
                        </div>

                </div>
            </div>
<!-- 
            <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="200ms">
                       
                        <div class="product-img">
                            <a href="shop-details.html"><img src="img/bg-img/10.jpg" alt=""></a>
                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                       
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.html">
                                <p>Cactus Flower</p>
                            </a>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>
   -->

            <!-- Products Area -->
            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop-products-area">
                    <div class="row" id="productContainer">
                        <!-- Products will be loaded here dynamically -->
                    <p></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
    <!-- ##### Shop Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php
    include 'footer.php';
?>


