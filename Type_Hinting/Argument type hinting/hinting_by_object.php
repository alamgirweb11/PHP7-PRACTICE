<?php 
 // type hinting by object 
declare(strict_types=1);
class Test{
	     public $name="Abir Ahmed";
	     public $email="abir@mail.com";
}
function type(Test $a){
	  return $a;
}try{
	   var_dump(type(new Test));
	   echo "<br>";
	   var_dump(type("Hello object"));
}catch(Error $e){
              echo "Error: ".$e->getMessage();
}