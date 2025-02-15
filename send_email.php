<!-- PHP Backend (send_email.php) -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "local.hive@outlook.com";
    $subject = "New Pre-registration from LocalHive";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thanks for pre-registering! We'll be in touch soon.</p>";
    } else {
        echo "<p>Oops! Something went wrong, please try again.</p>";
    }
}
?>