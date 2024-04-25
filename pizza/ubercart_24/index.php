<?php
include 'config.php';

$sql = "SELECT name, description, price, image FROM products";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $conn->error;
    exit; // Stop execution if there's an error
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple E-commerce Platform</title>
</head>
<body>
    <h1>Welcome to our E-commerce Platform</h1>
    
    <?php if ($result->num_rows > 0): ?>
        <?php while($row = $result->fetch_assoc()): ?>
            <div>
                <h2><?= $row["name"] ?></h2>
                <p><?= $row["description"] ?></p>
                <p>Price: $<?= $row["price"] ?></p>
                <img src="<?= $row["image"] ?>" alt="<?= $row["name"] ?>" width="200">
                <button>Add to Cart</button>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No products found</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
</body>
</html>
