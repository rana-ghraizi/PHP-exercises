<?php
$num = 3;
$factorial = 1;
$x = 1;
while ($x <= $num){
    $factorial *= $x;
    $x++;
}
echo "factorial of $num is: $factorial";
?>