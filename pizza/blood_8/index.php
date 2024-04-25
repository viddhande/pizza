<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $donor_name = mysqli_real_escape_string($con, $_POST['donor_name']);
    $blood_group = mysqli_real_escape_string($con, $_POST['blood_group']);
    $contact_number = mysqli_real_escape_string($con, $_POST['contact_number']);
    $donation_date = mysqli_real_escape_string($con, $_POST['donation_date']);

    $insertquery = "INSERT INTO blood_bank (donor_name, blood_group, contact_number, donation_date) VALUES ('$donor_name', '$blood_group', '$contact_number', '$donation_date')";
    $iquery = mysqli_query($con, $insertquery);

    if($iquery) {
        ?>
        <script>alert("Blood donation information submitted successfully");</script>
        <?php
    } else {
        ?>
        <script>alert("Failed to submit blood donation information");</script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Blood Bank Management System</a>
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
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blood/register.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Blood Donation Information Submission</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="donor_name">Donor's Name:</label>
                        <input type="text" class="form-control" id="donor_name" name="donor_name" required>
                    </div>
                    <div class="form-group">
                        <label for="blood_group">Blood Group:</label>
                        <select class="form-control" id="blood_group" name="blood_group" required>
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="donation_date">Donation Date:</label>
                        <input type="date" class="form-control" id="donation_date" name="donation_date" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit Blood Donation Information</button>
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