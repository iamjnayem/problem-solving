<?php

$array = new  SplFixedArray(10);

for($i = 0; $i < 10; $i++){
    $array[$i] = $i+1;
}

for($i = 0; $i < 10; $i++){
    echo $array[$i] . "\n";
}


echo $array[12] . "\n";