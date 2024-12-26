<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Tentukan email tujuan
    $to = 'syariefad7@gmail.com';

    // Header email
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Body email
    $body = "<h2>Message from: " . $email . "</h2>";
    $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
    $body .= "<p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        // Email berhasil dikirim
        echo "<div class='success-message'>Your message has been sent successfully!</div>";
    } else {
        // Gagal mengirim email
        echo "<div class='error-message'>Sorry, there was an error sending your message. Please try again later.</div>";
    }
} else {
    echo "<div class='error-message'>Invalid request method.</div>";
}
?>
