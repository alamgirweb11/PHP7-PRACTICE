<?php
 // character to array convertion by using str_split(string,mode) function
$char="Hello programmers.";
echo "<pre>";
print_r(str_split($char));
echo "print with 2 words<br>";
print_r(str_split($char,2));
 ?>