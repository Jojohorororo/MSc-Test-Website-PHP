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

// Εύρεση εγγραφών με συγκεκριμένο όνομα
$sql = "SELECT * FROM myguests WHERE lastname='Dikos'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    // Εμφάνιση κάθε εγγραφής
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
}
else {
    echo "0 results";
}

echo "<br>";

// Ενημέρωση εγγραφής με συγκεκριμένο id
$sql = "UPDATE myguests SET lastname='Doe' WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

echo "<br>";

// Διαγραφή εγγραφής με συγκεκριμένο id
$sql = "DELETE FROM myguests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
