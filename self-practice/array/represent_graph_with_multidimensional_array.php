<?php

//represent graph
$nodes = ['A', 'B', 'C', 'D', 'E'];
$graph = [];

foreach($nodes as $xNode){
    foreach($nodes as $yNode){
        $graph[$xNode][$yNode] = 0;
    }
}


foreach($nodes as $xNode){
    foreach($nodes as $yNode){
        echo $graph[$xNode][$yNode] . "\t";
    }
    echo "\n";
}


$graph['A']['C'] = 1;
$graph['C']['A'] = 1;
$graph['A']['E'] = 1;
$graph['E']['A'] = 1;
$graph['A']['B'] = 1;
$graph['B']['A'] = 1;
$graph['B']['E'] = 1;
$graph['E']['B'] = 1;
$graph['B']['D'] = 1;
$graph['D']['B'] = 1;

echo "\n\n\n\n";
foreach($nodes as $xNode){
    foreach($nodes as $yNode){
        echo $graph[$xNode][$yNode] . "\t";
    }
    echo "\n";
}