<?php

list($k, $w, $n) = explode(' ', trim(fgets(STDIN)));
$k = (int)$k;
$w = (int)$w;
$n = (int)$n;


$cost = (($n*$n + $n)/2) * $k;


if($w < $cost){
    echo $cost - $w . "\n"; 
}else{
    echo "0". "\n";
}
