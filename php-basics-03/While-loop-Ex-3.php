<?php
$text = "happy beautiful happy lines pear gin happy lines rock happy lines pear ";
$word = "happy";

$words = explode(" ", $text);

$count = 0;
$x = 0;

while ($x < count($words)){
    if (strtolower($words[$x]) == strtolower($word)){
        $count++;
    }
    $x++;
}
echo "The word '$word' appears in the text $count times.";

?>