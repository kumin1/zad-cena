<?php
// Connect to your database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$ulica = $_POST['ulica'];
$kodPocztowy = $_POST['kodPocztowy'];
$miasto = $_POST['miasto'];
$cena = $_POST['cena'];

// Insert data into database
$sql = "INSERT INTO your_table (ulica, kod_pocztowy, miasto, cena) VALUES ('$ulica', '$kodPocztowy', '$miasto', '$cena')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>