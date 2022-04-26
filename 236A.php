<?php

$name = trim(fgets(STDIN));
$chars = str_split($name);
$flipped_chars_array = array_flip($chars);

$message = "";


if (count($flipped_chars_array) % 2 == 0) {
    $message = "CHAT WITH HER!";
} else {
    $message = "IGNORE HIM!";
}

echo $message . "\n";