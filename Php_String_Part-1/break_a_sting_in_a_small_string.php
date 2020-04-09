<?php 
// break a long string in a small string by wordwrap(string) and chunk_split(string) function
$string="The earth is too longer. If anybody travel the earth he/she have to spend lots of time.";
echo wordwrap($string,24,"<br>")."<br>";
// another function to break big string
echo chunk_split($string,10,"<br>");
 ?>