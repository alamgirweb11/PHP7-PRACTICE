<?php 
// variable method in php
class Test{
	     function test1(){
	     	   $name = 'test2';
	     	   $this->$name();
	     }
	     function test2(){
	     	   echo "This is test2 name.";
	     }
}
$obj=new Test();
$funcName="test1";
$obj->$funcName();