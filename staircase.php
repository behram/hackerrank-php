<?php


// Complete the staircase function below.
function staircase($n) {

    foreach (range(0,$n-1) as $v) {
        for ($i=0; $i < $n-1-$v; $i++) { 
            echo " ";
        }
        foreach (range(0,$v) as $value) {
            echo "#";
        }
        echo "\n";
    }

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);

