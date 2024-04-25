<?php
session_start();
include 'config.php';

if(isset($_SESSION['username'])) {
    $welcome_message = "Welcome, " . $_SESSION['username'];
    $logout_link = "<a href='/books/register.php' style='float: right;'>Logout</a>";
} else {
    $welcome_message = "";
    $logout_link = "";
}

$sql = "SELECT * FROM books";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Catalogue</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center align the content */
        }
        .header h1 {
            margin: 0;
            text-align: left;
        }
        .header .user-info {
            text-align: center; /* Center align the user info */
            margin-bottom: 20px;
        }
        .books {
            text-align: left; /* Align the book catalogue to the left */
        }
        .book {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }
        .book h2 {
            margin: 0;
            color: #333;
        }
        .book p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="user-info">
                <?php echo $welcome_message; ?>
                <?php echo $logout_link; ?>
            </div>
            <h1>Books Catalogue</h1>
        </div>
        <div class="books">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='book'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p><strong>Author:</strong> " . $row["author"] . "</p>";
                    echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
                    echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No books found.";
            }
            ?>
        </div>
    </div>
</body>
</html>
