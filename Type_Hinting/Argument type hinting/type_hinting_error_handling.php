<?php 
 // type hinting error handling in php
declare(strict_types=1);
function hint(int $a){
	   return $a;
}
try{
	 var_dump(hint(4));
	 echo "<br>";
	 var_dump(hint(4.5));
}catch(Error $e){
	    echo "Error: ".$e->getMessage();
}