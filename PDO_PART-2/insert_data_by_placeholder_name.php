<?php 
// database connection
$dsn="mysql:host=localhost;dbname=testdb1";
$user="root";
$pass="";
try{
	  $dbh=new PDO($dsn,$user,$pass);
	  $stmt=$dbh->prepare("INSERT INTO user(name,email,address) VALUES (:name,:email,:address)");
	  $stmt->bindParam(':name',$name);
	  $stmt->bindParam(':email',$email);
	  $stmt->bindParam(':address',$address);
	  // insert one row
	  $name="Joy";
	  $email="joy@mail.com";
	  $address="Rangpur";
	  $stmt->execute();
	  echo "Insert first row successfully.";
}catch(PDOException $e){
	       print "Error!: ".$e->getMessage()."<br>";
	   die();
}