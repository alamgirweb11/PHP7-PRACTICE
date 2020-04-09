<?php
// array to string convertion by using implode(glue, pieces) function
$array=["Name","Email","Password"];
echo implode(", ", $array)."<br>";
echo implode("-", $array)."<br>";
echo implode(" ", $array);
 ?>