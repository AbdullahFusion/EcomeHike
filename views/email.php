<?php
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $Email = $_POST['Email'];
   
   

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'mail.ecomhike.com';  // SMTP server address
        $mail->SMTPAuth   = true;
        $mail->Username   = 'info@ecomhike.com'; // SMTP username
        $mail->Password   = 'hike!:)!=ec0m'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL/TLS
        $mail->Port       = 465; // SMTP port

        // Recipients
        $mail->setFrom('info@ecomhike.com', 'Ecom Hike');
        $mail->addAddress('info@ecomhike.com'); // Recipient email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Lead';
        $mail->Body    = "<h1>New Form Submission</h1>
                          
                          <p><strong>Email:</strong> $Email</p>
                          
                        "
                          ;

        $mail->send();
        // Redirect to thank you page
        header('Location: /thankyou');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
