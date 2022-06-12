<?php

$n = (int)(trim(fgets(STDIN)));

$str = (trim(fgets(STDIN)));
$count = 0;

if($n == 1) 
    echo "0" . "\n";
else{    
    for($i = 0; $i < strlen($str)-1; $i++){
        if($str[$i] == $str[$i+1]){
            $count++;
        }
    }
    echo $count . "\n";
}
