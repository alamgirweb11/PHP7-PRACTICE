<?php
$dsn="mysql:host=localhost;dbname=testdb1";
$user="root";
$pass="";
$dbh=new PDO($dsn,$user,$pass); 
function readData($dbh){
	  $sql = 'SELECT name, colour, calories FROM fruit';
	  try{
	  	  $stmt=$dbh->prepare($sql);
	  	  $stmt->execute();
	  	  // bind by column number
	  	  $stmt->bindColumn(1, $name);
	  	  $stmt->bindColumn(2, $colour);
	  	  // bind by column name
	  	  $stmt->bindColumn('calories',$cals);
	  	  while($row = $stmt->fetch(PDO::FETCH_BOUND)){
	  	  	  $data = $name. "\t" .$colour ."\t". $cals. "\n";
	  	  	  print $data; 
	  	  }
	  }
	  catch(PDOException $e){
	  	   print $e->getMessage();
	  }
}
readData($dbh);