<?php

$length = 12;

function generatePassword($length)
{
    $symbols = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, (strlen($symbols) - 1));
        $password .= $symbols[$randomIndex];
    }

    return $password;
}

$password = generatePassword($length);

echo "Generated Password is: $password\n";
