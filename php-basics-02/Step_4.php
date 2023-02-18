<?php
function armstrongNumber($num){
    $sum = 0; 
    $x = $num;
    while($x != 0){
        $rem = $x % 10;
        $sum = $sum + $rem*$rem*$rem;
        $x = $x /10;
    }

    if ($num == $sum){
        return "true";
    } else{
        return "false";
    }
}
armstrongNumber(153);
?>
