<?php

$recipientEmail = "jayden2008.niepce@gmail.com";
$subject = "New message via jaydie2008.nl";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name = htmlspecialchars(strip_tags(trim($_POST["naam"] ?? "")));
$email = htmlspecialchars(strip_tags(trim($_POST["email"] ?? "")));
$message = htmlspecialchars(strip_tags(trim($_POST["bericht"] ?? "")));

$errors = [];

if (empty($name)) {
    $errors[] = "Please enter your name.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
}

if (empty($message)) {
    $errors[] = "Please write a message.";
}

if (!empty($errors)) {
    header("Location: contact.php?status=error&errors=" . urlencode(implode("|", $errors)));
    exit;
}

$emailBody = "
New message via your portfolio website
========================================

Name:   $name
Email:   $email

Message:
$message

========================================
Sent via jaydie2008.nl
";

$headers  = "From: noreply@jaydie2008.nl\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($recipientEmail, $subject, $emailBody, $headers);

if ($sent) {
    header("Location: contact.php?status=sent");
} else {
    header("Location: contact.php?status=error&errors=" . urlencode("The email could not be sent. Please try again later."));
}

exit;
?>