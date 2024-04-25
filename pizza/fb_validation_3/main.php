<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            max-width: 100%;
        }

        .container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        button[type="submit"] {
            background-color: #1877f2;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #166fe5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Facebook Registration</h2>
        <form id="registrationForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
                <span id="firstNameError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
                <span id="lastNameError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <span id="emailError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span id="passwordError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <span id="confirmPasswordError" class="error"></span>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>

    <script>
        function validateForm() {
            var firstName = document.getElementById("firstName").value;
            var lastName = document.getElementById("lastName").value;
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            // Reset error messages
            document.getElementById("firstNameError").innerText = "";
            document.getElementById("lastNameError").innerText = "";
            document.getElementById("emailError").innerText = "";
            document.getElementById("passwordError").innerText = "";
            document.getElementById("confirmPasswordError").innerText = "";

            var isValid = true;

            // Validate first name
            if (firstName.trim() === "") {
                document.getElementById("firstNameError").innerText = "First name is required";
                isValid = false;
            }

            // Validate last name
            if (lastName.trim() === "") {
                document.getElementById("lastNameError").innerText = "Last name is required";
                isValid = false;
            }

            // Validate email
            if (email.trim() === "") {
                document.getElementById("emailError").innerText = "Email is required";
                isValid = false;
            } else if (!isValidEmail(email)) {
                document.getElementById("emailError").innerText = "Invalid email format";
                isValid = false;
            }

            // Validate password
            if (password.trim() === "") {
                document.getElementById("passwordError").innerText = "Password is required";
                isValid = false;
            } else if (password.length < 8) {
                document.getElementById("passwordError").innerText = "Password must be at least 8 characters long";
                isValid = false;
            }

            // Validate confirm password
            if (confirmPassword.trim() === "") {
                document.getElementById("confirmPasswordError").innerText = "Please confirm your password";
                isValid = false;
            } else if (confirmPassword !== password) {
                document.getElementById("confirmPasswordError").innerText = "Passwords do not match";
                isValid = false;
            }

            return isValid;
        }

        function isValidEmail(email) {
            // Simple email validation regex
            var emailRegex = /\S+@\S+\.\S+/;
            return emailRegex.test(email);
        }
    </script>
</body>
</html>
