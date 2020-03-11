<?php 
// Conditional function
// if condition is not true the function won't be run 
$condition=true;
if ($condition) {
	function func1(){
		  echo "It's run for the cause of condition is true.<br>";
	}
}
if($condition)func1();
if ($condition) {
          function func2(){
          	      echo "This is the second value of conditional function.";
          }
}
func2();
