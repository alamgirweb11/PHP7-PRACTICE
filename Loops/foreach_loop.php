<?php 
// php foreach loop
// print only value
$Students=["1"=>"Abir","2"=>"Monir","3"=>"Raton"];
foreach ($Students as $Student) {
	echo $Student,"<br>";
}
// print only key
$Students=["1"=>"Abir","2"=>"Monir","3"=>"Raton"];
foreach ($Students as $key=>$Student) {
	echo $key,"<br>";
}
// print key and value both
$Students=["1"=>"Abir","2"=>"Monir","3"=>"Raton"];
foreach ($Students as $key=>$Student) {
	echo $key,'=',$Student,"<br>";
}
// change array elements using reference variable
$countries=["B"=>"Bangladesh","C"=>"Canada","D"=>"Dubai"];
foreach ($countries as &$value) {
	$value=strtoupper($value);
}
echo "<pre>";
print_r($countries);
echo "</pre>";
echo "<br>";