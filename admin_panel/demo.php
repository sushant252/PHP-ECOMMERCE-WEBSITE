<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome Home</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
            padding: 50px;
        }
        .card {
            display: inline-block;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        a.logout {
            display: inline-block;
            margin-top: 20px;
            background: crimson;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        a.logout:hover {
            background: darkred;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['fullname']); ?>!</h2>
        <p>You are logged in with email: <strong><?php echo htmlspecialchars($_SESSION['email']); ?></strong></p>
        <a href="logout.php" class="logout">Logout</a>
    </div>
</body>
</html>
