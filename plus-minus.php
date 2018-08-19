<?php

// Complete the plusMinus function below.
function plusMinus($arr) {

    $negativeCount = 0;
    $positiveCount = 0;
    $zeroCount = 0;
    foreach ($arr as $v) {
        if($v<0){
            $negativeCount++;
        }elseif($v>0){
            $positiveCount++;
        }else{
            $zeroCount++;
        }
    }
    $total = count($arr);
    echo $positiveCount/$total."\n";
    echo $negativeCount/$total."\n";
    echo $zeroCount/$total."\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);

