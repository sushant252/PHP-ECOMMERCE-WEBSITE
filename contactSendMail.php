<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$mail = new PHPMailer(true);

// new

$statusMsg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Validate input
    if (empty($name) || empty($email) || empty($subject) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("Invalid input. Please check your details.");
    }

    try {
        // SMTP Config
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'sk3986599@gmail.com'; 
        $mail->Password   = 'bcnwakxjfcnrqgyv'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // ✅ Email Headers
        $mail->setFrom($email, $name);
        $mail->addReplyTo($email, $name);
        $mail->addAddress('sk3986599@gmail.com'); 

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = "greenyflycart: $subject";
        $mail->Body    = "<p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong> $message</p>";

        // ✅ Check if mail is sent
        if ($mail->send()) {
            // SUCCESS
            header("Location: contact.php?success=1");
            exit();
        } else {
            // FAILURE
            header("Location: contact.php?success=0");
            exit();
        }

    } catch (Exception $e) {
        // Optional: Error redirect on exception
        header("Location: contact.php?success=0");
        exit();
    }

}
?>
