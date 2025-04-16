<?php
session_start();
require 'functions.php';

if (isset($_GET['length'])) {
    $length = intval($_GET['length']);

    if ($length > 0) {
        $password_generated = passwordGenerator($length);
        $_SESSION['password'] = $password_generated;
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
        <input type="number" name="length" id="length" min="1" required>
        <button type="submit">Genera Password</button>
    </form>
    
</body>
</html>
