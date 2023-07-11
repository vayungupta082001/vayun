<?php
// Establish a connection to the database
$servername = "sql6.freesqldatabase.com";
$username = "sql6631689";
$password = "dqiZgHiEHL";
$dbname = "sql6631689";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM namelist WHERE Username = ? AND Password = ?");
$stmt->bind_param("ss", $username, $password);

// Execute the query
$stmt->execute();

// Store the result
$result = $stmt->get_result();

// Check if a matching user was found
if ($result->num_rows == 1) {
    // User authenticated successfully
    header("Location: dashboard.html");
} else {
    // Invalid username or password
    header("Location: index.html");
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();

// write a program to take input from website and verify it from sql?
?>
