<?php

session_start();


$config = include('config.php');


$servername = $config['DB_SERVER'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = $config['DB_NAME'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


$name = $_POST['Name'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$age = $_POST['Age'];
$comments = $_POST['Comments'];


$area = isset($_POST['area']) ? $_POST['area'] : 'Not Specified';


$subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';


$stmt = $conn->prepare("INSERT INTO users (Name, Email, Phone, Age, Comments, Area, Receive_News) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $name, $email, $phone, $age, $comments, $area, $subscribe);

if ($stmt->execute()) {
    echo "Form sent successfully!";
} else {
    echo "Error submitting form: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<p><a href="index.php">return to form</a></p>