<?php

// one of the way 
function reverse($input)
{
    for ($i = count($input); $i >= 0; $i--) {
        // echo $i."\n";
        echo $input[$i]."\n";
    }
}
reverse([1, 2, 3, 4, 5]);


echo  "****************************";


// one of the way 
$number = array(21,3,2,32,3,434,4);
print_r(array_reverse($number))."\n";


?>