<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TY Time Table</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    .timetable {
      margin-top: 50px;
    }
    .timetable table {
      width: 100%;
      border-collapse: collapse;
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
      background-color: #fff;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="timetable">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Time Slot</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>9:00 AM - 10:00 AM</td>
          <td>English<br>(AB)</td>
          <td>Maths<br>(CD)</td>
          <td>Physics<br>(EF)</td>
          <td>Chemistry<br>(GH)</td>
          <td>Biology<br>(IJ)</td>
        </tr>
        <tr>
          <td>10:00 AM - 11:00 AM</td>
          <td>Chemistry<br>(GH)</td>
          <td>Biology<br>(IJ)</td>
          <td>English<br>(AB)</td>
          <td>Maths<br>(CD)</td>
          <td>Physics<br>(EF)</td>
        </tr>

        <tr>
            <td>11:10 AM - 12:00 AM</td>
            <td>Design and analysis pf algorithms<br>(GH)</td>
            <td>Operating systems<br>(IJ)</td>
            <td>HSMC<br>(AB)</td>
            <td>MAchine Learning<br>(CD)</td>
            <td>IVP<br>(EF)</td>
          </tr>
        <!-- Add more rows for other time slots -->
      </tbody>
    </table>
  </div>
</div>

</body>
</html>
