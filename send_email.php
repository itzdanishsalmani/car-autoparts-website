<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "salmanidanish202@gmail.com";
    $subject = $_POST['Subject'];
    $message = $_POST['Message'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    
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
?>
