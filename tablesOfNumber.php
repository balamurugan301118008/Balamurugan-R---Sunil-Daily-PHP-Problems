<?php

$input = readline("Enter a table number: ");
$length = readline("Fill you table length: ");
for ($i = 1; $i <= $length; $i++) {
    echo $i . " * " . $input . " = " . $input * $i . "\n";
}
?>