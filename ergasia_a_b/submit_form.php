<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$surname = $_POST['surname'];

$fullname = $surname . $name;

$phone = $_POST['phone'];
$age = $_POST['age'];
$email = $_POST['email'];

$captcha1 = $_POST['captcha1'];
$captcha2 = $_POST['captcha2'];
$captcha3 = $_POST['captcha3'];

if ($captcha1 == '' || $captcha2 == '' || $captcha3 == '')
{
    die("Η αριθμητική πράξη είναι λάθος");
}

if (($captcha1 + $captcha2) != $captcha3)
{
    die("Η αριθμητική πράξη είναι λάθος");
}

if ($name == '')
{
    die("Το όνομα δεν μπορεί να είναι κενό");
}

if ($surname == '')
{
    die("Το επίθετο δεν μπορεί να είναι κενό");
}

if ($fullname == '')
{
    die("Το ονοματεπώνυμο δεν μπορεί να είναι κενό");
}

if ($age <= 0)
{
    die("Η ηλικία δεν μπορεί να ειναι μικρότερη ή ίση με το 0");
}

$sql = "INSERT INTO myguests (firstname, lastname, phone, age, email)
VALUES ('$name', '$surname', '$phone', '$age', '$email')";

    session_start();
if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";

    $_SESSION['confirmation_message'] = "Τα στοιχεία δηλώθηκαν.";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: ./index.php");
exit;
?>
