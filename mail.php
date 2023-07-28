<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ahteshamulhaq727@gmail.com"; // Replace this with your email address
    $subject = "Contact Us Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for your message. We will get back to you shortly.";
    } else {
        echo "There was a problem sending the email. Please try again later.";
    }
}
?>
