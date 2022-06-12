<?php

$t = (int)trim(fgets(STDIN));
$min = 0;
$sum = 0;

for($i = 0; $i < $t; $i++){
    list($a, $b) = explode(' ', trim(fgets(STDIN)));
    $a = (int)$a;
    $b = (int)$b;
    $sum += -$a + $b;
    if($sum > $min){
        $min = $sum;
    }    
}

echo "$min" . "\n";