<?php

list($n, $k) = explode(' ', trim(fgets(STDIN)));
$n = (int)$n;
$k = (int)$k;



for($i = 0; $i < $k; $i++){
    $lastDigit = $n % 10;
    if($lastDigit != 0){
        $n = --$n;
    }else{
        $n = $n / 10;
    }
}

echo $n . "\n";