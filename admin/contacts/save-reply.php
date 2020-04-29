<?php
session_start();
require '../../config/utils.php';
checkAdminLoggedIn();
// Require libraries PHP Mailer
require './lib/PHPMailer/src/Exception.php';
require './lib/PHPMailer/src/PHPMailer.php';
require './lib/PHPMailer/src/SMTP.php';
// Get infomation
$email = $_POST['email'];
$message = $_POST['message'];
$id = $_POST['id'];
$reply_by = $_POST['reply_by'];

$listname = explode(",", $email);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->CharSet = 'utf8';                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'thietcv@gmail.com';                     // SMTP username
    $mail->Password   = 'taokhongbiet';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('thietcv@gmail.com', 'Doan xem');
    foreach ($listname as $nameEmail) {
        $mail->addAddress($nameEmail);
    }
    $mail->addReplyTo('thietcv@gmail.com', 'Doan xem');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Body    = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    # Update database
    $updateContactQuery = "update contact set
                                status = '1',
                                reply_by = '$reply_by',
                                reply_for = '$id'
                            where id = '$id'";
    queryExecute($updateContactQuery, false);
    header("location: " . ADMIN_URL . "contacts");
    die;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
