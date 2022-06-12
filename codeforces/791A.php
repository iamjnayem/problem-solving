<?php
//input
list($a, $b) = explode(' ', trim(fgets(STDIN)));
$c = 0;
while(true){
    $a = $a * 3;
    $b = $b * 2;
    $c++;
    if($a > $b){
        break;
    }
}

echo $c . "\n";
