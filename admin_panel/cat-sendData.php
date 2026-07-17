<?php
include('config.php');
if ($_SERVER['REQUEST_METHOD'] === "POST") 

{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $des = mysqli_real_escape_string($con, $_POST['des']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
   
    $place = 'uploaded_image/';
    $path = $place . basename($_FILES['img']['name']);
    // echo $name . $img . $des . $type;
    $imgCheck = move_uploaded_file($_FILES['img']['tmp_name'], $path);
   
    if ($imgCheck) {
            $query = mysqli_query($con, "INSERT INTO `product`(`p_name`, `p_cat`, `P_description`, `p_img`,`p_price`) VALUES ('$name','$type','$des','$path','$price')");

            if ($query) {
                echo "success";
            } else {
                echo "failed";
            }
        
    } else {
        echo "img failde";
    }
    // $path = $place . basename($_FILES['']['name']);
}
