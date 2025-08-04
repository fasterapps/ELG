<?php
// Prevent direct access
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.html");
    exit();
}

// Get form data
$name = isset($_POST['Contact-Us-Name']) ? trim($_POST['Contact-Us-Name']) : '';
$email = isset($_POST['Contact-Us-Email']) ? trim($_POST['Contact-Us-Email']) : '';
$message = isset($_POST['Contact-Message']) ? trim($_POST['Contact-Message']) : '';

// Validate inputs
$errors = [];
if (empty($name)) {
    $errors[] = "Name is required";
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Valid email is required";
}
if (empty($message)) {
    $errors[] = "Message is required";
}

// If there are errors, redirect back with error message
if (!empty($errors)) {
    header("Location: index.html?error=1#contact");
    exit();
}

// Email configuration
$to = "connect@earlylearningguide.com";
$subject = "New Contact Form Submission from ELG Website";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Email body
$email_body = "You have received a new message from the ELG website contact form.\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n\n";
$email_body .= "Message:\n$message\n";

// Send email
$mail_sent = mail($to, $subject, $email_body, $headers);

// Redirect based on success
if ($mail_sent) {
    header("Location: index.html?success=1#contact");
} else {
    header("Location: index.html?error=1#contact");
}
exit();
?>