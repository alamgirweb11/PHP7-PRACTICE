<?php 
// return type hinting with object
declare(strict_types=1);
class Test{
	       public $name="Abir Ahmed";
	       public $email="abir@mail.com";
}
function string():Test{
         return new Test;
}
function string1():Test{
	     return "Wrong value!";
}
try{
	   var_dump(string());
	   echo "<br>";
	   var_dump(string1());
}catch(Error $e){
	      echo "Error: ".$e->getMessage();
}