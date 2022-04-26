<?php
$input_string = trim(fgets(STDIN));

if(strlen($input_string) == 1){
    echo strtoupper($input_string) . "\n";
}else{
    $first_char = strtoupper($input_string[0]);
    $rest_chars = substr($input_string, 1);
    echo $first_char . $rest_chars . "\n";
}