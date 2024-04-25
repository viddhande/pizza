<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Gmail Registration Form</h1>
    <form onsubmit="return validateForm()">
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>
        <div id="firstNameError" class="error"></div>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>
        <div id="lastNameError" class="error"></div>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <div id="emailError" class="error"></div>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <div id="passwordError" class="error"></div>

        <button type="submit">Register</button>
    </form>
</div>

<script>
    function validateForm() {
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        var firstNameError = document.getElementById("firstNameError");
        var lastNameError = document.getElementById("lastNameError");
        var emailError = document.getElementById("emailError");
        var passwordError = document.getElementById("passwordError");

        var valid = true;

        // Reset error messages
        firstNameError.textContent = "";
        lastNameError.textContent = "";
        emailError.textContent = "";
        passwordError.textContent = "";

        // Validate first name
        if (!firstName) {
            firstNameError.textContent = "First name is required";
            valid = false;
        }

        // Validate last name
        if (!lastName) {
            lastNameError.textContent = "Last name is required";
            valid = false;
        }

        // Validate email
        if (!email) {
            emailError.textContent = "Email is required";
            valid = false;
        } else if (!validateEmail(email)) {
            emailError.textContent = "Invalid email format";
            valid = false;
        }

        // Validate password
        if (!password) {
            passwordError.textContent = "Password is required";
            valid = false;
        } else if (!validatePassword(password)) {
            passwordError.textContent = "Password must contain at least 8 characters including at least one uppercase letter, one lowercase letter, one digit, and one special symbol";
            valid = false;
        }

        return valid;
    }

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }

    function validatePassword(password) {
        var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return re.test(password);
    }
</script>

</body>
</html>
