<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College ERP Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group input[type="email"],
        .form-group input[type="number"],
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .rating {
            margin-top: 10px;
        }
        .rating input[type="radio"] {
            display: none;
        }
        .rating label {
            display: inline-block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #ccc;
            cursor: pointer;
            margin-right: 5px;
            text-align: center;
            line-height: 30px;
        }
        .rating input[type="radio"]:checked + label {
            background-color: #ffcc00;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>College ERP Feedback Form</h1>
        <form action="submit_feedback.php" method="post">
            <div class="form-group">
                <label for="student_name">Your Name:</label>
                <input type="text" id="student_name" name="student_name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="prn_number">Enter your PRN number:</label>
                <input type="text" id="prn_number" name="prn_number" required>
            </div>

            <div class="form-group">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label>Overall Feedback (1 being least, 5 being best):</label>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5"><label for="star5">5</label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4">4</label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3">3</label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2">2</label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1">1</label>
                </div>
            </div>

            <button type="submit" class="btn-submit">Submit Feedback</button>
        </form>
    </div>
</body>
</html>
