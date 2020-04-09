<?php 
// how many time use a sinlge word in a string see it by using substr_count(string,'word',mode..) function
$string="This is string.";
echo "Total character is ".strlen($string)."<br>"; //15
echo "is use time ".substr_count($string, "is")."<br>"; //2
// the string is reduced to 's is a string', so it prints 1
echo "is use time ".substr_count($string, "is",3)."<br>"; //1
// the text is reduced to 's i', so it prints 0
echo "is use time ".substr_count($string, "is",3,3)."<br>"; //0
// generate a warning because 6+10=16>15
echo "is use time ".substr_count($string, "is",6,10)."<br>"."<br>"; //0

$string2="abcdabcdabcd";
// prints only 1, because it doesn't count overlapped substrings
echo substr_count($string2, 'abcdabcd');
 ?>