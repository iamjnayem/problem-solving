<?php

//input two d array

$arr = [];
for($i = 0; $i < 5; $i++){
    $row = trim(fgets(STDIN));
    $arr[] = explode(' ', $row);
}

$r = 0;
$c = 0;

//calculate current location
for($i = 0; $i < 5; $i++){
    for($j = 0; $j < 5; $j++){
        if($arr[$i][$j] == 1){
            $r = $i;
            $c = $j;
        }
    }
}

//minimum move count
echo abs(2-$r) + abs(2-$c) . "\n";
