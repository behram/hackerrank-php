<?php

// Complete the compareTriplets function below.
function compareTriplets($a, $b) {

    $alicePoint = 0;
    $bobPoint = 0;

    foreach (range(0,2) as $i) {
        if($a[$i] > $b[$i]){
            $alicePoint++;
        }elseif($a[$i] < $b[$i]){
            $bobPoint++;
        }
    }

    return [$alicePoint, $bobPoint];

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);

