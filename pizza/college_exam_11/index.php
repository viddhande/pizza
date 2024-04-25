<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $prnNumber = mysqli_real_escape_string($con, $_POST['prnNumber']);
    $division = mysqli_real_escape_string($con, $_POST['division']);
    $year = mysqli_real_escape_string($con, $_POST['year']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $semester = mysqli_real_escape_string($con, $_POST['semester']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $examTitle = mysqli_real_escape_string($con, $_POST['examTitle']);
    $grade = mysqli_real_escape_string($con, $_POST['grade']);
    $passFail = mysqli_real_escape_string($con, $_POST['passFail']);

    $insertquery = "INSERT INTO college_exams (firstName, lastName, prnNumber, division, year, department, semester, email, examTitle, grade, passFail) VALUES ('$firstName', '$lastName', '$prnNumber', '$division', '$year', '$department', '$semester', '$email', '$examTitle', '$grade', '$passFail')";
    $iquery = mysqli_query($con, $insertquery);

    if($iquery) {
        ?>
        <script>alert("Exam information submitted successfully");</script>
        <?php
    } else {
        ?>
        <script>alert("Failed to submit exam information");</script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Examination System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">College Examination System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Settings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clg_exam/register.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Exam Information Submission</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="firstName">First Name:</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="prnNumber">PRN Number:</label>
                        <input type="text" class="form-control" id="prnNumber" name="prnNumber" required>
                    </div>
                    <div class="form-group">
                        <label for="division">Division:</label>
                        <input type="text" class="form-control" id="division" name="division" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year:</label>
                        <input type="text" class="form-control" id="year" name="year" required>
                    </div>
                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" class="form-control" id="department" name="department" required>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester:</label>
                        <input type="text" class="form-control" id="semester" name="semester" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="examTitle">Exam Title:</label>
                        <input type="text" class="form-control" id="examTitle" name="examTitle" required>
                    </div>
                    <div class="form-group">
                        <label for="grade">Grade:</label>
                        <input type="text" class="form-control" id="grade" name="grade" required>
                    </div>
                    <div class="form-group">
                        <label for="passFail">Pass/Fail:</label>
                        <select class="form-control" id="passFail" name="passFail" required>
                            <option value="Pass">Pass</option>
                            <option value="Fail">Fail</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit Exam Information</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
