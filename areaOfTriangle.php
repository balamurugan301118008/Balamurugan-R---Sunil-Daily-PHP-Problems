<?php

$base = readline("Enter a breadth value : ");
$height = readline("Enter a height number : ");
if(is_numeric($base) && is_numeric($height)){
    $area = $base * $height/ 2 ;
    echo "The area of traingle is $area"."\n";
}
else{
    echo "please enter correct values";
}
?>