<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['contact-name'];
    $email = $_POST['contact-email'];
    $sub = $_POST['contact-subject'];
    $msg = $_POST['contact-msg'];

    $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$sub','$msg')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        mysqli_close($con);
        header("Location: http://localhost/plants/greenyflycart/contact.php");
        exit; // Ensure script stops after redirect
    } else {
        echo "Failed to insert data.";
    }
} 
else {
    echo "All fields are required.";
}
?>
