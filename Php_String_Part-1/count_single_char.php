<?php 
// single character count by using count_chars(string,mode) function
$string="Here have some words.";
foreach (count_chars($string, 1) as $key => $value) {
	echo  "<b>".chr($key),"</b> character have $value times in the string.<br>";
}
?>