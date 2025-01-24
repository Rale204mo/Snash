<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where the form submissions will be sent
    $to = " snashdahfx018@gmail.com";
    $subject = "New Message from Contact Form";
    $headers = "From: $email";

    // Message body
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We will get back to you shortly.";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid Request.";
}
?>
