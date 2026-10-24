<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../../");
$dotenv->load();

function send_contact_mail(string $from_name, string $from_email, string $subject, string $message): bool|string {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = trim($_ENV["EMAIL_HOST"], " '\"");
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = trim($_ENV["EMAIL_USERNAME"], " '\"");
    $mail->Password = trim($_ENV["EMAIL_PASSWORD"], " '\"");

    $mail->setFrom("noreply@johnnyconsole.com", "Contact Form Submission");
    $mail->addAddress("johnny.console@hotmail.com", "Johnny Console");
    $mail->addReplyTo($from_email, $from_name);
    $mail->isHTML(true);
    $mail->Subject = "[Contact Request] $subject";
    $mail->Body = "New Contact Request from <strong>$from_name</strong>:<br><p style='margin: 20px;'>$message</p>";

    if($mail->send()) return true;
    else return $mail->ErrorInfo;
}

function send_feedback_mail($name, $chapter, $feedback): bool|string {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = trim($_ENV["EMAIL_HOST"], " '\"");
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = trim($_ENV["EMAIL_USERNAME"], " '\"");
    $mail->Password = trim($_ENV["EMAIL_PASSWORD"], " '\"");

    $mail->setFrom("noreply@johnnyconsole.com", "Feedback Submission");
    $mail->addAddress("johnny.console@hotmail.com");
    $mail->isHTML(true);
    $mail->Subject = "[Cameroah Feedback] Feedback Left for $chapter";
    $mail->Body = "";

    if(!empty($name)){
        $mail->Body .= "<strong>$name</strong> has left feedback on <strong>$chapter</strong>:<br><p style='margin: 20px;'><em>$feedback</em></p>";
    }
    else {
        $mail->Body .= "New feedback on <strong>$chapter</strong>:<br><p style='margin: 20px;'><em>$feedback</em></p>";
    }

    if($mail->send()) return true;
    else return $mail->ErrorInfo;
}