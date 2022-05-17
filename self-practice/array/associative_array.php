<?php

$student_info = [];
$student_info['name'] = "Adiyan";
$student_info['age'] = 11;
$student_info['class'] = 6;
$student_info['roll'] = 71;
$student_info['contact'] = 'info@adiyan.com';

foreach($student_info as $key => $value){
    echo $key . ": " . $value . "\n";
}

