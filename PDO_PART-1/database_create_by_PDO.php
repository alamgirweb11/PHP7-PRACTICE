<?php 
$dsn="mysql:host=localhost";
$user="root";
$pass="";
try{
	  $db=new PDO($dsn,$user,$pass);
	  $db->query('Create database if not exists testpdo') or die("Database Created Failed!");
	  echo "Database Create Success.";
}catch(PDOException $e){
	      print "Error!: ".$e->getMessage()."<br>";
	      die();
}

 ?>