<?php 
 // return type hinting with array
declare(strict_types=1);
function value():array{
       return['a','b','c'];
}
function value2():array{
	      return "Wrong Value!";
}
try{
	      var_dump(value());
	      echo "<br>";
	      var_dump(value2());
}catch(Error $e){
	    echo "Error: ".$e->getMessage();
}