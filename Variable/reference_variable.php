<?php 
// reference variable example
$a="Hey i'm here";
$a=&$b;
$b="Could you see me.";
echo $a,"<br>"; //output:Could you see me. *because it refer with $b and it comes from $b value
echo $b,"<br>";

// assaigning by reference in reference variable
$a="Hi, Mr.";
$b="How are you?";
$b=&$a;
$a="What do you do?";
echo $b,"<br>"; //output:What do you do? *reference variable count from last

// Passing by Reference example
function goodMorning(&$greeting){
	        $greeting="Good Morning Dear.";
}
$greeting1="Sorry it don't reach to you.";
goodMorning($greeting1);
echo $greeting1,"<br>"; //output:Good Morning Dear.

// Returning reference example
$a=15;
function &test(){
	   global $a;
	   return $a;
}
$b=&test();
$b--;
echo $a,"<br>"; //output: 14;
echo $b,"<br>"; //output: 14;

// reference variable with array and foreach loop
$names=array("Abir","Rabbi","Ratul");
foreach ($names as &$name) {
	$name=strtoupper($name);
}
echo "<pre>";
print_r ($names);
echo "</pre>";