<?php 
// here i create a database table with some record
$dsn="mysql:host=localhost;dbname=testdb1";
$user="root";
$pass="";
   $sql=<<<"table"
        CREATE TABLE IF NOT EXISTS `user`(
`id` INT NOT NULL AUTO_INCREMENT , 
`name` VARCHAR(50) NOT NULL ,
`email` VARCHAR(100) NOT NULL ,
`address` VARCHAR(40) NOT NULL ,
PRIMARY KEY (`id`(4)))
ENGINE = InnoDB;
INSERT INTO `user`(`id`,`name`,`email`,`address`) VALUES(NULL, 'Abir Ahmed','abir@mail.com','Dhaka'),
   (NULL, 'Firoz Mia','firoz@mail.com','Comilla'),
   (NULL, 'Rashed Khan','rashed@mail.com','Dhaka'),
   (NULL, 'Sohag Hosen','sohag@mail.com','Rangpur'),
   (NULL, 'Akash Ahmed','akash@mail.com','Barisal')
table;
   try{
   	   $dbn=new PDO($dsn,$user,$pass);
   	   $dbn->query($sql) or die("Table Create Failed!");
   	   echo "Table Create Success";
   }catch(PDOException $e){
        print "Error! ".$e->getMessage()."<br>";
        die();
   }