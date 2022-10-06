<?php
$errorMsg = $successMsg = $name = $email = $mathTopic = $grade = $msg = $phone = '';

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $mathTopic = htmlspecialchars($_POST["mathTopic"]);
    $grade = htmlspecialchars($_POST["grade"]);
    $msg = htmlspecialchars($_POST["msg"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $subject = 'Free Class Request From ' . $name;

    $to = "info@mayyelites.com";
    $body = "";


    $body .= "From: " . $name . "\r\n";
    $body .= "Email: " . $email . "\r\n";
    $body .= "Phone: " . $phone . "\r\n";
    $body .= "Topic: " . $mathTopic . "\r\n";
    $body .= "Subject: " . $grade . "\r\n";
    $body .= "Message: " . $msg . "\r\n";

    $headers = "From: Mayy Elites Form <contact@mayyelites.com>" . "\r\n";
    $headers .= "Reply-To: " . $name . "<" . $email . ">" . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        $successMsg = "Thanks! Request send successfuly. We'll get back to you shortly.";
    } else {
        $errorMsg = "Oops! Something Went wrong. Please try again.";
    }
}
