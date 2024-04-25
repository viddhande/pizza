<?php
session_start();

include 'register.php';

// Include the configuration file to establish a database connection
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the token is present in the URL
    if (isset($_GET['token'])) {
        // Get the token from the URL
        $token = $_GET['token'];

        // Check if the token matches the one stored in the session
        if (isset($_SESSION['verification_token']) && $_SESSION['verification_token'] === $token) {
            // Token matches, verification successful
            // Proceed with database insertion (e.g., insert user details into the database)
            
            // Extract user details from session or form data
            $username = $_SESSION['username'];
            $email = $_SESSION['email'];

            // Prepare and execute SQL query to insert user details into the database
            $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

            if ($con->query($sql) === TRUE) {
                // Database insertion successful
                echo "User registration successful!";
            } else {
                // Database insertion failed
                echo "Error: " . $sql . "<br>" . $con->error;
            }

            // Remove the verification token from the session
            unset($_SESSION['verification_token']);
            // Remove other session variables related to registration
            unset($_SESSION['username']);
            unset($_SESSION['email']);
        } else {
            // Token does not match, verification failed
            echo "Verification failed. Invalid or expired token.";
        }
    } else {
        // Token is not present in the URL
        echo "Verification failed. Token not provided.";
    }
}
?>
