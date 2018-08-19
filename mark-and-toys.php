<?php


// Complete the maximumToys function below.
function maximumToys($prices, $k) {

    $newPrices = [];
    foreach ($prices as $key => $value) {
        if($value<$k+1){
            $newPrices[] = $value;
        }
    }
    $prices = $newPrices;
    $priceCount = count($prices);
    sort($prices);

    $sum = 0;
    $counter = 0;
    foreach ($prices as $price) {
        $sum = $sum+$price;
        echo $sum."\n";
        if($sum>$k){
            break;
        }
        $counter++;
    }
    echo $counter;
    return $counter;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $prices_temp);

$prices = array_map('intval', preg_split('/ /', $prices_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = maximumToys($prices, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

