<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Custom styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }
        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .card-header {
            background-color: #4267B2;
            color: #fff;
            border-bottom: none;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            background-color: #4267B2;
            border-color: #4267B2;
            border-radius: 20px;
        }
        /* Custom hover effect */
        .follow:hover {
            color: #fff;
            background-color: #4267B2;
            border-color: #4267B2;
        }
        .bottom-content {
            background-color: #f0f2f5;
            border-top: 1px solid #dee2e6;
            padding: 20px;
        }
        .bottom-content h5 {
            margin-bottom: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Facebook<?php if(isset($_SESSION['username'])) echo ' - This is ' . $_SESSION['username']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<li class="nav-item">
                                <a class="nav-link" href="/signup/regis.php">Logout</a>
                            </li>';
                    } else {
                        echo '<li class="nav-item">
                                <a class="nav-link" href="/signup/regis.php">Login</a>
                            </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        What's on your mind?
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" rows="3" placeholder="Write something..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
                <!-- Posts will be displayed here -->
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header">
                        People you may know
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Vidyesh Dhande
                                <span class="badge badge-primary follow" data-toggle="tooltip" title="Follow">Follow</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Shruti Baravkar
                                <span class="badge badge-primary follow" data-toggle="tooltip" title="Follow">Follow</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Vaidehi Bhonge
                                <span class="badge badge-primary follow" data-toggle="tooltip" title="Follow">Follow</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Sponsored
                    </div>
                    <div class="card-body">
                        <!-- Sponsored content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom content -->
    <div class="bottom-content">
        <div class="container">
            <h5>Connect with friends and the world around you on Facebook.</h5>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Tooltip JS -->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>
