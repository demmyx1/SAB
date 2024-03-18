<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = 'Vishalpraja9423@gmail.com'; // Replace with your email address
    $subject = 'New Message from Contact Form';
    $body = "Name: $name\nEmail: $email\nProject: $project\nMessage: $message";
    
    // You can add additional headers if needed, like From, Reply-To, etc.
    $headers = 'From: webmaster@harshrajengineeringsolutions.in'; // Replace with your email or domain
    
    // Send email
    $success = mail($to, $subject, $body, $headers);
    
    if ($success) {
        echo 'Message sent successfully!';
    } else {
        echo 'Oops! Something went wrong.';
    }
}
?>
