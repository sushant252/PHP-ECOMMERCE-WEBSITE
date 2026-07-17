
<?php
session_start();
include 'config.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_id'])) {
    echo "Access Denied. Please login as admin.";
    exit;
}

// Fetch all orders
$orders = $con->query("SELECT * FROM orders ORDER BY order_date DESC");

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
              <i class="bi bi-house" style="color:green;"></i>
            </div>
            <div class="page-title d-none d-md-block" >
              <h5> Product List</h5>
            </div>
          </div>
          <!-- Live updates start -->
         
          <!-- Live updates end -->
        </div>
        <!-- Main header ends -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
        <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User ID</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php while ($order = $orders->fetch_assoc()): ?>
                <tr>
                    <td><?= $order['id'] ?></td>
                    <td><?= $order['user_id'] ?></td>
                    <td><?= $order['order_date'] ?></td>
                    <td><a href="order_details.php?order_id=<?= $order['id'] ?>" class="btn">View Details</a></td>
                </tr>
            <?php endwhile; ?>
        
        </tbody>
    </table>
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
  <!-- <script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
  <script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script> -->

  <!-- News ticker -->
  <!-- <script src="assets/vendor/newsticker/newsTicker.min.js"></script>
  <script src="assets/vendor/newsticker/custom-newsTicker.js"></script> -->

  <!-- Apex Charts -->
  

  <!-- data-table  -->
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
  <!--next and previous-->
  <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
  <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>
  <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.bootstrap5.js"></script>

  <!-- Main Js Required -->
  <script src="assets/js/main.js"></script>
<script>
  new DataTable('#example', {
    responsive: true
});
</script>

</body>

</html>