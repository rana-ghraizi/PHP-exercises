<?php
function isPowerOfTwo($num){
    if(($num & ($num - 1)) == 0){
        return "$num is a power of 2";
    } else {
        return "$num is not a power of 2";
    }

}
print isPowerOfTwo(4) . "\n";
print isPowerOfTwo(7) . "\n";
print isPowerOfTwo(16) . "\n";
?>