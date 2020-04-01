<?php 
// database connection
$dsn="mysql:host=localhost;dbname=testdb1";
$user="root";
$pass="";
$dbh=new PDO($dsn,$user,$pass);
$sex='male';
$s=$dbh->prepare('SELECT name FROM user WHERE sex=:sex');
$s->bindValue(':sex',$sex); //use bindParam to bind the variable
$sex='female';
$s->execute(); //executed with WHERE sex=female