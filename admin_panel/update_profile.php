<?php
session_start();
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id     = $_POST['user_id'];
    $fullname    = $_POST['fullname'];
    $email       = $_POST['email'];
    $phone       = $_POST['phone'];
    $address     = $_POST['address'];
    $destination = $_POST['destination'];
    $password    = $_POST['password'];

    // Handle image upload
    $img = '';
    $upload_img = false;
    if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
        $img_name = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $upload_dir = "uploaded_image/";

        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $img_path = $upload_dir . basename($img_name);
        if (move_uploaded_file($img_tmp, $img_path)) {
            $img = $img_name;
            $upload_img = true;
        }
    }

    // Update query based on whether password and/or image are being updated
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        if ($upload_img) {
            $query = "UPDATE admin SET fullname=?, email=?, phone=?, addr=?, destination=?, img=?, password=? WHERE id=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("sssssssi", $fullname, $email, $phone, $address, $destination, $img, $hashed_password, $user_id);
        } else {
            $query = "UPDATE admin SET fullname=?, email=?, phone=?, addr=?, destination=?, password=? WHERE id=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("ssssssi", $fullname, $email, $phone, $address, $destination, $hashed_password, $user_id);
        }

    } else {
        if ($upload_img) {
            $query = "UPDATE admin SET fullname=?, email=?, phone=?, addr=?, destination=?, img=? WHERE id=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("ssssssi", $fullname, $email, $phone, $address, $destination, $img, $user_id);
        } else {
            $query = "UPDATE admin SET fullname=?, email=?, phone=?, addr=?, destination=? WHERE id=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("sssssi", $fullname, $email, $phone, $address, $destination, $user_id);
        }
    }

    if ($stmt->execute()) {
        header("Location: profile.php?status=success");
        exit();
    } else {
        echo "Update failed: " . $stmt->error;
    }
} else {
    echo "Invalid request.";
}
?>
