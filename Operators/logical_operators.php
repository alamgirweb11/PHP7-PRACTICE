<?php 
// logical Operators
// AND,&,OR,||,!,XOR
$age=20;
if($age>15 AND $age<22){
	       echo "You are young man.<br>"; //output: you are young man.
}else{
	    echo "You are child.<br>";
}
if($age>20 OR $age<15){
	   echo "You are young man.<br>";
}else{
	    echo "This condition is false.<br>"; //output: This condition is false.
}
echo ($age>0 XOR $age<15)?"You are immatured.<br>":"You are matured."; //output: You are immatured.