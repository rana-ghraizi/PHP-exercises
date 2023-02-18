<?php
function greaterFn ($num) {
    if ($num > 30){
        return "$num is greater than 30\n";
    } else if ($num > 20){
        return "$num is greater than 20\n";
    } else if ($num > 10) {
        return "$num is greater than 10\n";
    } else {
        echo "$num is less than 10\n";
    }
}
echo greaterFn (35);
echo greaterFn (25);
echo greaterFn (15);
echo greaterFn (5);
?>