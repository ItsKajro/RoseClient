<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Set the recipient email address
    $to = 'support@example.com';
    
    // Set the email subject
    $subject = 'New Support Message from ' . $name;
    
    // Create the email body
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
    
    // Set the email headers
    $headers = "From: $email";
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your message. We will get back to you shortly.';
    } else {
        echo 'Sorry, an error occurred while sending your message. Please try again later.';
    }
} else {
    echo 'Invalid request.';
}
?>
