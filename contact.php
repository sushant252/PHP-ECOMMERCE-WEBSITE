<?php
    include 'header.php';
?>

<!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(img/bg-img/24.jpg);">
            <h2>Contact US</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Contact Area Info Start ##### -->
    <div class="contact-area-info section-padding-0-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Contact Thumbnail -->
                <div class="col-12 col-md-6">
                    <div class="contact--thumbnail">
                        <img src="img/bg-img/natur1.jpg" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-5">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h2>CONTACT US</h2>
                        <p>We are improving our services to serve you better.</p>
                    </div>
                    <!-- Contact Information -->
                     <?php
                        include('config.php');
                        $sql="SELECT * FROM `contact_us`  ORDER BY id DESC LIMIT 1";
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
    <!-- ##### Contact Area Info End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-5">
                <!-- Section Heading -->
                <div class="section-heading">
                    <h2>GET IN TOUCH</h2>
                    <p>Send us a message, we will call back later</p>
                </div>

                <!-- Contact Form Area -->
                <div class="contact-form-area mb-100">
                <form action="contactSendMail.php" method="post">

<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <input type="text" class="form-control" id="contact-name" name="name" placeholder="Your Name" required>
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <input type="email" class="form-control" id="contact-email" name="email" placeholder="Your Email" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Subject" required>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <textarea class="form-control" id="message" name="message" cols="30" rows="10" placeholder="Message" required></textarea>
        </div>
    </div>
    <div class="col-12">
    <?php if (isset($_GET['success'])): ?>
    <?php if ($_GET['success'] == 1): ?>
        <div style="background: #d4edda; color: #155724; padding: 10px; border: 1px solid #c3e6cb; margin: 10px 0;">
✅ Thank you! Your message has been sent.
</div>
<?php else: ?>
<div style="background: #f8d7da; color: #721c24; padding: 10px; border: 1px solid #f5c6cb; margin: 10px 0;">
❌ Sorry, something went wrong. Please try again.
</div>
<?php endif; ?>
<?php endif; ?>
    <button type="submit"  class="btn alazea-btn mt-15">Send Message</button>
    </div>
</div>
</form>

                </div>
            </div>

            <div class="col-12 col-lg-6">
                <!-- Google Maps -->
               <!-- Google Maps -->
               <div class="map-area mb-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3501.084706050104!2d77.34909707550166!3d28.65718227565127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjjCsDM5JzI1LjkiTiA3N8KwMjEnMDYuMCJF!5e0!3m2!1sen!2sin!4v1745089717943!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <?php
    include 'footer.php';
?>