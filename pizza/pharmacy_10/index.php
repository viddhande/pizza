<?php
include 'config.php';

if(isset($_POST['submit'])) {
    $medicine_name = mysqli_real_escape_string($con, $_POST['medicine_name']);
    $manufacturer = mysqli_real_escape_string($con, $_POST['manufacturer']);
    $expiry_date = mysqli_real_escape_string($con, $_POST['expiry_date']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $price = mysqli_real_escape_string($con, $_POST['price']);

    $insertquery = "INSERT INTO pharmacy_management (medicine_name, manufacturer, expiry_date, quantity, price) VALUES ('$medicine_name', '$manufacturer', '$expiry_date', '$quantity', '$price')";
    $iquery = mysqli_query($con, $insertquery);

    if($iquery) {
        ?>
        <script>alert("Medicine information submitted successfully");</script>
        <?php
    } else {
        ?>
        <script>alert("Failed to submit medicine information");</script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Pharmacy Management System</a>
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
                    <a class="nav-link" href="/pharmacy/register.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Medicine Information Submission</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="medicine_name">Medicine Name:</label>
                        <input type="text" class="form-control" id="medicine_name" name="medicine_name" required>
                    </div>
                    <div class="form-group">
                        <label for="manufacturer">Manufacturer:</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer" required>
                    </div>
                    <div class="form-group">
                        <label for="expiry_date">Expiry Date:</label>
                        <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit Medicine Information</button>
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
