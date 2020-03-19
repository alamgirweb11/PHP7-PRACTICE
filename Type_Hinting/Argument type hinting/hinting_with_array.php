<?php 
 // type hinting with array
declare(strict_types=1);
function hint(array $a){
	       return $a;
}try{
	   echo "<pre>";
	   print_r(hint([5,6,7.5]));
	   echo "</pre>";
        echo "<br>";
        var_dump(hint(10));
}catch(Error $e){
	   echo "Error: ".$e->getMessage();
}