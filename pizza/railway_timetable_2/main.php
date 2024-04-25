<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Railway Time Table</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        padding: 20px;
    }
    .timetable {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .timetable th, .timetable td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    .timetable th {
        background-color: #007bff;
        color: #fff;
    }
    .timetable td {
        background-color: #f1f1f1;
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<h1>Railway Time Table</h1>
<table class="timetable">
    <thead>
        <tr>
            <th>Train Number</th>
            <th>Train Name</th>
            <th>Origin</th>
            <th>Destination</th>
            <th>Departure Time</th>
            <th>Arrival Time</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>12345</td>
            <td>Express Train</td>
            <td>Pune</td>
            <td>Mumbai</td>
            <td>08:00 AM</td>
            <td>10:30 AM</td>
        </tr>
        <tr>
            <td>67890</td>
            <td>Local Train</td>
            <td>Akurdi</td>
            <td>Pimpri</td>
            <td>11:15 AM</td>
            <td>01:45 PM</td>
        </tr>
        <!-- Add more rows for additional trains -->
    </tbody>
</table>
</body>
</html>
