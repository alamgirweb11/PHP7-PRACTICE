<?php 
const a="First Element";
echo a,"<br>";
define("Check", "Hello test"); //define use for pre-declare 
const Test="Hello Constant"; 
echo Check,"<br>"; //output:Hello test
echo Test,"<br>";  //output:Hello Constant
// constant is a global scope for example
const TEST="Function Testing";
function test(){
	         echo TEST;
}
test();