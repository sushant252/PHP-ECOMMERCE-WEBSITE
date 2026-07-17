<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

include("config.php");

// Get user ID from session
$admin_id = $_SESSION['admin_id'];

// Prepare statement safely (better to list fields explicitly)
$query = "SELECT fullname, email, phone, addr, img, destination FROM admin WHERE id = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $admin_id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($fullname, $email, $phone, $address, $img, $destination);
    $stmt->fetch();
} else {
    echo "User not found!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Profile</title>
</head>

<body>
  <div class="page-wrapper">
    
  <div><?php include("header.php"); ?></div>

    <!-- Main container start -->
    <div class="main-container">

      <!-- Sidebar wrapper start -->
      <div><?php include("side_bar.php"); ?></div>
      <!-- Sidebar wrapper end -->

      <!-- Content wrapper scroll start -->
      <div class="content-wrapper-scroll">

        <div class="main-header d-flex align-items-center justify-content-between position-relative">
          
        <div class="d-flex align-items-center justify-content-center">
            <div class="page-icon">
              <i class="bi bi-collection-fill" style="color:green;"></i>
            </div>
            <div class="page-title d-none d-md-block" >
              <h5>Your profile</h5>
            </div>
          </div>
          <!-- Live updates start -->
         
          <!-- Live updates end -->
        </div>

        <!-- Content wrapper start -->
        <div class="content-wrapper">
          <div class="register-container">
            <form action="update_profile.php" method="POST" enctype="multipart/form-data">
              <input type="text" name="fullname" class="input-box" placeholder="Full Name" value="<?php echo htmlspecialchars($fullname); ?>" required>
              <input type="email" name="email" class="input-box" placeholder="Email" value="<?php echo htmlspecialchars($email); ?>" required>
              <input type="text" name="phone" class="input-box" placeholder="Phone number" value="<?php echo htmlspecialchars($phone); ?>" required>
              <input type="text" name="address" class="input-box" placeholder="Address" value="<?php echo htmlspecialchars($address); ?>" required>
              <input type="text" name="destination" class="input-box" placeholder="Destination" value="<?php echo htmlspecialchars($destination); ?>" required>
              <input type="password" name="password" class="input-box" placeholder="New Password (Leave blank to keep old)">

              <!-- Profile Image Input -->
              <label for="img">Profile Image:</label>
              <input type="file" name="img" class="input-box">
              <?php if (!empty($img)): ?>
                <p>Current Image:</p>
                <img src="uploaded_image/<?php echo htmlspecialchars($img); ?>" width="100" alt="Current Profile Image">
              <?php endif; ?>

              <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">

              <button type="submit" class="btn">Update Profile</button>
            </form>
          </div>
        </div>
        <!-- Content wrapper end -->
      </div>
      <!-- Content wrapper scroll end -->

      <!-- App Footer start -->
      <div class="app-footer">
        <span>© Bootstrap Gallery 2024</span>
      </div>
    </div>
  </div>
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
