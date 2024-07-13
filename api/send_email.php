<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "salmanidanish202@gmail.com";
    $subject = $_POST['subject'];
    $message = "Year: " . $_POST['year'] . "\n" .
               "Maker: " . $_POST['maker'] . "\n" .
               "Model: " . $_POST['model'] . "\n" .
               "Parts: " . $_POST['parts'] . "\n" .
               "Comments: " . $_POST['comments'] . "\n\n" .
               $_POST['comments'];
    $name = $_POST['first-name'] . " " . $_POST['last-name'];
    $email = $_POST['email'];
    
    // Email headers
    $headers = "From: $name <$email>";
    
    // Send email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    echo "Error: Method not allowed.";
}
