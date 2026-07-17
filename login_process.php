<?php
session_start();
include 'config.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Ensure fields are not empty
    if (empty($email) || empty($password)) {
        die("⚠️ Email and Password are required! <a href='login.php'>Go Back</a>");
    }

    // Prepare SQL statement to fetch user by email
    $stmt = $con->prepare("SELECT id, fullname, email, password FROM users WHERE email = ?");
    if (!$stmt) {
        die("❌ Error preparing statement: " . $con->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullname, $db_email, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["fullname"] = $fullname;
            $_SESSION["email"] = $db_email;
            
            // Redirect to home page after successful login
            header("Location: index.php");
            exit();
        } else {
            echo "❌ Incorrect password! <a href='login.php'>Try Again</a>";
        }
    } else {
        echo "❌ User not found! <a href='register.php'>Register here</a>";
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
} else {
    die("❌ Invalid request method.");
}
?>
