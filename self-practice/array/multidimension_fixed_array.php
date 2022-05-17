<?php
$array = new SplFixedArray(100);
for($i = 0; $i < 100; $i++){
    $array[$i] = new SplFixedArray(100);
}

print_r($array);