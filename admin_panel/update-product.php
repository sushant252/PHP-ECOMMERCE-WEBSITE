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
              <i class="bi bi-house" style="color:green;"></i>
            </div>
            <div class="page-title d-none d-md-block" >
              <h5>Add Product</h5>
            </div>
          </div>
          <!-- Live updates start -->
         
          <!-- Live updates end -->
        </div>
        <!-- Main header ends -->

        <!-- Content wrapper start -->
        <div class="content-wrapper">
                <!-- Row start -->
            <?php
              include('config.php');
              $id=$_GET['id'];
              $sql ="SELECT * FROM product WHERE id = '{$id}' ";
              $r = mysqli_query($con,$sql);  
              if(mysqli_num_rows($r)){

              while($row= mysqli_fetch_assoc($r))
              {
            ?>
                <div class="row gx-3">
                  <!-- Hidden input to store product ID -->
        <input type="hidden" id="id" value="<?php echo $row['id']; ?>">

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Product Name</label>
                          <input type="text" id="name" class="form-control" placeholder="Enter"
                            fdprocessedid="2rwy1k" value="<?php echo $row['p_name'] ?>" />
                        </div>
                      </div>
                    </div>
                  </div>





                  <div class="col-lg-12 col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Product category</label>
                          <select class="form-select" aria-label="Default select example" id="type"
                            fdprocessedid="vr3qzx" >
                            <option selected=""><?php echo $row['p_cat'] ?></option>
                            <option value="plants">plants</option>
                            <option value="Flower">Flower</option>
                            <option value="others">Others</option>
                          </select>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Price</label>
                          <input type="text" id="price" class="form-control" placeholder="Enter price"
                            fdprocessedid="2rwy1k" value="<?php echo $row['p_price'] ?>" />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12 col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="m-0">
                          <label class="form-label">Description</label>
                          <textarea id="des" class="form-control" rows="3"><?php echo ($row['p_description']); ?></textarea>
                        </div> 
                      </div>
                    </div>
                  </div>

                  <!-- Product Image Upload -->
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <label class="form-label">Image</label>
              <input type="file" id="img" class="form-control" />
              <br>
              <!-- Display existing image -->
              <img src="<?php echo $row['p_img']; ?>" alt="Product Image" width="150" height="150" id="preview">
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
                <?php
              }}
                ?>
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
          formData.append('id', $('#id').val());
          formData.append('name', $('#name').val());
          formData.append('des', $('#des').val());
          formData.append('price', $('#price').val());
          formData.append('type', $('#type').val());
          formData.append('img', $('#img')[0].files[0]);

          $.ajax({
            url: "updateproduct-sendData.php",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: () => {
              // $('#res').removeClass('success error').html('Sending data...').show();
            },
            success: (data) => {
              alert(data);
              window.location.href="product-list.php";
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