<?php

$dateOne = (string) readline('Enter a date (yyyy/mm/dd): ');
$dateTwo = (string) readline('Enter a date (yyyy/mm/dd): ');
function dateCalculation($firstDate, $secondDate)
{
    $one = date_create($firstDate);
    $two = date_create($secondDate);
    $cal = date_diff($one, $two);
    return "Difference between two dates " . $cal->format('%R%a Days') . "\n";
}
echo dateCalculation($dateOne, $dateTwo);
?>