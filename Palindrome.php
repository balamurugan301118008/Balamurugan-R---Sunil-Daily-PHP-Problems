<?php

// // below the code for only the checking conditions 
    function Palindrome($input){
        $rev = strrev($input);
    //  echo $rev;
      if($input === $rev){
            echo $input." "."is  a palindrome"."\n";
        }
        else{
            echo $input." "."not a palindrome"."\n";
        }
    }
    Palindrome('radar');

echo "*****************************"."\n";
//Below is the code to convert the palindrome from the input value

$value = readline("Enter a word: ");

if($value === strrev($value)){
    echo $value." "."is a palindrome word"."\n";
}
else{   
    echo $value." "."is not a palindrome word"."\n";
}

?>  