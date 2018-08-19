<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {

     sort($arr);
     $count = count($arr);
     $miniSum = 0;
     $maxSum = 0;
     for ($i=0; $i < $count-1; $i++) {
         $miniSum +=$arr[$i];
     }
     for ($i=1; $i < $count; $i++) {
         $maxSum +=$arr[$i];
     }

     echo $miniSum." ".$maxSum."\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);

