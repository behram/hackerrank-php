<?php

// Complete the diagonalDifference function below.
function diagonalDifference($arr) {

    $leftDiaSum = 0;
    $rightDiaSum = 0;
    $rowCount = count($arr);
    foreach (range(0, $rowCount-1) as $i) {
        $leftDiaSum += $arr[$i][$i];
        $rightDiaSum+= $arr[$rowCount-$i-1][$i];
    }
    
    return abs($leftDiaSum-$rightDiaSum);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr == array();

for ($i = 0; $i < $n; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

