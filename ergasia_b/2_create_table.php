<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Σύνδεση στη βάση δεδομένων
$conn = new mysqli($servername, $username, $password, $dbname);

// Έλεγχος σύνδεσης
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Δημιουργία πίνακα
$sql = "CREATE TABLE myguests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
lastname VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
phone VARCHAR(50),
age VARCHAR(3),
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table myguests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
