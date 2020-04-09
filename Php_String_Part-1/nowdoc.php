<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nowdoc</title>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<?php 
    // example of nowdoc
$students=array("name"=>"Abir Ahmed","mobile"=>"017520000","address"=>"Dhaka,Bangladesh");
extract($students);
   echo <<<'table'
    <table class='table table-bordered'>
       <tr>
        <th>Name: </th>
        <td>$name</td>
    </tr>
    <tr>
        <th>Mobile: </th>
        <td>$mobile</td>
    </tr>
    <tr>
        <th>Address: </th>
        <td>$address</td>
    </tr>    
    </table>
table;
 ?>
</body>
</html>