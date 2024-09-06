<?php
$to = "manojreddy2593@gmail.com";
$subject = "Test Mail";
$message = "This is a test mail.";
$headers = "From: no-reply@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent successfully.";
} else {
    echo "Failed to send mail.";
}
?>
