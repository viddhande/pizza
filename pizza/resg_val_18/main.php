<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
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
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            width: calc(100% - 22px); /* Adjusting for padding and border width */
        }
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        #registrationDetails {
            margin-top: 30px;
            display: none;
        }
        #registrationDetails h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        #registrationDetails p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Registration Form</h1>
    <form id="registrationForm" onsubmit="return validateForm()">
        <div>
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required>
            <span id="firstNameError" class="error"></span>
        </div>
        <div>
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
            <span id="lastNameError" class="error"></span>
        </div>
        <div>
            <label for="organization">Organization:</label>
            <input type="text" id="organization" name="organization" required>
            <span id="organizationError" class="error"></span>
        </div>
        <div>
            <label for="hobbies">Hobbies:</label>
            <input type="text" id="hobbies" name="hobbies" required>
            <span id="hobbiesError" class="error"></span>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <span id="emailError" class="error"></span>
        </div>
        <button type="submit">Submit</button>
    </form>

    <div id="registrationDetails">
        <h2>Registration Details:</h2>
        <p><strong>First Name:</strong> <span id="firstNameOutput"></span></p>
        <p><strong>Last Name:</strong> <span id="lastNameOutput"></span></p>
        <p><strong>Organization:</strong> <span id="organizationOutput"></span></p>
        <p><strong>Hobbies:</strong> <span id="hobbiesOutput"></span></p>
        <p><strong>Email:</strong> <span id="emailOutput"></span></p>
    </div>
</div>

<script>
    function validateForm() {
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var organization = document.getElementById("organization").value;
        var hobbies = document.getElementById("hobbies").value;
        var email = document.getElementById("email").value;

        var firstNameError = document.getElementById("firstNameError");
        var lastNameError = document.getElementById("lastNameError");
        var organizationError = document.getElementById("organizationError");
        var hobbiesError = document.getElementById("hobbiesError");
        var emailError = document.getElementById("emailError");

        var valid = true;

        // Reset error messages
        firstNameError.textContent = "";
        lastNameError.textContent = "";
        organizationError.textContent = "";
        hobbiesError.textContent = "";
        emailError.textContent = "";

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

        // Validate organization
        if (!organization) {
            organizationError.textContent = "Organization is required";
            valid = false;
        }

        // Validate hobbies
        if (!hobbies) {
            hobbiesError.textContent = "Hobbies are required";
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

        return valid;
    }

    function validateEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>

</body>
</html>
