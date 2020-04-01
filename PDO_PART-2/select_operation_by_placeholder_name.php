<?php 
// database connection
$dsn="mysql:host=localhost;dbname=testdb1";
$user="root";
$pass="";
try{
	   $dbh=new PDO($dsn,$user,$pass);
	   $stmt=$dbh->prepare("SELECT * FROM user WHERE id=:id");
	   $stmt->bindParam("id",$id);
	   // show one row from database
	   $id=1;
	   $stmt->execute();
	   echo "<pre>";
	   print_r($stmt->fetch(PDO::FETCH_ASSOC));
	   echo "<pre>";
}catch(PDOException $e){
	   print "Error!: ".$e->getMessage()."<br>";
	   die();
}