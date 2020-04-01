<?php 
// database connection
$dsn="mysql:host=localhost;dbname=testdb1";
$user="root";
$pass="";
try{  
	   $dbh=new PDO($dsn,$user,$pass);
	   $stmt=$dbh->prepare("INSERT INTO user (name,email,address)VALUES(?,?,?)");
	   $stmt->bindParam(1,$name);
	   $stmt->bindParam(2,$email);
	   $stmt->bindParam(3,$address);
	   // insert one row
	   $name="Rafi";
	   $email="rafi@mail.com";
	   $address="Barisal";
	   $stmt->execute();
	   echo "Data Insert Success<br>";
	    $name = 'Tareq Rahman';
	    $email = "tareq@mail.com";
	    $address = "Comilla";
	    $stmt->execute();
	    echo "Second data insert Successfully";
}catch(PDOException $e){
       print "Error!: ".$e->getMessage()."<br>";
	   die();
} 