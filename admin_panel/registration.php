<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
  <div class="page-wrapper">
    <div><?php include("header.php"); ?></div>

    <!-- Main container start -->
    <div class="main-container">

      <!-- Sidebar wrapper start -->
     <div> <?php include("side_bar.php"); ?></div>
     <!-- Sidebar wrapper end -->

      <!-- Content wrapper scroll start -->
      <div class="content-wrapper-scroll">
        <!-- Main header starts -->
        <div class="main-header d-flex align-items-center justify-content-between position-relative">
          <div class="d-flex align-items-center justify-content-center">
            <div class="page-icon">
              <i class="bi bi-person-add" style="color:green;"></i>
            </div>
            
            <div class="page-title d-none d-md-block" >
              <h5>🌿 Register</h5>
            </div>
          </div>
          <!-- Live updates start -->
         
          <!-- Live updates end -->
        </div>
        <!-- Main header ends -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
          <!-- Row start -->
         
<div class="register-container">
    

    <form action="register_process.php" onsubmit="return addLocationToForm();" method="POST" enctype="multipart/form-data">
        <input type="text" name="fullname" class="input-box" placeholder="Full Name" required>
        <input type="email" name="email" class="input-box" placeholder="Email" required>
        <input type="text" name="phone" class="input-box" placeholder="Phone numaber" required>
        <input type="text" name="address" class="input-box" placeholder="Address" required>
        <input type="text" name="destination" class="input-box" placeholder="Enter destination" required>
        <input type="password" name="password" class="input-box" placeholder="Password" required>
        <input type="password" name="confirm_password" class="input-box" placeholder="Confirm Password" required>
        <input type="file" name="img" class="input-box" required>
        
    <!-- Hidden inputs for latitude & longitude -->
    <input type="hidden" name="latitude" id="latitude">
    <input type="hidden" name="longitude" id="longitude">
    

        <button type="submit" class="btn">Register</button>
       
    </form>
</div>
         
          <!-- Row end -->
        </div>
        <!-- Content wrapper end -->
      </div>
      <!-- Content wrapper scroll end -->

      <!-- App Footer start -->
      <div class="app-footer">
        <span>© Bootstrap Gallery 2024</span>
      </div>
      <!-- App footer end -->
    </div>
    <!-- Main container end -->
  </div>
  <!-- Page wrapper end -->

  <!-- *************
      ************ Required JavaScript Files *************
    ************* -->
  <!-- Required jQuery first, then Bootstrap Bundle JS -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/moment.js"></script>

  <!-- *************
      ************ Vendor Js Files *************
    ************* -->

  <!-- Overlay Scroll JS -->
  <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
  <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

  <!-- News ticker -->
  <script src="assets/vendor/newsticker/newsTicker.min.js"></script>
  <script src="assets/vendor/newsticker/custom-newsTicker.js"></script>

  <!-- Apex Charts -->
  <script src="assets/vendor/apex/apexcharts.min.js"></script>
  <script src="assets/vendor/apex/custom/dash1/analytics.js"></script>
  <script src="assets/vendor/apex/custom/dash1/visitors.js"></script>
  <script src="assets/vendor/apex/custom/dash1/income.js"></script>
  <script src="assets/vendor/apex/custom/dash1/orders.js"></script>
  <script src="assets/vendor/apex/custom/dash1/sales.js"></script>
  <script src="assets/vendor/apex/custom/dash1/sparkline.js"></script>
  <script src="assets/vendor/apex/custom/dash1/conversion.js"></script>

  <!-- Main Js Required -->
  <script src="assets/js/main.js"></script>
  <script src="js/getLocation.js"></script>
</body>

</html>