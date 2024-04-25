<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Garment Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Garment Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/garments/index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/garments/products.php">Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/garments/contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <h1>Our Products</h1>
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Product 1</h5>
          <p class="card-text">Description of Product 1.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Product 2</h5>
          <p class="card-text">Description of Product 2.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Product 3</h5>
          <p class="card-text">Description of Product 3.</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
