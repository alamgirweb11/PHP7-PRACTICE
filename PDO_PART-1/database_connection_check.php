<?php 
// Database connection check
$dsn="mysql:host=localhost;dbname=testpdo";
$user="root";
$pass="";
try{
	  $db=new PDO($dsn, $user, $pass);
	  echo "Database Connection Success.";
}catch(PDOException $e){
	   print "Error! ".$e->getMessage()."<br>";
	   die();
}

 ?>