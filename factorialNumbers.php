<?php
function factorial($num)
{
    $factorial = 1;
    for ($x = $num; $x >= 1; $x--) {
        $factorial = $factorial * $x;
        echo $factorial . "\n";
    }
    return "Result: " . $factorial . "\n";
}
echo factorial(5);

// outputs /
// 5
// 20
// 60
// 120
// 120
// Result: 120
?>