<?php
$input = [32,35,67,87,45,54,32,5,6,73,3];
$smallest = [];
foreach($input as $inputs){
    if($inputs > $smallest){
        $smallest = $input;
        array_push($smallest,$inputs);
    }
}
echo $smallest;
?>