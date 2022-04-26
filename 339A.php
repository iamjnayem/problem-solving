<?php

$input = trim(fgets(STDIN));

$digits = explode('+', $input);

sort($digits, SORT_NUMERIC);

if(count($digits) == 0){
    echo $digits[0] . "\n";
}else{
    for($index = 0; $index < count($digits); $index++){
        if($index == count($digits)-1){
            echo $digits[$index] . "\n";
        }else{
            echo $digits[$index] . "+";
        }
    }
}