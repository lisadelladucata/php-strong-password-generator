<?php
session_start();
require 'functions.php';

if (isset($_GET['length'])) {
    $length = intval($_GET['length']);

    $use_lowercase = isset($_GET['lowercase']);
    $use_uppercase = isset($_GET['uppercase']);
    $use_numbers   = isset($_GET['numbers']);
    $use_symbols   = isset($_GET['symbols']);

    if ($length > 0) {
        $_SESSION['password'] = passwordGenerator($length, $use_lowercase, $use_uppercase, $use_numbers, $use_symbols);
    }

    header('Location: result.php');
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore di Password Sicure</title>
</head>
<body>
    <h1>Generatore di Password Sicure</h1>

    <form action="index.php" method="GET">
        <label for="length">Lunghezza della password:</label>
        <input type="number" name="length" id="length" min="1" required><br><br>

        <label><input type="checkbox" name="lowercase" > Lettere minuscole</label><br>
        <label><input type="checkbox" name="uppercase" > Lettere maiuscole</label><br>
        <label><input type="checkbox" name="numbers" > Numeri</label><br>
        <label><input type="checkbox" name="symbols"> Simboli</label><br><br>

        <button type="submit">Genera Password</button>
    </form>
    
</body>
</html>
