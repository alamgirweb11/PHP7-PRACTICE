<?php 
// php function 
function sayHello(){
	  echo "Hello Programmers welcome to function.<br>";
}
sayHello();
// receive argument by function parameter
function sum($a,$b){
	    $result=$a+$b;
	    echo "Result is ".$result."<br>";
}
sum(10,10);
// declare one parameter for received all argument
function product(...$a){
	   $result=$a[0]*$a[1];
	   echo "Result is ".$result."<br>";
}
product(10,10);
// receive agrument without parameter by using func_get_args() function
function getSum(){
	  $a=func_get_args();
	  $result=$a[0]+$a[1];
	  echo "Result is ".$result."<br>";
}
getSum(10,40);
// by func_get_arg() function
function getAnother(){
	      $a=func_get_arg(0);
	      $b=func_get_arg(1);
	      $result=$a-$b;
	  echo "Result is ".$result."<br>";
}
getAnother(120,70);
// get more parameter value by using one argument
function receive($a,$b){
	  $result=$a+$b;
	  echo "Result is ".$result."<br>";
}
$value=[40,40];
receive(...$value);
// see the all argument amount by using func_num_args() function

function test(){
	   $a=func_num_args();
	   echo "Amount of argument : $a";
}
test(1, 9, 7, 3, 4, 5);