<?php 
// here i create a mysql database
$dsn="mysql:host=localhost";
$user="root";
$pass="";
try{
	   $dbn=new PDO($dsn,$user,$pass);
	   $dbn->query('CREATE DATABASE IF NOT EXISTS testdb1') or die('Database create failed!'
	   );
	   echo "Database Create Success";
}catch(PDOException $e){
      print "Error!: ".$e->getMessage()."<br>";
      die();
}