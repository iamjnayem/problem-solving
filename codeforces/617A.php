<?php
//Elephant

$targetLoc = (int)trim(fgets(STDIN));

$minimumStep = 0;


while($targetLoc != 0){

    for($i = 5; $i >= 1; $i--){
        $minimumStep = $minimumStep + floor($targetLoc / $i);

        $targetLoc = $targetLoc % $i;
        if($targetLoc == 0){
            break;
        }
    }
}

echo $minimumStep . "\n";