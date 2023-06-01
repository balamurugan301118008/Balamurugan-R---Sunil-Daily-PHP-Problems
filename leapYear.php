<?php

    $year = readline("Enter a year: ");
    if ($year % 4 == 0) {
        echo $year . " is a leap year" . "\n";
    } else {
        echo $year . " is not a leap year" . "\n";
    }

?>