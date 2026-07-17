<?php
include 'config.php'; // Ensure this file contains a working DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $fullname = trim($_POST["fullname"]);
    $email = trim($_POST["email"]);
    $address = trim($_POST["address"]);
    $phone = trim($_POST["phone"]);
    
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);

    $latitude = isset($_POST['latitude']) ? $_POST['latitude'] : null;
    $longitude = isset($_POST['longitude']) ? $_POST['longitude'] : null;

    // Check if any field is empty
    if (empty($fullname) || empty($email) || empty($password) || empty($address) || empty($confirm_password)) {
        die("⚠️ All fields are required! <a href='register.php'>Go Back</a>");
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("⚠️ Invalid email format! <a href='register.php'>Go Back</a>");
    }

    // Check if passwords match
    if ($password !== $confirm_password) {
        die("⚠️ Passwords do not match! <a href='register.php'>Go Back</a>");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Ensure the database connection is established
    if (!$con) {
        die("❌ Database connection error! Check config.php");
    }

    // Insert user into the database (including lat/lng)
    $stmt = $con->prepare("INSERT INTO users (fullname, email, addr, password, phone, latitude, longitude) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("❌ Error preparing statement: " . $con->error);
    }

    $stmt->bind_param("sssssdd", $fullname, $email, $address, $hashed_password,$phone, $latitude, $longitude);

    if ($stmt->execute()) {
        // Redirect to login page
        header("Location: login.php");
        exit(); // Stop script execution after redirect
    } else {
        echo "❌ Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
} else {
    die("❌ Invalid request method.");
}
?>
