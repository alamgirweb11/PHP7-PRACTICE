<?php 
// Database connection check
$dsn="mysql:host=localhost;dbname=testpdo";
$user="root";
$pass="";
// create database table
  $sql=<<<"table"
			CREATE TABLE `students` ( 
					    `id` INT NOT NULL AUTO_INCREMENT , 
					    `name` VARCHAR(20) NOT NULL , 
					    `email` VARCHAR(100) NOT NULL , 
					    `mobile` VARCHAR(20) NOT NULL , 
					    PRIMARY KEY (`id`(4))) 
			ENGINE = InnoDB;
			table;
try{
	  $db=new PDO($dsn, $user, $pass);
	  $db->query($sql) or die("Table Create Failed!"); 
	  echo "Database Table Create Success.";
}catch(PDOException $e){
	   print "Error! ".$e->getMessage()."<br>";
	   die();
}

 ?>