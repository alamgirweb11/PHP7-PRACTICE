<?php 
// string to array covertion by using explode(string,delimiter),str_word_count(string,mode) and str_getcsv(input) function
$string="This is string";
echo "<pre>";
print_r(explode(" ", $string));
// another way to covert string to array
echo "Another way to convert array:- <br>";
print_r (str_word_count($string,1));
// convert string to array by using str_getcsv()function
$example1="Name,Email,Password";
print_r(str_getcsv($example1,"-"));
print_r(str_getcsv($example1,""));
 ?>