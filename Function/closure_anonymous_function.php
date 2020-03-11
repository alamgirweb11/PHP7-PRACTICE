<?php 
// closure anonymous function in php
$name="Abir Ahmed";
$result=function() use($name){
	   echo "Welcome Mr. " .$name;
};
$result();