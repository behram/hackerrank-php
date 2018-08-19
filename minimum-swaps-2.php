<?php

// Complete the minimumSwaps function below.
function minimumSwaps($arr) {

    $itemCount = count($arr);

    $swapCounter = 0;
    for ($i=0; $i < $itemCount; $i++) { 
        $currentValue = $arr[$i];
        $previousValue = $i == 0 ? 0: $arr[$i-1];

        $minKey = -1;
        $minValue = PHP_INT_MAX;
        for ($j= $i; $j < $itemCount; $j++) {
            //echo "----".$arr[$j]."\n";

            //echo "p--".$previousValue."\n";
            if($arr[$j] == ($previousValue+1)){
                $minKey = $j;
                $minValue = $arr[$j];
                //echo "break\n";
                break 1; 
            }
            //echo "break after----\n";
            if($minValue > $arr[$j]){
                $minKey = $j;
                $minValue = $arr[$j];
            }
        }
        //echo "after loop\n";
        if($minValue == $currentValue){
            continue;
        }
        //var_dump($minKey, $minValue);
        $arr[$i] = $minValue;
        $arr[$minKey] = $currentValue;
        $swapCounter++;
        //echo implode("-", $arr)."\n";
    }

    //echo $swapCounter."\n";
    return $swapCounter;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$res = minimumSwaps($arr);

fwrite($fptr, $res . "\n");

fclose($stdin);
fclose($fptr);

