<?php
session_start();

// Verbinden met de database
$servername = 'localhost';
$username = 'root';
$password = 'usbw';
$database = 'aanmeldingen';
$conn = new mysqli($servername, $username, $password, $database);


// De variabelen in de session zetten
if(isset($_POST['submit'])) {
    $_SESSION['naam'] = $_POST['naam'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['aanwezig'] = $_POST['aanwezig'];
    $_SESSION['aantal'] = $_POST['aantal'];

    if($_SESSION['aantal'] < 0) {
        $_SESSION['aantal'] = $_SESSION['aantal'] * -1;
    }

    $invulQuery = "INSERT INTO aanmelden (naam, mail, aanwezig, aantal) VALUES ({$_SESSION['naam']}, {$_SESSION['mail']}, {$_SESSION['aanwezig']}, {$_SESSION['aantal']})";
    $invulling = $conn->query($invulQuery);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invullen</title>
</head>
<body>
    <form action = 'invullen.php' method = 'post'>
    Naam: <input type = 'text' name = 'naam'><br>
    Mail: <input type = 'text' name = 'mail'><br>
    Aanwezig: <input type = 'radio' name = 'aanwezig' value = 'ja'>
    <label for = 'ja'>Ja</label>
    <input type = 'radio' name = 'aanwezig' value = 'nee'>
    <label for = 'nee'>Nee</label><br>
    Aantal: <input type = 'number' name = 'aantal'>
    <input type = 'submit' name = 'submit'><br><br><br>
    </form>
    <?php
        if(isset($negatiefError)) {
            echo $negatiefError;
        }
        print_r($_SESSION);
    ?>
</body>
</html>