<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $projectType = $_POST['project-type'];
    $message = $_POST['msg'];

    $to = "usgraphics04@gmail.com";
    $subject = "New project inquiry: $projectType";
    $body = "Name: $name\nEmail: $email\nProject Type: $projectType\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        // Email sent successfully
        echo "<script>alert('Message sent successfully.');</script>";
    } else {
        // Failed to send email
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
?>
