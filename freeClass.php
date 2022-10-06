<?php
if (isset($_POST['action'])) {
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
    $body .= "Phone: " . $mathTopic . "\r\n";
    $body .= "Subject: " . $grade . "\r\n";
    $body .= "Message: " . $msg . "\r\n";

    $headers = "From: Mayy Elites Form <contact@mayyelites.com>" . "\r\n";
    $headers .= "Reply-To: " . $name . "<" . $email . ">" . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: thanks.php");
    } else {
        header("Location: error.php");
    }
}
