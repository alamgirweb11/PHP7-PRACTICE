<?php
// argument type hinting in php
// declare(strict_types=1); 
function type(int $a){
	      var_dump($a); //output:1 
}
type(1.1);
// for see the real result of this function we have to use strict_types=1 function for ignore the loosely type of php
// right example for integer number
function sum1(int $m,$n){
	         return $m+$n;
}
var_dump(sum1(2,5)); 