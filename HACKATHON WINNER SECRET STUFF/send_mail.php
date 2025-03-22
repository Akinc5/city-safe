<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $body = "Name: $firstName $lastName\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: no-reply@yourwebsite.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
}
?>
