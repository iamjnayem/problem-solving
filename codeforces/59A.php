<?php

$str = trim(fgets(STDIN));
$cupper = 0;
$clower = 0;

for($i= 0; $i < strlen($str); $i++){
    if(ctype_upper($str[$i])){
        $cupper++;
    }else{
        $clower++;
    }
}

if($cupper > $clower){
    echo strtoupper($str) . "\n";
}else{
    echo strtolower($str). "\n";
}

