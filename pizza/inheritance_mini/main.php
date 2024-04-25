<?php
// Guide class
class Guide {
    protected $destination;
    protected $travelDate;
    protected $travelTime;
    protected $attractions = array(
        "Explore Eiffel Tower",
        "Visit Louvre Museum",
        "Stroll along Champs-Élysées"
    );

    public function __construct($destination, $travelDate, $travelTime) {
        $this->destination = $destination;
        $this->travelDate = $travelDate;
        $this->travelTime = $travelTime;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getTravelDateTime() {
        return $this->travelDate . " at " . $this->travelTime;
    }

    public function getAttractions() {
        return $this->attractions;
    }
}

// Traveler class inheriting from Guide class
class Traveler extends Guide {
    protected $chosenAttraction;

    public function __construct($destination, $travelDate, $travelTime) {
        parent::__construct($destination, $travelDate, $travelTime);
        $this->chooseAttraction();
    }

    public function chooseAttraction() {
        $attractions = parent::getAttractions();
        // Choose one attraction randomly for the traveler
        $this->chosenAttraction = $attractions[array_rand($attractions)];
    }

    public function getChosenAttraction() {
        return $this->chosenAttraction;
    }
}

// Create a Guide object
$guide = new Guide("Paris", "2024-05-01", "10:00 AM");

// Create a Traveler object
$traveler = new Traveler("Paris", "2024-05-01", "10:00 AM");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bliss - Guide & Traveler</title>
    <style>
        /* Professional level CSS styles */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Travel Guide</h1>
    <table>
        <tr>
            <th>Destination</th>
            <td><?php echo $guide->getDestination(); ?></td>
        </tr>
        <tr>
            <th>Travel Date & Time</th>
            <td><?php echo $guide->getTravelDateTime(); ?></td>
        </tr>
        <tr>
            <th>Attractions</th>
            <td>
                <ul>
                    <?php foreach ($guide->getAttractions() as $attraction) : ?>
                        <li><?php echo $attraction; ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    </table>

    <hr>

    <h1>Traveler</h1>
    <table>
        <tr>
            <th>Destination</th>
            <td><?php echo $traveler->getDestination(); ?></td>
        </tr>
        <tr>
            <th>Travel Date & Time</th>
            <td><?php echo $traveler->getTravelDateTime(); ?></td>
        </tr>
        <tr>
            <th>Chosen Attraction</th>
            <td><?php echo $traveler->getChosenAttraction(); ?></td>
        </tr>
    </table>
</body>
</html>