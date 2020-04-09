<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>heredoc</title>
	<!-- bootstrap cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<!-- Example without heredoc method-01 -->
		<?php 
		$students=array("name"=>"Abir Ahmed","mobile"=>"017520000","address"=>"Dhaka,Bangladesh");
		extract($students);
		//print_r($students);
		echo "<h2>Example without heredoc method-01</h2>";
		$table="<table border='1' cellpadding='5'>";
		$table.="<tr>";
		$table.="<th>Name:</th><td>$name</td>";
		$table.="</tr>";
		$table.="<tr>";
		$table.="<th>Mobile:</th><td>$mobile</td>";
		$table.="</tr>";
		$table.="<tr>";
		$table.="<th>Address:</th><td>$address</td>";
		$table.="</tr>";
		$table.="</table>";
		echo $table;
		 ?>
		<!-- Example without heredoc method-02 -->
		<h2>Example without heredoc method-02</h2>
        <table class="table table-bordered table-hover">
        	<tr>
        		<th>Name</th>
        		<th>Mobile</th>
        		<th>Address</th>
        	</tr>
        	<tr>
        		<td><?=$name;?></td>
        		<td><?=$mobile;?></td>
        		<td><?=$address;?></td>
        	</tr>
        </table>
        <!-- Example with using heredoc -->
        <h2>Example with using heredoc</h2>
         <?php 
            echo <<<table
            <table class="table table-bordered">
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

