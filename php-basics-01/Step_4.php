<?php
$name = "Rana";
$position = "programmer";
$github_url = "https://github.com/gk-git";

// Using the double quotation " and the .
echo "Hello, I'm ". $name .", I'm a " . $position . " please check my github link " . $github_url . ".\n";
// Using the double quotation " and without using the .
echo "Hello, I'm $name, I'm a $position please check my github link $github_url.\n";
// Without using the double quotation ".
echo 'Hello, I\'m '. $name .', I\'m a '. $position . ' please check my github link ' . $github_url . '.';
?>