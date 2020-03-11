<?php 
 // variable function
function func1(){
	  echo "This is variable function func1()<br>";
}
function func2($input=''){
	   echo "In func2() argument '$input' .<br>";
}
function func3($print){
	     echo $print;
}
$first='func1';
$first();
$second='func2';
$second('Hello programmer i am variable function.');
$third='func3';
$third('Hey i am from func3 function.');
