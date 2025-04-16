<?php
function passwordGenerator($length, $use_lowercase, $use_uppercase, $use_numbers, $use_symbols) {
    $default_characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;:,.<>?';
    
    $char_sets = [
        $use_lowercase => 'abcdefghijklmnopqrstuvwxyz',
        $use_uppercase => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        $use_numbers   => '0123456789',
        $use_symbols   => '!@#$%^&*()_+-=[]{}|;:,.<>?'
    ];

    $characters = '';

    foreach ($char_sets as $use => $set) {
        if ($use) {
            $characters .= $set;
        }
    }

    if (empty($characters)) {
        $characters = $default_characters;
    }

    $password = '';
    $max = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $max)];
    }

    return $password;
}

?>
