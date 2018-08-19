<?php
$_fp = fopen("php://stdin", "r");
$n = intval(fgets($_fp));
$arr = explode(" ", trim(fgets($_fp)));
$max = 0;
foreach($arr as $k => $val){
    $buildings = 1;
    $aux = $k;
    while(isset($arr[$aux+1]) && $arr[$aux+1] >= $val){
        $buildings++;
        $aux++;
    }
    $aux = $k;
    while(isset($arr[$aux-1]) && $arr[$aux-1] >= $val){
        $buildings++;
        $aux--;
    }
    //print($buildings * $val . "\n");
    $max = max($max, $buildings * $val);
}
print($max);
?>
