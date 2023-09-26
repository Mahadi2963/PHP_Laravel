<?php

$length = 12;

function generatePassword($length)
{

    $lowercase = "abcdefghijklmnopqrstuvwxyz";
    $uppercase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $specialChars = "!@#$%^&*()_+";


    $allCharacters = $lowercase . $uppercase . $numbers . $specialChars;


    $password = "";
    $password .= $lowercase[rand(0, strlen($lowercase) - 1)];
    $password .= $uppercase[rand(0, strlen($uppercase) - 1)];
    $password .= $numbers[rand(0, strlen($numbers) - 1)];
    $password .= $specialChars[rand(0, strlen($specialChars) - 1)];

    for ($i = 0; $i < $length - 4; $i++) {
        $randomIndex = rand(0, strlen($allCharacters) - 1);
        $password .= $allCharacters[$randomIndex];
    }

    $password = str_shuffle($password);

    return $password;
}

$password = generatePassword($length);

echo "generated Password is: $password";
