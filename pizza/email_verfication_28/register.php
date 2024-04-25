<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Set the email in the session
    $_SESSION['email'] = $email;

    // Generate a random verification token
    $verification_token = md5(uniqid(rand(), true));

    // Store the verification token in the session
    $_SESSION['verification_token'] = $verification_token;

    // Send verification email
    $to_email = $email;
    $subject = "Email Verification";
    $message = "Click the following link to verify your email: http://localhost/mail_php/verify.php/?token=$verification_token";
    $headers = "From: shruti.bravkar21@pccoepune.org" . "\r\n" .
               
               "X-Mailer: PHP/" . phpversion();

    if (mail($to_email, $subject, $message, $headers)) {
        // Email sent successfully
        // Proceed with other registration steps or display a success message
?>
        <script>alert("Verification email sent successfully. Please check your email.");</script>
<?php
    } else {
        // Email sending failed
        // Handle the error appropriately
?>
        <script>alert("Failed to send verification email. Please try again later.");</script>
<?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
