<?php 
// php function_within_function
function func1(){
	       function func2(){
	       	 echo "Php function within function";
	       }
}
func1();
func2();