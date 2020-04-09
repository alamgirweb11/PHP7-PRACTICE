<?php 
// see the total word number by using str_word_count(string,mode) and count(explode(delimiter, string)) function
$string="This is double quoted string.";
echo "Total words is ".str_word_count($string,0)."<br>";
// another way to know total words
echo "Total words is ".count(explode(" ",$string));
 ?>