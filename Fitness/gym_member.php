<?php
session_start(); // Start session to store user data

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fitness";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    // Retrieve search query
    $search_query = $_POST['search'];

    // Prepare and execute SQL query
    $sql = "SELECT * FROM gym_members WHERE name LIKE '%$search_query%'";
    $result = $conn->query($sql);
} else {
    // Retrieve all gym members
    $sql = "SELECT * FROM gym_members";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gym Members | Makefit</title>
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Include custom CSS -->
  <link href="styles.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="home.html">Makefit</a>   <!-- Update the logo text here -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="gym_dashboard.html">return to Dashboard</a>
      </ul>
    </div>
  </div>
</nav>

<!-- Gym Member Page Content -->
<div class="container">
  <h1>Gym Members</h1>
  <!-- Search Bar -->
  <div class="search-container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" placeholder="Search by name" name="search">
      <button type="submit">Search</button>
    </form>
  </div>
  
  <!-- Gym Member Table -->
  <div class="member-table-container">
    <table class="member-table">
      <thead>
        <tr>
          <th>Member ID</th> 
          <th>Name</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Phone Number</th>
          <th>Address</th>
          <th>Target Weight</th>
          <th>Current Weight</th>
          <th>Current BMI</th>
          <th>Target BMI</th>
          <th>Workout Plan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["member_id"] . "</td>"; // Displaying member_id
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["phone_number"] . "</td>";
                echo "<td>" . $row["address"] . "</td>";
                echo "<td>" . $row["target_weight"] . "</td>";
                echo "<td>" . $row["current_weight"] . "</td>";
                echo "<td>" . $row["current_bmi"] . "</td>";
                echo "<td>" . $row["target_bmi"] . "</td>";
                echo "<td>" . $row["workout_plan"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='11'>No gym members found</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
