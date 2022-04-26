<?php
$first_string = strtolower(trim(fgets(STDIN)));
$second_string = strtolower(trim(fgets(STDIN)));

//echo $first_string . "\n";
//echo $second_string. "\n";


$string_length = strlen($first_string); // strlen($second_string)

$index = 0;
$flag = true;
for( ; $index < $string_length; $index++){
    if($first_string[$index] != $second_string[$index]){
       $flag = false;
    }
    if ($first_string[$index] > $second_string[$index]){
        echo "1" . "\n";
        break;
    }else if($first_string[$index] < $second_string[$index]){
        echo "-1" . "\n";
        break;
    }
}
if($index == $string_length && $flag == true){
    echo "0" . "\n";
}