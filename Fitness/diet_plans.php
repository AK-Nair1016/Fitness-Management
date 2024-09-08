<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch diet plan data
$sql = "SELECT * FROM diet";
$result = $conn->query($sql);
$dietPlan = [];
while ($row = $result->fetch_assoc()) {
    $dietPlan[] = $row;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diet Plan</title>
    <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include custom CSS -->
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
     <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="home.html" aria-placeholder="logo">Makefit</a>   <!-- Update the logo text here -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="gym_dashboard.html">Back to Dashboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <h2>DIET PLANS</h2>
    <table class="diet-table">
    <!-- Table content goes here -->
        <tr>
            <th>DAY</th>
            <th>MEAL</th>
            <th>FOOD DESCRIPTION</th>
        </tr>
        <?php foreach ($dietPlan as $row): ?>
            <tr>
                <td><?= $row['day'] ?></td>
                <td><?= $row['meal'] ?></td>
                <td><?= $row['food'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
