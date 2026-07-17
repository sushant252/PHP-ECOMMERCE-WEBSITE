<?php
include 'config.php'; // Ensure this file contains a working DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $address = trim($_POST["address"]);
    $phone = trim($_POST["phone"]);
    $destination = trim($_POST["destination"]);
    
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);

    $latitude = $_POST['latitude'] ?? null;
    $longitude = $_POST['longitude'] ?? null;

    // Check if any field is empty
    if (empty($fullname) || empty($email) || empty($password) || empty($address) || empty($confirm_password)) {
        die("⚠️ All fields are required! <a href='register.php'>Go Back</a>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("⚠️ Invalid email format! <a href='register.php'>Go Back</a>");
    }

    if ($password !== $confirm_password) {
        die("⚠️ Passwords do not match! <a href='register.php'>Go Back</a>");
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Image upload handling

    $place = 'uploaded_image/';
    $image_name = basename($_FILES['img']['name']);

    $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $allowed_exts = ['jpg', 'jpeg', 'png', 'gif'];
    echo '<pre>'; print_r($_FILES); echo '</pre>';

    if (in_array($image_ext, $allowed_exts)) {
        $new_name = uniqid("img_", true) . '.' . $image_ext;
        $path = $place . $new_name;
    
        if (move_uploaded_file($_FILES['img']['tmp_name'], $path)) {
            // ✅ Image successfully uploaded

            // You can now insert $path into database
        } else {
            die("❌ Failed to upload image.");
        }
    } else {
        die("❌ Invalid file format. Allowed: jpg, jpeg, png, gif.");
    }

    // ✅ Insert into database
    if (!$con) {
        die("❌ Database connection error! Check config.php");
    }

    $stmt = $con->prepare("INSERT INTO admin (fullname, email, addr, password, phone, latitude, longitude, img, destination) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("❌ Error preparing statement: " . $con->error);
    }

    $stmt->bind_param("sssssddss", $fullname, $email, $address, $hashed_password, $phone, $latitude, $longitude, $image_name, $destination);

    if ($stmt->execute()) {
        header("Location: registration.php");
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    die("❌ Invalid request method.");
}
?>
