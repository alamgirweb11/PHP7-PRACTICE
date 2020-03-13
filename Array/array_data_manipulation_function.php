<?php 
// array_filter function
function odd($var){
	   // returns whether the input integer is odd
	return $var %2==1;
}
function even($var){
	   // returns whether the input integer is even
	return $var %2==0;
}
$array=range(1,20);
echo "<pre>";
echo "Odd Number:-<br>";
print_r(array_filter($array, "odd"));
echo "Even Number:-<br>";
print_r(array_filter($array, "even"));
echo "</pre>";
// array_fillter with two built in constant
// 1.filter by key: ARRAY_FILTER_USE_KEY 
// 2.filter by key and value both: ARRAY_FILTER_USE_BOTH
function filterByKey($k){
	 return ($k=="b" || $k=="a");
}
function filterByBoth($j,$k){
	 return ($k=="c" || $j=="Japan");
}
$array=array("a"=>"America","b"=>"Bangladesh","c"=>"Canada","j"=>"Japan");
echo "<pre>";
echo "Value of key fillter:-<br>";
print_r(array_filter($array,"filterByKey", ARRAY_FILTER_USE_KEY));
echo "Value of both:-<br>";
print_r(array_filter($array,"filterByBoth", ARRAY_FILTER_USE_BOTH));
echo "</pre>";
// array_map function
function cube($n){
          return($n*$n*$n);
}
$array=array(1,2,3,4,5);
echo "<pre>";
echo "Print (1-5) cube number:<br>";
print_r(array_map("cube", $array));
echo "</pre>";
// array_map function with more array
function spanish($n,$m){
	   return("The number $n is called $m in Spanish.");
}
$a=array(1,2,3,4);
$b=array("uno","dos","tres","cuatro");
echo "<pre>";
echo "Array Mapping:-<br>";
print_r(array_map("spanish", $a,$b));
echo "</pre>";
// array_walk function
function value($value,$key){
	    echo $value,"<br>";
}
function arrayKey($value,$key){
	    echo $key,"<br>";
}
function valueKey($value,$key){
	    echo $key."=>".$value,"<br>";
}
$array=array("a"=>"America","b"=>"Bangladesh","c"=>"Canada");
echo "Array Value print:-<br>";
array_walk($array, "value");
echo "<br>";
echo "Array Key print:-<br>";
array_walk($array, "arrayKey");
echo "<br>";
echo "Array Value and Key print:-<br>";
array_walk($array, "valuekey");
// nested array to html table generation
function tableHeader($value,$key){
	     echo "<th>".ucfirst($key)."</th>";
}
function print_row($item){
	    echo ('<tr>');
	    echo ('<td>');
	    echo (implode('</td><td>', $item));
	    echo  ('</td>');
	    echo  ('</tr>');
}
function print_cell($item){
	     echo ('<td>');
	     echo ($item);
	     echo  ('</td>');
}
$students=[
         ["id"=>1, "name"=>"Abir", "Dept"=>"CSE"],
         ["id"=>2, "name"=>"Rabbi", "Dept"=>"CSE"],
         ["id"=>3, "name"=>"Kabir", "Dept"=>"CSE"],
         ["id"=>4, "name"=>"Jahid", "Dept"=>"CSE"],
         ["id"=>5, "name"=>"Nabil", "Dept"=>"CSE"]
 ];
 echo "<h3>Html table generation by nest array and array_walk function</h3>";
 echo "<table border='1' table width='500' cellpadding='5' cellspacing='0'>";
 array_walk($students[0], 'tableHeader');
 array_walk($students, 'print_row');
 echo "</table>";
// single array to html table generation
function getTable($value,$key){
	 echo "<tr>";
	 echo "<th>$key</th><td>$value</td>";
	 echo "</tr>";
}
$student=["id"=>1, "name"=>"Abir", "Dept"=>"CSE"];
echo "<h3>Single array to html table generation</h3>";
echo "<table border='1' table width='500' cellpadding='5' cellspacing='0'>";
echo array_walk($student, "getTable");
echo "</table>";
// array_walk recursive function
function test($item,$key){
	  echo "key = $key and value = $item <br>";
}
$fruits=['sweet'=>['a'=>'apple', 'b'=>'banana'],'sour'=>'orange'];
echo "<h3>array_walk_recursive function</h3>";
echo "<pre>";
array_walk_recursive($fruits, "test");
echo "</pre>";
// array_reduce function
function sum($carry, $item)
{
	   $carry += $item;
	   return $carry;
}
function product($carry, $item)
{
	  $carry *= $item;
	  return $carry;
}
$a=array(1,2,3,4);
$b=array();
echo "<h3>array_reduce function</h3>";
echo "<pre>";
var_dump(array_reduce($a, "sum"));
var_dump(array_reduce($a, "product"));
var_dump(array_reduce($b, "sum","No data to reduce"));
echo "</pre>";
// array_chunk function
$array=array('a', 'b', 'c', 'd', 'e');
echo "<h3>array_chunck function</h3>";
echo "<pre>";
print_r(array_chunk($array, 2));
print_r(array_chunk($array, 1, true));
echo "</pre>";
// array_slice function
$array=array("a", "b", "c", "d", "e");
$arra=array_slice($array, 2);
$arra=array_slice($array, -2, 1);
$arra=array_slice($array, 0, 3);
echo "<h3>array_slice function</h3>";
echo "<pre>";
print_r(array_slice($array, 2, -1));
print_r(array_slice($array, 2, -1, true));
echo "</pre>";
// array_column function
$students=[
	  ['id'=>5323, 'name'=> "Abir"],
	  ['id'=>5324, 'name'=> "Rahim"],
	  ['id'=>5325, 'name'=> "Asad"],
	  ['id'=>5326, 'name'=> "Zayed"],
	  ['id'=>5327, 'name'=> "Akash"]
];
echo "<h3>array_column function</h3>";
// print only name and value 
$name=array_column($students, "name");
// print only name and id with third parameter
$nameId=array_column($students, "name","id");
echo "<pre>";
print_r($name);
print_r($nameId);
echo "</pre>";
// array_combine function
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c=array_combine($a, $b);
echo "<h3>array_combine function</h3>";
echo "<pre>";
print_r($c);
echo "</pre>";
// array_merge function
$array1 = array("a","b","c","d");
$array2 = array("e","f","g","h");
$result=array_merge($array1,$array2);
echo "<h3>array_merge function</h3>";
echo "<pre>";
print_r($result);
echo "</pre>";
// array_merge_recursive function
$array1=array("fruits"=>array("favorite"=>"Guava"),3);
$array1=array(5,"fruits"=>array("favorite"=>"Guava","Banana"));
$result=array_merge_recursive($array1, $array2);
echo "<h3>array_merge_recursive function</h3>";
echo "<pre>";
print_r($result);
echo "</pre>";
// array_push function
$push=array("orange","banana");
array_push($push, "apple", "guava");
echo "<h3>array_push function</h3>";
echo "<pre>";
print_r($push);
echo "</pre>";
// array_pop function
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
echo "<h3>array_pop function</h3>";
echo "<pre>";
print_r($fruit);
echo "</pre>";
// array_unshift function
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
echo "<h3>array_unshift function</h3>";
echo "<pre>";
print_r($queue);
echo "</pre>";
// array_shift function
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
echo "<h3>array_shift function</h3>";
echo "<pre>";
print_r($stack);
echo "</pre>";
// array_splice function
$input=array("red","black","green","ash","yellow","blue","Chocolate");
echo "<h3>array_splice function</h3>";
$remove=array_splice($input, 2); //ouptput:green,ash,yellow,blue,Chocolate
$specific=array_splice($input, 1, -1); //output: empty
$count=array_splice($input, 1, count($input),"light-blue"); // output: black
$add=array_splice($input, -1, 1, array("deep-black", "maroon"));
$output=array_splice($input, 3, 0, "purple");
echo "<pre>";
print_r($remove);
print_r($specific);
print_r($count);
print_r($add);
print_r($output);
echo "</pre>";