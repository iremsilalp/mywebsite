<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Mail recipient (your email address)
    $to = 'iremsilalp@gmail.com'; // Replace with your own email address
    
    // Email subject
    $email_subject = "New Contact Form Submission: $subject";
    
    // Compose the email message
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Phone: $phone\n";
    $email_body .= "Message:\n$message\n";
    
    // Set headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    
    // Send the email
    mail($to, $email_subject, $email_body, $headers);
    
    // Redirect after submission (optional)
    header('Location: thank-you.html'); // Replace with your thank you page URL
    exit;
}
?>