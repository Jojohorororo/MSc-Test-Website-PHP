<?php
$servername = "localhost";
$username = "root";
$password = "";

// Δημιουργία σύνδεσης
$conn = new mysqli($servername, $username, $password);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Δημιουργία βάσης δεδομένων
$sql = "CREATE DATABASE mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
