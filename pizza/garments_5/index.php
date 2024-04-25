<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garment Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
            color: #333;
        }
        .navbar-nav.ml-auto {
            margin-right: 20px;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .container h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #007bff;
        }
        .container p {
            font-size: 20px;
            margin-bottom: 30px;
        }
        .btn-primary {
            font-size: 24px;
            padding: 15px 40px;
            border-radius: 50px;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Garment Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/garments/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/garments/products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/garments/contact.php">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <h1>Welcome to Garment Store</h1>
  <p>Discover the latest trends in fashion and shop from our wide range of garments.</p>
  <a href="products.html" class="btn btn-primary">Shop Now</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
