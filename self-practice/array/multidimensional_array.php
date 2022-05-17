<?php
$players = [];

$players[] = ['name' => 'ronaldo', 'age' => 31, 'country' => 'portugal', 'team' => 'real-madrid'];
$players[] = ['name' => 'messi', 'age' => 27, 'country' => 'argentina', 'team' => 'barcelona'];
$players[] = ['name' => 'neymar', 'age' => 24, 'country' => 'brazil', 'team' => 'barcelona'];
$players[] = ['name' => 'rooney', 'age' => 30, 'country' => 'england', 'team' => 'man united'];

foreach($players as $index => $player_info){
    echo "Info o player # " . ($index+1) . "\n";

    foreach($player_info as $key => $value){
        echo $key . ": " . $value . "\n";
    }
    echo "\n";
}









