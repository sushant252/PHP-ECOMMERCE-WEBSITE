<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $des = mysqli_real_escape_string($con, $_POST['des']);
    $type = mysqli_real_escape_string($con, $_POST['type']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $place = 'uploaded_image/';
    $imgName = basename($_FILES['img']['name']);
    $path = $place . $imgName;

    if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
        // Use the correct variable name for the image path
        $query = "UPDATE `product` SET 
                  `p_name`='{$name}', 
                  `p_cat`='{$type}', 
                  `p_description`='{$des}', 
                  `p_img`='{$path}', 
                  `p_price`='{$price}' 
                  WHERE `id`='{$id}'";

        $result = mysqli_query($con, $query);

        if ($result) {
            echo "success";
        } else {
            echo "failed: " . mysqli_error($con);
        }
    } else {
        echo "Image upload failed";
    }
}
?>
