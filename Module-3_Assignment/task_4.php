<?php

$studentGrades = array(
    "student_1" => array("Math" => 33, "English" => 72, "Science" => 55),
    "student_2" => array("Math" => 95, "English" => 88, "Science" => 93),
    "student_3" => array("Math" => 15, "English" => 85, "Science" => 20)
);

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $studentNo => $scores) {
        echo $studentNo . "'s total scores: ";

        $total = 0;

        foreach ($scores as $subject => $score) {
            $total += $score;
        }

        $average = $total / 3;

        if ($average >= 80 && $average <= 100) {
            $grade = "A+";
        } elseif ($average >= 70 && $average < 80) {
            $grade = 'A';
        } elseif ($average >= 60 && $average < 70) {
            $grade = 'A-';
        } elseif ($average >= 50 && $average < 60) {
            $grade = 'B';
        } elseif ($average >= 40 && $average < 50) {
            $grade = 'C';
        } elseif ($average >= 33 && $average < 40) {
            $grade = 'D';
        } elseif ($average >= 0 && $average < 33) {
            $grade = 'F';
        } else {
            $grade = 'Invalid Score';
        }

        printf("%d , Average is: %.2f and GRADE is: %s \n", $total, $average, $grade);
    }
}

calculateAverageGrades($studentGrades);
