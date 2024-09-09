<?php
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'mail.ecomhike.com';  // SMTP server address
        $mail->SMTPAuth   = true;
        $mail->Username   = 'support@ecomhike.com'; // SMTP username
        $mail->Password   = 'Ec0m!:)klevr'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL/TLS
        $mail->Port       = 465; // SMTP port

        // Recipients
        $mail->setFrom('support@ecomhike.com', 'Ecom Hike');
        $mail->addAddress('support@ecomhike.com'); // Recipient email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Lead';
        $mail->Body    = "<h1>New Form Submission</h1>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Phone:</strong> $phone</p>
                          <p><strong>Message:</strong><br> $message</p>";

        $mail->send();
        // Redirect to thank you page
        header('Location: /thankyou');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
