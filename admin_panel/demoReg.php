<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
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
              <i class="bi bi-collection-fill" style="color:green;"></i>
            </div>
            <div class="page-title d-none d-md-block" >
              <h5>Add User</h5>
            </div>
          </div>
          <!-- Live updates start -->
         
          <!-- Live updates end -->
        </div>
        <!-- Main header ends -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
                <!-- Row start -->
                <div class="row gx-3">
                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Name</label>
                          <input type="text" id="name" class="form-control" placeholder="Name"
                            fdprocessedid="2rwy1k" />
                        </div>
                      </div>
                    </div>
                  </div>





                

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">email</label>
                          <input type="email" id="email" class="form-control" placeholder="Enter email"
                             />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Destination</label>
                          <input type="text" id="Destination" class="form-control" placeholder="Enter Destination"
                             />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Destination</label>
                          <textarea id="des" class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Image</label>
                          <input type="file" id="img" class="form-control" rows="3">
                        </div>
                      </div>
                    </div>
                  </div>


                  <div class="col-xxl-12 col-sm-12 col-12 ">
                    <div class="card">
                      <div class="card-body">
                        <div class="input-group">
                          <button id="btn" class="btn bg-success" type="button" style="color:white"> 
                            Save
                          </button>
                          <!-- <input type="text" class="form-control" placeholder="" fdprocessedid="86gbe" /> -->

                        </div>
                      </div>
                    </div>
                  </div>




                  <!-- Row end -->
                </div>
                <!-- Content wrapper end -->
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

  <script>
      $(document).ready(() => {
        let btn = $('#btn');
        btn.click(() => {
          var formData = new FormData();
          formData.append('name', $('#name').val());
          formData.append('des', $('#des').val());
          formData.append('email', $('#email').val());
          formData.append('destination', $('#destination').val());
          formData.append('password', $('#password').val());
          
          formData.append('img', $('#img')[0].files[0]);

          $.ajax({
            url: "product-sendData.php",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: () => {
              // $('#res').removeClass('success error').html('Sending data...').show();
            },
            success: (data) => {
              alert(data);
              window.location.href="add-product.php";
            },
            error: () => {
              alert('File upload failed.');
            }
          });
        });
      });
    </script>


</body>

</html>