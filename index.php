<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = 'usbw';
$database = 'aanmeldingen';
$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
    die("Verbinding mislukt: " . $conn->connect_error);
}

echo "Verbinding gelukt jeej";

$query = "SELECT * FROM aanmeldingen";

$result = $conn->query($query);


// $aantalRijen = $result->num_rows;
// $aantalVelden = $result->field_count;

$resultaten = array();

// while($row = $result->fetch_assoc()) {
//     $resultaten[] = $row;
// }

// print_r($resultaten);
?>