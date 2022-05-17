<?php

$array = [1, 2, 3, 4, 5];
print_r($array);

$mixed_array = [];
$mixed_array[0] = 200;
$mixed_array['name'] = "Mixed Array";
$mixed_array[] = 10.65;
$mixed_array[2] = ['I', 'am', 'another', 'array'];

print_r($mixed_array);