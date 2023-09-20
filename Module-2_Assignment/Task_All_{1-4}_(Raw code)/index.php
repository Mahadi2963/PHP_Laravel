<?php
// Task 1

// Using For loop
function printEvenNumbersUsingForLoop($start, $end, $step)
{
    if ($start % 2 != 0) {
        $start++;
    }

    for ($i = $start; $i <= $end; $i += $step) {

        echo $i . " ";
    }
}

printEvenNumbersUsingForLoop(1, 20, 2);
echo PHP_EOL;


// Using While loop
function printEvenNumbersUsingWhileLoop($start, $end, $step)
{

    if ($start % 2 != 0) {
        $start++;
    }

    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

printEvenNumbersUsingWhileLoop(1, 20, 2);
echo PHP_EOL;


// Using Do While loop
function printEvenNumbersUsingDoWhileLoop($start, $end, $step)
{
    if ($start % 2 != 0) {
        $start++;
    }
    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersUsingDoWhileLoop(1, 20, 2);
echo PHP_EOL;
echo PHP_EOL;



// Task 2
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue;
    }
    echo $i . " ";
}
echo PHP_EOL;
echo PHP_EOL;



// Task 3
$first = 0;
$second = 1;

echo "Fibonacci Series up to 10 numbers and less than 100 are: ";
echo $first . " " . $second;

for ($i = 2; $i < 10; $i++) {
    $sum = $first + $second;
    if (100 < $sum) {
        break;
    }
    echo " " . $sum;
    $first = $second;
    $second = $sum;
}
echo PHP_EOL;
echo PHP_EOL;



// Task 4
function fibonacci($n)
{
    $first = 0;
    $second = 1;

    echo "Fibonacci Series up to $n numbers are: ";
    echo $first . " " . $second;

    for ($i = 2; $i < $n; $i++) {
        $sum = $first + $second;
        echo " " . $sum;
        $first = $second;
        $second = $sum;
    }
}
fibonacci(15);
echo PHP_EOL;
