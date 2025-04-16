<?php
function passwordGenerator($length) {
    $script = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    $password = '';
    $max = strlen($script) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $script[rand(0, $max)];
    }

    return $password;
}

$password_generated = '';

if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    
    if ($length > 0) {
        $password_generated = passwordGenerator($length);
    } else {
        $password_generated = 'Inserisci un numero valido maggiore di 0.';
    }
}
?>
