<?php
function isPrime ($n) {
    $x =2;
    for ($x = 2; $x < $n ;$x++){
        if ($n % $x == 0){
            return 0;
        } 
    }
    return 1;
}
$a = isPrime(3);
if ($a == 0){
    echo "This is not a Prime Number \n"; 
} else {
    echo "This is a Prime Number \n";
}
?>