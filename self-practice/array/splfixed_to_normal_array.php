<?php

$items = 5;
$array = new SplFixedArray($items);
for($i = 0; $i < $items; $i++){
    $array[$i] = $i * 10;
}

$newArray = $array->toArray();
print_r($newArray);
