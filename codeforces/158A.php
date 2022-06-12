<?php
// detect kth score
//count the score which is greater than or equal to kth score


//all inputs and sanitization
$input = trim(fgets(STDIN));
list($n, $k) = explode(' ', $input);
$scores = explode(' ', trim(fgets(STDIN)));


//find kth score
$kthScore = $scores[$k - 1];

//print result
echo participantsForNextRound($scores, $kthScore) . "\n";

function participantsForNextRound($scores, $kthScore)
{
    if ($scores[0] == 0) return 0;
    $count = 0;
    foreach ($scores as $score) {
        if ($score != 0 && $score >= $kthScore) {
            $count++;
        }
        
    }
    return $count;
}
