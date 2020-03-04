<?php 
// Null coalescing operators

// Example of if...else statements
if(isset($_POST['action'])){
	          $action=$_POST['action'];
}else{
	     $action="Default";
}
echo $action,"<br>";
// convert the statement in null coalescing operators
$action=$_POST['action']??"Default value";
echo $action;