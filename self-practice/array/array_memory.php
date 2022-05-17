<?php

//for normal array
$start_memory = memory_get_usage();
$array = range(1,100000);
$end_memory = memory_get_usage();
echo ($end_memory - $start_memory)." bytes\n";


//for fixed size array

$items = 100000;
$start_memory = memory_get_usage();
$array = new SplFixedArray($items);
for($i = 0; $i <$items; $i++){
    $array[$i] = $i;
}

$end_memory = memory_get_usage();

$memory_consumed = ($end_memory - $start_memory) / (1024 * 1024);
$memory_consumed = ceil($memory_consumed);

//results sometimes maybe negative due to garbage collector
echo "memory = $memory_consumed MB" . "\n";
