<?php
session_start();

$config = include('config.php');

$servername = $config['DB_SERVER'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = $config['DB_NAME'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo "<h1>Records in the database</h1>";
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["idusers"] . " - Name: " . $row["Name"] . " - Email: " . $row["Email"] .
             " - Phone: " . $row["Phone"] . " - Age: " . $row["Age"] .
             " - Comments: " . $row["Comments"] . " - Area: " . $row["Area"] .
             " - Receive: " . $row["Receive_News"] . "<br><br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
