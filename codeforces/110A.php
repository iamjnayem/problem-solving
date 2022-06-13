<?php

function isLuckyNumber($str){
   $n = (int)$str;

   $c = 0;
   for(; $n > 0; $n = (int)($n / 10)){
    if(($n % 10 == 4) || ($n % 10 == 7)){
        $c++;
    }
   }

   if($c == 4 || $c == 7){
    echo "YES" . "\n";
   }else{
    echo "NO". "\n";
   }
}


$str = trim(fgets(STDIN));
echo isLuckyNumber($str) . "\n";