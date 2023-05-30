<?php
function swap($first, $second)
{

    $first = $first + $second; //33
    $second = $first - $second; //20
    $first = $first - $second; // 33- 20
    echo $first . " is first" . "\n"; // 13
    echo $second . " is second" . "\n"; // 20
}
echo swap(20, 13);

?>