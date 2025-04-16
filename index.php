<?php
require './functions.php'
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
    <?php
    if (!empty($password_generated)) {
        echo '<h2>Password generata:</h2>';
        echo '<p><strong>' . $password_generated . '</strong></p>';
    }
    ?>
</body>
</html>
