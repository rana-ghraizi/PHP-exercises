<?php
function squareRoot ($num){
    $x = $num;
    $y = 1;
    while ($x > $y){
        $x = ($x + $y) / 2;
        $y = $num/$x;
    }
    return $x;
}
echo squareRoot(16) . "\n";
echo squareRoot(36) . "\n";
echo squareRoot(12) . "\n";

?>