<?php 
// Local scope variable 
function method(){
	  $a=5+5;
	  echo "the value of a: $a<br>";
}
method();

// global scope variable
 $a=5;
 $b=15;
 $c=$a+$b;
 function method1(){
 	   global $a,$b,$c;
 	   echo "the equation of c: $c<br>";
 }
 method1();
$x=10;
$y=10;
function method2(){
	  $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}
method2();
echo $z,"<br>";

// Static variable
function printNum(){
	  static $x=1;
	  echo $x,"<br>";
      $x++;
}
printNum();
printNum();
printNum();
printNum();
printNum();
