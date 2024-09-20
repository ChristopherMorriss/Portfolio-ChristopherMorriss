<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // Ensure the path is correct

$mail = new PHPMailer(true); // Passing `true` enables exceptions

try {
    $mail->isSMTP();
    $mail->Host = 'live.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'api'; // Your Mailtrap username
    $mail->Password = '7970cd034cd04d999ad53d3457ee7384'; // Your Mailtrap password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    $mail->setFrom('portfolio@demomailtrap.com', 'First Last');
    $mail->addReplyTo('chrismorriss711@gmail.com', 'John Doe'); // 
    $mail->addAddress('chrismorriss711@gmail.com', 'Recipient Name'); // Add a recipient

    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "PHPMailer SMTP test";
    $mail->Body = "<h1>Send HTML Email using SMTP in PHP</h1><p>This is a test email I'm sending using SMTP mail server with PHPMailer.</p>"; // Example HTML body
    $mail->AltBody = 'This is the plain text version of the email content';

    if(!$mail->send()){
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<?php /*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust based on your installation method

$mail = new PHPMailer(true); // Enable exceptions

// SMTP Configuration
$mail->isSMTP();
$mail->Host = 'live.smtp.mailtrap.io'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'api'; // Your Mailtrap username
$mail->Password = 'dac2caad40ee1d406044d34d3c225b87'; // Your Mailtrap password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Sender and recipient settings
$mail->setFrom('mailtrap@christopher-morriss.netmatters-scs.co.uk', 'Magic Elves');
$mail->addAddress('chrismorriss711@gmail.com', 'Mailtrap Inbox');

// Sending plain text email
$mail->isHTML(false); // Set email format to plain text
$mail->Subject = 'Your Subject Here';
$mail->Body    = 'This is the plain text message body';

// Send the email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

*/
?>