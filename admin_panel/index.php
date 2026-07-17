<?php

session_start();

// Check if user is logged in

if (!isset($_SESSION['admin_id'])) 
  {

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
              <i class="bi bi-house" style="color:green;"></i>
            </div>
            <div class="page-title d-none d-md-block" >
              <h5>Home</h5>
            </div>
          </div>
          <!-- Live updates start -->
         
          <!-- Live updates end -->
        </div>
        <!-- Main header ends -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
          <!-- Row start -->
         
          <!-- Row end -->

          <!-- Row start -->
          <div class="row gx-3">
            <div class="col-xl-6 col-sm-12 col-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Total sales</div>
                </div>
                <div class="card-body">
                  <!-- Row start -->
                  <div class="row gx-3 gy-3">
                    <div class="col-sm-6 col-12">
                      <div class="card light-shadow m-0">
                        <div class="d-flex align-items-center flex-row p-3">
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-12">
                    </div>
                    <div class="col-sm-6 col-12">
                      <div class="card light-shadow m-0">
                        <div class="d-flex align-items-center flex-row p-3">
                          <div class="me-2">
                            <div id="sparkline6"></div>
                          </div>
                          <div class="m-0">
                            <h3 class="d-flex align-items-center">
                              325
                              <span class="ms-2 text-red font-1x"><i class="bi bi-arrow-down-circle-fill"></i>
                                8%</span>
                            </h3>
                            <p class="m-0">This week</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-12">
                      <div class="card light-shadow m-0">
                        <div class="d-flex align-items-center flex-row p-3">
                          <div class="me-2">
                            <div id="sparkline7"></div>
                          </div>
                          <div class="m-0">
                            <h3 class="d-flex align-items-center">
                              $58k
                              <span class="ms-2 text-green font-1x"><i class="bi bi-arrow-up-circle-fill"></i>
                                9%</span>
                            </h3>
                            <p class="m-0">All</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                </div>
              </div>
            </div>
            <div class="col-xxl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Revenue</div>
                </div>
                <div class="card-body">
                  <!-- Row start -->
                  <div class="row gy-3">
                    <div class="col-xxl-12 col-12">
                      <div class="card light-shadow m-0">
                        <div class="d-flex flex-row p-3">
                          <div class="d-flex align-items-center">
                            <div class="box-light-red rounded-4 icon-box md">
                              <i class="bi bi-check-circle text-red font-1xx"></i>
                            </div>
                            <div class="ms-3 me-3">
                              <h3>$450</h3>
                              <p class="m-0">Revenue</p>
                            </div>
                          </div>
                          <div class="ms-auto" id="sparkline8"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xxl-12 col-12">
                      <div class="card light-shadow m-0">
                        <div class="d-flex flex-row p-3">
                          <div class="d-flex align-items-center">
                            <div class="box-light-blue rounded-4 icon-box md">
                              <i class="bi bi-check-circle text-blue font-1xx"></i>
                            </div>
                            <div class="ms-3 me-3">
                              <h3>$200</h3>
                              <p class="m-0">Expenses</p>
                            </div>
                          </div>
                          <div class="ms-auto" id="sparkline9"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Row end -->
                </div>
              </div>
            </div>
          
            
            
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
</body>

</html>