<?php

//$array =[1 => 10, 2 => 100, 3 => 1000, 4 => 10000];
//$splArray = SplFixedArray::fromArray($array);
//print_r($splArray);

$normal_array = [1 => 10, 2 => 20, 3 => 30, 970 => 40, 630 => 50];
$fixed_array = SplFixedArray::fromArray($normal_array);
print_r($fixed_array);