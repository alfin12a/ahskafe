<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['w3lName'];
    $email = $_POST['w3lSender'];
    $message = $_POST['w3lMessage'];

    $to = "your-email@example.com";  // Your email address
    $subject = "New Message from " . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header("Location: form_page.php?status=success");
        exit();
    } else {
        header("Location: form_page.php?status=error");
        exit();
    }
}
