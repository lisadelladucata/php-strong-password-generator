<?php
session_start();
$password = $_SESSION['password'] ?? 'Nessuna password generata.';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Password Generata</title>
</head>
<body>
    <h1>Risultato</h1>

    <h2>Password generata:</h2>
    <p><strong><?php echo $password; ?></strong></p>

    <a href="index.php">← Torna indietro</a>
</body>
</html>
