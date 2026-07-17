<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>greenflycart</title>
  <link rel="canonical" href="https://www.bootstrap.gallery/" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon1.png">

  <!-- Bootstrap font icons css -->
  <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="assets/css/main.min.css" />

  <!-- *************
      ************ Vendor Css Files *************
    ************ -->

  <!-- Scrollbar CSS -->
  <link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  
  <!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="assets/js/script.js"></script>

<!--dataTables css-->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.css">

</head>
<style>
  
  .register-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 100%;
            width: 100%;
            border-left: 5px solid #4CAF50; /* Green plant border */
            transition: 0.3s ease-in-out;
            overflow: hidden;
        }

        h2 {
            color: #2e7d32; /* Dark green heading */
            font-size: 24px;
            margin-bottom: 15px;
        }

        .input-box {
            width: 100%;
            padding-top: 15px;
            padding-bottom: 15px;
            margin: 10px 0;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s;
        }

        .input-box:focus {
            outline: none;
            border-color: #388E3C;
            box-shadow: 0 0 5px rgba(56, 142, 60, 0.5);
        }

        .btn {
            background: #4CAF50;
            color: white;
            border: none;
            padding: 12px 15px;
            width: 50%;
            cursor: pointer;
            font-size: 18px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background:rgb(155, 225, 158); /* Darker green */
        }

        .link {
            display: block;
            margin-top: 10px;
            color: #2e7d32;
            text-decoration: none;
            font-size: 14px;
        }

        .link:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media screen and (max-width: 480px) {
            body {
                padding: 10px;
            }
            .register-container {
                width: 100%;
                padding: 20px;
                box-shadow: none;
            }
            h2 {
                font-size: 20px;
            }
            .input-box {
                font-size: 14px;
            }
            .btn {
                font-size: 16px;
            }
        }
</style>
<body>
  <!-- Loading wrapper start -->
<!-- preloader -->


<div class="preloader d-flex align-items-center justify-content-center" id="loading-wrapper">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="assets\images\favicon1.png" alt="">
        </div>
</div> 

<!-- Page header starts -->
<div class="page-header">
      <!-- Sidebar brand starts -->
      <div class="brand">
        <a href="index.php" class="logo">
          <img src="assets/images/mylogo.png" class="d-none d-md-block me-4" alt="Bloom Admin Dashboard" />
          <img src="assets/images/mylogo.png" class="d-block d-md-none me-4" alt="Bloom Admin Dashboard" />
        </a>
      </div>
      <!-- Sidebar brand ends -->

      

      <!-- Header actions ccontainer start -->
      <div class="header-actions-container"> 
        
        <!-- Header actions start -->
        <!-- <div class="header-actions d-xl-flex d-lg-none gap-4">
          <div class="dropdown">
            <a class="dropdown-toggle" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-envelope-open fs-5 lh-1 " style="color:white;"></i>
              <span class="count-label"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-lg ">
              <div class="dropdown-item">
                <div class="d-flex py-2 border-bottom">
                  <img src="assets/images/user.png" class="img-3x me-3 rounded-3" alt="Admin Dashboards" />
                  <div class="m-0">
                    <h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
                    <p class="mb-1">Membership has been ended.</p>
                    <p class="small m-0 text-secondary">Today, 07:30pm</p>
                  </div>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="d-flex py-2 border-bottom">
                  <img src="assets/images/user2.png" class="img-3x me-3 rounded-3" alt="Admin Dashboards" />
                  <div class="m-0">
                    <h6 class="mb-1 fw-semibold">Benjamin Michiels</h6>
                    <p class="mb-1">Congratulate, James for new job.</p>
                    <p class="small m-0 text-secondary">Today, 08:00pm</p>
                  </div>
                </div>
              </div>
              <div class="dropdown-item">
                <div class="d-flex py-2">
                  <img src="assets/images/user1.png" class="img-3x me-3 rounded-3" alt="Admin Dashboards" />
                  <div class="m-0">
                    <h6 class="mb-1 fw-semibold">Jehovah Roy</h6>
                    <p class="mb-1">Lewis added new schedule release.</p>
                    <p class="small m-0 text-secondary">Today, 09:30pm</p>
                  </div>
                </div>
              </div>
              <div class="d-grid mx-3 my-1">
                <a href="javascript:void(0)" class="btn btn-primary">View all</a>
              </div>
            </div>
          </div>
          <a href="account-settings.php" data-bs-toggle="tooltip" data-bs-placement="bottom"
            data-bs-custom-class="custom-tooltip-blue" data-bs-title="Settings">
            <i class="bi bi-gear fs-5 " style="color:white;"></i>
          </a>
        </div> -->
        <!-- Header actions start -->

        <!-- Header profile start -->
        <div class="header-profile d-flex align-items-center">
          <div class="dropdown">
            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
            
            <?php

             if (isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id'])) {
                    
                 ?>

            <span class="user-name d-none d-md-block "><?php echo $_SESSION['fullname']; ?></span>
            <?php
              } 
                            
                                ?>
            <span class="avatar">
                <img src="assets/images/user7.png" alt="User Avatar" />
                <span class="status online"></span>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
              <div class="header-profile-actions">
                <a href="profile.php?id=<?php echo $_SESSION['admin_id']; ?>">Profile</a>
                <a href="account-settings.php">Settings</a>
                <a href="logout.php" class="logout">Logout</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Header profile end -->
       

      </div>
      <div class="toggle-sidebar " id="toggle-sidebar">
        <i class="bi bi-list"></i>
      </div>
      <!-- Header actions ccontainer end -->
    </div>
    <!-- Page header ends -->