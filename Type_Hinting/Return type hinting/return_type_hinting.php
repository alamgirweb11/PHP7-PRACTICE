<?php 
// return type hinting in php
// declare(strict_types=1);
function sum($a,$b): int{
	 return $a+$b;
}
var_dump(sum(12,8.5));
// for see the real result of this function we have to use strict_types=1 function for ignore the loosely type of php

// right example for integer number
function sum1($m,$n):int{
	         return $m+$n;
}
var_dump(sum1(2,5)); 