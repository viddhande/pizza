<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            justify-content: center;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Image Gallery</h1>
    <div class="gallery">
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 1">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 2">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 3">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 4">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 5">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 6">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 7">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 8">
        </div>
        <div class="image">
            <img src="https://via.placeholder.com/300" alt="Image 9">
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
