<?php

$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);


function removeEvenNumbers($numbers)
{
    $oddNumbers = [];

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $oddNumbers[] = $number;
        }
    }

    echo "The resulting array is given bellow: \n";
    foreach ($oddNumbers as $oddNumber) {
        echo "$oddNumber \n";
    }
}

removeEvenNumbers($numbers);
