<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Operations</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>jQuery Operations</h1>

    <label for="num1">Number 1:</label>
    <input type="number" id="num1"><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" id="num2"><br><br>

    <button id="calculateButton">Calculate</button>

    <div id="result"></div>

    <script>
        $(document).ready(function() {
            $('#calculateButton').click(function() {
                var num1 = $('#num1').val();
                var num2 = $('#num2').val();

                num1 = parseFloat(num1);
                num2 = parseFloat(num2);

                var sum = num1 + num2;
                var difference = num1 - num2;
                var product = num1 * num2;
                var quotient = num1 / num2;

                $('#result').html('<p>Sum: ' + sum + '</p>' +
                                  '<p>Difference: ' + difference + '</p>' +
                                  '<p>Product: ' + product + '</p>' +
                                  '<p>Quotient: ' + quotient + '</p>');
            });
        });
    </script>

    <div class="container">
        <h2>Feedback Form</h2>
        <form id="feedbackForm">
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>

            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" placeholder="Enter your last name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Enter your feedback" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        $(document).ready(function() {
            $('#feedbackForm').submit(function(event) {
                event.preventDefault();

                var firstName = $('#firstName').val();
                var lastName = $('#lastName').val();
                var email = $('#email').val();
                var message = $('#message').val();

                var fullName = firstName + ' ' + lastName;

                alert('Name: ' + fullName + '\nEmail: ' + email + '\nFeedback: ' + message);
            });
        });
    </script>
</body>
</html>
