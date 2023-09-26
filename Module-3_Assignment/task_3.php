<?php

$grades = array(85, 92, 78, 88, 95);

function sortGrades($grades)
{
    rsort($grades);

    echo "Sorted grades in descending order given below: \n";
    foreach ($grades as $grade) {
        echo "$grade \n";
    }
}

sortGrades($grades);
