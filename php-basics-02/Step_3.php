<?php
function swap (&$var1, &$var2){
    $num = $var1;
    $var1 = $var2;
    $var2 = $num;
}
$var1 = 32;
$var2 = 45;
echo "Before swap: var1 = $var1, var1 = $var2\n";
swap($var1, $var2);
echo "After swap: var1 = $var1, var2 = $var2";
?>