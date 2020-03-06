<?php 
// Global variable example
$x=10;
$y=10;
function test(){
	     global $x,$y;
	     echo $x+$y,"<br>";
}
test();

global $a,$b;
function globalExample(){
	         $a=50;
	         $b=50;
	      echo $a+$b,"<br>";
}
globalExample();
// super global variable 
$x=15;
$y=15;
function test1(){
	  echo $GLOBALS['x']+$GLOBALS['y'],"<br>";
}
test1();
function superGlobalExample(){
	         $GLOBALS['a']=45+30;	       
}
superGlobalExample();
    echo $a;
