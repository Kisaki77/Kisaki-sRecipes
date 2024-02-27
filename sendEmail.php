<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Your Gmail credentials

require 'C:\xampp\htdocs\Projects\Kisaki-FoodRecipes-main\PHPMailer-master\src\Exception.php';

/* The main PHPMailer class. */
require 'C:\xampp\htdocs\Projects\Kisaki-FoodRecipes-main\PHPMailer-master\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require  'C:\xampp\htdocs\Projects\Kisaki-FoodRecipes-main\PHPMailer-master\src\SMTP.php';
// Recipient email

$email = $_POST['contactEmail'];
// Email content
$subject = 'Subject';
$message = 'Your email content goes here.';

// Create PHPMailer object
$mail = new PHPMailer(true);
    $name = $_POST["contactName"];
   
    $subject = $_POST["contactSubject"];
    $message = $_POST["contactMessage"];
try {
    // Server settings
    $emailTo = 'nobuhlemlahleki@gmail.com';
    $emailFrom =$email;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nobuhlemlahleki@gmail.com';
    $mail->Password   = 'jcob fytq hkhg xpac';
    $mail->SMTPSecure = 'tls';  // Use 'tls' or 'ssl'
    $mail->Port       = 587;    // Use 587 for 'tls' and 465 for 'ssl'

    // Recipients
    $mail->setFrom($emailFrom);
    $mail->addAddress($emailTo);

    // Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = "Name: $name<br><br>" . $message;

    // Send email
    if ($mail->send()) {
        // Set success session variable
        $_SESSION['success'] = true;
    } else {
        $_SESSION['success'] = false;
        // Print detailed error information for debugging
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} catch (Exception $e) {
    $_SESSION['success'] = false;
    // Print detailed exception information for debugging
    echo 'Exception: ' . $e->getMessage();
}

// Redirect back to the previous page
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();

echo $_SESSION['success']
?>
