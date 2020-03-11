<?php 
// anonymous function in php
$Greeting=function ($name, $greting){
	  return $greting." ".$name."!";
};
echo $Greeting("Abir Ahmed","Good Evening"),"<br>";
// anonymous function with array
$luckyDay=array(
      function(){
      	   echo "today is Monday.<br>";
      },
      function(){
      	   echo "Previous day was Sunday.<br>";
      },
      function(){
      	   echo "Nextday is Tuesday.<br>";
      }
      
 );
$choice=rand(0,2);
$luckyDay[$choice]();
// anonymous function with callback function 
$array=range(1,10);
foreach(array_filter($array,function($val){return $val %2==0;})as $val){
	     echo $val,"<br>";
}