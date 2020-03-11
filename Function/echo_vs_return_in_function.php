<?php 
// example of echo in function
function add1($x,$y){
	   echo $x+$y,"<br>";
}
function add2($x,$y){
	   echo $x+$y,"<br>";
}
echo "<h3>Example of echo</h3>";
echo add1(5,5)+add2(10,10);
// exmaple of return in function
function add3($x,$y){
	   return $x+$y;
}
function add4($x,$y){
	   return $x+$y;
}
echo "<h3>Example of echo</h3>";
echo add3(5,5)+add4(10,10);
