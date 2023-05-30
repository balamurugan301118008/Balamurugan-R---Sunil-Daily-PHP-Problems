<?php

$input = readline("Enter the length of number: ");
$firstNumber = 0;
$secondNumber = 1;

for ($i = 1; $i <= $input; $i++) {
    $total = $firstNumber + $secondNumber;
    $firstNumber = $secondNumber;
    $secondNumber = $total;
    echo $total . "\n";
}
// outputs

// 1
// 2
// 3
// 5
// 8
// 13
// 21
// 34
// 55
// 89 
?>