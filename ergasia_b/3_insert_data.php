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

// Εισαγωγή δεδομένων
$sql = "INSERT INTO myguests (firstname, lastname, phone, age, email)
VALUES ('George', 'Dikos', '697xxxxxxx', '31', 'email@email.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
