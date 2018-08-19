<?php

// Complete the hourglassSum function below.
function hourglassSum($a) {

    $totals = [];
    for ($i=0; $i < 4; $i++) {

        for ($j=0; $j < 4; $j++) {

            $totals[] = array_sum([
                $a[$i][$j],
                $a[$i][$j+1],
                $a[$i][$j+2],
                $a[$i+1][$j+1],
                $a[$i+2][$j],
                $a[$i+2][$j+1],
                $a[$i+2][$j+2],
            ]);
        }
    }

    return max($totals);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = hourglassSum($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

