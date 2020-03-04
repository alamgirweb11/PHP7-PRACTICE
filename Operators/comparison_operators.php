<?php 
// Example of comparison operators
// ==,!=,===,!==,<,>,<=,>=,<>,<=>
$a=10;
$b=5;
var_dump($a==$b); //Output: false
echo "<br>";
var_dump($a!=$b); //Output: true
echo "<br>";
var_dump($a===$b); //Output: false
echo "<br>";
var_dump($a!==$b); //Output: true
echo "<br>";
var_dump($a<$b);  //Output: false
echo "<br>";
var_dump($a>$b);  //Output: true
echo "<br>";
var_dump($a<=$b); //Output: false
echo "<br>";
var_dump($a>=$b);  //Output: ture
echo "<br>";
var_dump($a<>$b);  //Output: true
echo "<br>";
var_dump($a<=>$b);   //Output: int(1)