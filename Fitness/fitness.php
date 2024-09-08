<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'fitness';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select all records from the table, order by the day of the week
$sql = "SELECT * FROM fitness ORDER BY FIELD(day, 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday')";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Workouts | Makefit</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include your custom CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.html" aria-placeholder="logo">Makefit</a>
            <!-- Update the logo text here -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container mt-5">
        <h1>Fitness Workouts</h1>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Body</th>
                            <th>Exercise</th>
                            <th>Sets</th>
                            <th>Reps</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Check if there are rows returned
                        if ($result->num_rows > 0) {
                            // Initialize a variable to keep track of the current day
                            $currentDay = "";

                            // Output data of each row
                            while ($row = $result->fetch_assoc()) {
                                // Check if the current day is different from the previous row
                                if ($row["day"] !== $currentDay) {
                                    // If it's a new day, output a row with a different background color
                                    if ($currentDay !== "") {
                                        echo "</tr>"; // Close the previous row
                                    }
                                    echo "<tr class='day-separator'>"; // Add a CSS class for styling
                                    echo "<td colspan='5'><strong>{$row["day"]}</strong></td>"; // Display the day in a merged cell
                                    echo "</tr>";
                                    $currentDay = $row["day"]; // Update the current day
                                }

                                // Output data for each workout
                                echo "<tr>";
                                echo "<td>{$row["day"]}</td>";
                                echo "<td>{$row["body_part"]}</td>";
                                echo "<td>{$row["exercise"]}</td>";
                                echo "<td>{$row["sets"]}</td>";
                                echo "<td>{$row["reps"]}</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
<?php
// Close connection
$conn->close();
?>
