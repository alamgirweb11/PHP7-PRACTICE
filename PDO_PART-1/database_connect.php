<?php 
// dsn= data sour name
// database connect
// $DSN='mysql:host=localhost;databasename=core_php';
$dsn="mysql:host=localhost";
$user="root";
$password="";
try{
	 $dbcon=new PDO($dsn, $user, $password);
	 echo "Connection Success.";
}catch(PDOException $e){
	  print "Error!: ".$e->getMessage()."<br>";
	  die();
}

 ?>