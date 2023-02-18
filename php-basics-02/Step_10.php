<?php
function isPalindrome ($string){
    if ($string == strrev($string)){
        return "$string is a palindrome";
    } else {
        return "$string is not a palindrome";
    }
}
echo isPalindrome("madam") ."\n";
echo isPalindrome("rana") ."\n";
?>