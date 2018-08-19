<?php



// Complete the countSwaps function below.
function countSwaps($arr) {

    $swapCount = 0;
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                $swapCount++;
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    $last = end($arr);
    echo "Array is sorted in {$swapCount} swaps.\n";
    echo "First Element: {$arr[0]}\n";
    echo "Last Element: {$last}\n";
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

countSwaps($a);

fclose($stdin);

