<?php
session_start();
// $_SESSION['uname'] = "";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>greenflycart</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/leaf2.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- AOS Animation -->
    <link rel="stylesheet" href="css\aos.css">
    
</head>
<style>
    .sent-message {
  display: none;
  color: #ffffff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}
</style>
<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf2.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Top Header Content -->
                            <div class="top-header-meta">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: greenflycart@gmail.com</span></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title=""><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +91 9310705662</span></a>
                            </div>

                            <!-- Top Header Content -->
                            <div class="top-header-meta d-flex">
                              
                              <?php
                                if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
                          
                                ?>
                                    <div class="login">
                                    <a class="btn btn-flat waves-effect show-sm-up" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span></a>
                                    </div>
                          <?php
                                } else {
                                    ?>
                                <!-- Login -->
                                <div class="login">
                                    <a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> <span>Login</span></a>
                                </div>

                          <?php
                                }
                                ?>
                          
                                <!-- Cart -->
                                <div class="cart">
                                    <a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity">(1)</span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ***** Navbar Area ***** -->
        <div class="alazea-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="alazeaNav">

                        <!-- Nav Brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/mylogo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Navbar Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="shop.php">Shop</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop.php">Shop</a></li>
                                                    <li><a href="shop-details.php">Shop Details</a></li>
                                                    <li><a href="cart.php">Shopping Cart</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="portfolio.php">Portfolio</a>
                                                <ul class="dropdown">
                                                    <li><a href="portfolio.php">Portfolio</a></li>
                                                    <li><a href="single-portfolio.php">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.php">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog.php">Blog</a></li>
                                                    <li><a href="single-post.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div id="searchIcon">
                                    <a href="#productContainer" ><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Navbar End -->
                        </div>
                    </nav>

                    <!-- Search Form -->
                    <div class="search-form">

                        <form action="#" method="get" >
                        
                        <input type="text" id="productSearch" placeholder="Search products..." class="form-control">
                        
                            <button type="submit" class="d-none"></button>
                        </form>
                        <!-- Close Icon -->
                        <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <!-- ##### Header Area End ##### -->
