<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Bliss - Service Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            text-align: center;
            margin-top: 20px;
        }
        label {
            font-weight: bold;
            color: #666;
        }
        select, input[type="submit"] {
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            margin-right: 10px;
        }
        select:hover, input[type="submit"]:hover {
            background-color: #0056b3;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h1>Search for Travel Bliss Services</h1>
    <form method="post">
        <label for="service">Select Service:</label>
        <select id="service" name="service">
            <option value="JourneyGuru">JourneyGuru</option>
            <option value="BookRide">BookRide</option>
            <option value="TalkTraverse">TalkTraverse</option>
        </select>
        <input type="submit" name="search" value="Search">
        <input type="submit" name="displayAll" value="Display All">
    </form>

    <?php
    // Data array for different services
    $services = array(
        'JourneyGuru' => array(
            array('Destination' => 'Paris', 'Description' => 'Explore the City of Light and its iconic landmarks.', 'Price' => '$1500'),
            array('Destination' => 'Tokyo', 'Description' => 'Experience the vibrant culture and technology of Tokyo.', 'Price' => '$2000'),
            // Add more destinations for JourneyGuru
        ),
        'BookRide' => array(
            array('Vehicle' => 'Sedan', 'Description' => 'Comfortable and stylish sedan for your travel needs.', 'Price' => '$50/hour'),
            array('Vehicle' => 'SUV', 'Description' => 'Spacious SUV for families or group travel.', 'Price' => '$70/hour'),
            // Add more vehicles for BookRide
        ),
        'TalkTraverse' => array(
            array('Guide' => 'English Speaking Guide', 'Description' => 'Knowledgeable guide to assist you during your journey.', 'Price' => '$30/hour'),
            array('Guide' => 'Local Expert Guide', 'Description' => 'Get insights from a local expert about the destination.', 'Price' => '$40/hour'),
            // Add more guides for TalkTraverse
        )
    );

    // Function to display data in table format
    function displayData($data) {
        echo '<table>';
        echo '<tr>';
        foreach ($data[0] as $key => $value) {
            echo '<th>' . $key . '</th>';
        }
        echo '</tr>';
        foreach ($data as $entry) {
            echo '<tr>';
            foreach ($entry as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }

    if (isset($_POST['search']) && !empty($_POST['service'])) {
        $selectedService = $_POST['service'];
        if (array_key_exists($selectedService, $services)) {
            echo '<h2 style="text-align:center; margin-top:20px;">' . $selectedService . ' Services</h2>';
            displayData($services[$selectedService]);
        } else {
            echo '<p style="text-align:center; color:red; margin-top:20px;">No data found for selected service: ' . $selectedService . '</p>';
        }
    }

    if (isset($_POST['displayAll'])) {
        echo '<h2 style="text-align:center; margin-top:20px;">All Services</h2>';
        foreach ($services as $serviceName => $serviceData) {
            echo '<h3 style="text-align:center;">' . $serviceName . ' Services</h3>';
            displayData($serviceData);
        }
    }
    ?>

</body>
</html>