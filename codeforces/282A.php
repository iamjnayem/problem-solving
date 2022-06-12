<?php
$n =  (int)trim(fgets(STDIN));
$result = 0;


for($i = 0; $i < $n; $i++){
    $str = trim(fgets(STDIN));
    if($str[0] == '+' || $str[2] == '+'){
        $result++;
    }else if ($str[0] == '-' || $str[2] == '-'){
        $result--;
    }
}


echo $result . "\n";