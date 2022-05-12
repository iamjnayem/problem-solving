<?php
function isSubsequence($str1, $str2, $l1, $l2){
    if ($l1 == 0) return true;
    if ($l2 == 0) return false;

    if($str1[$l1-1] == $str2[$l2-1]){
        return isSubsequence($str1, $str2, $l1-1, $l2-1);
    }

    return isSubsequence($str1, $str2, $l1, $l2-1);
}

$input_string = trim(fgets(STDIN));
$base_string = "heidi";

$l1 = strlen($base_string);
$l2 = strlen($input_string);

$result = isSubsequence($base_string, $input_string, $l1, $l2);

if($result){
    echo "YES" . "\n";
}else{
    echo "NO" . "\n";
}
