<?php
function isPalindrome ($string){
    if ($string == strrev($string)){
        return 1;
    } else {
        return 0;
    }
}
echo isPalindrome("madam") ."\n";
echo isPalindrome("rana") ."\n";
?>