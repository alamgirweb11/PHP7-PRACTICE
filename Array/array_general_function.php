<?php 
// print array value in different different way
// print value with foreach loop
$countries=["A"=>"America","B"=>"Bangladesh","C"=>"Canada"];
echo "Print value with foreach loop<br>";
foreach ($countries as $key => $value) {
             echo $key."=".$value,"<br>";
}
// print value with while loop and list,each function
$students=["Name"=>"Abir Ahmed","Reg No"=>"123005","Dept"=>"CSE"];
echo "Print value with list and each function and while loop<br>";
while (list($key,$value)=each($students)) {
	echo "$key: $value<br>";
}
// print value with extract function
echo "Print value with extract function<br>";
$studentsInfo=["Name"=>"Abir Ahmed","Reg_No"=>"123005","Dept"=>"CSE"];
extract($studentsInfo);
echo "Name: $Name, Reg_No.: $Reg_No, Dept: $Dept<br>";
// extract function with prefix
echo "extract function with prefix<br>";
$Info=["Abir Ahmed","540025","CSE"];
extract($Info,EXTR_PREFIX_ALL,"a");
echo "Name:$a_0 Reg_No:$a_1 Dept:$a_2<br>";
// print associative array with extract function and foreach loop
echo "associative array with extract function<br>";
$associativeArray=[
                   ["Name"=>"Abir Ahmed","Age"=>20],
                   ["Name"=>"Tutul","Age"=>23],
                   ["Name"=>"Ratul","Age"=>30]
                   ];
         foreach ($associativeArray as $value) {
         	      extract($value);
         	      echo "Name:$Name,Age:$Age<br>";
   }
// foreach loop with list function
$Info=[
	   ["Abir Ahmed",20],
       ["Tutul",23],
       ["Ratul",30]
       ];
  echo "foreach loop with list functionbr>";
  foreach ($Info as list($key,$value)){
             echo "Name:$key,Age:$value<br>";
  }
// count function 
echo "count function<br>";
$arrayCount=["a"=>"One","b"=>"Two","c"=>"Three"];
echo count($arrayCount),"<br>"; //output: 3
// Count function in nested array
$Nested=[
	   ["Abir Ahmed",20],
       ["Tutul",23],
       ["Ratul",30],
       ["Kamal",26]
       ];
// First way
echo count($Nested,1),"<br>";
// second way
echo count($Nested,true),"<br>";
// third way
echo count($Nested,COUNT_RECURSIVE),"<br>";
// know the element number how many times use that 
$countValues=[1,1,1,1,5,43,23,44,3,3,43,43,22];
print_r(array_count_values($countValues));
echo "<br>";
// array_keys and array_values function
$check=["A"=>"America","B"=>"Bangladesh","C"=>"Canada"];
echo "Print array Key<br>";
print_r(array_keys($check));
echo "<br>";
echo "Print array Values";
print_r(array_values($check));
echo "<br>";
// Array sum and array product function
$arraySum=[1,56,3,3,2,6];
echo array_sum($arraySum),"<br>";
$arrayProduct=[5,2];
echo array_product($arrayProduct),"<br>";
// array flip and array reverse function
$arrayFlip=["Apple","Orange","Banana"];
print_r(array_flip($arrayFlip));
echo "<br>";
print_r(array_reverse($arrayFlip));
echo "<br>";
// array_rand and array_suffle function
$arrayFlip=["Apple","Orange","Banana","Coconut","Papaw"];
$array_rand=array_rand($arrayFlip, 2);
// print_r($array_rand);
echo $array_rand[0],"<br>";
echo $array_rand[1],"<br>";
shuffle($arrayFlip);
print_r($arrayFlip);
echo "<br>";
// array_key_exists() and in_array() function 
$arrayKey=["A"=>"Apple","Orange","Banana","Coconut","Papaw"];
$arraykey=array_key_exists("A", $arrayKey);
echo $arraykey?"Yes Apple is available":"Not available","<br>";
echo in_array("Orange",$arrayKey),"<br>";

// Compact Function
$firstname="Abir";
$lastname="Ahmed";
$age=20;
$result=compact("firstname","lastname","age");
print_r($result);
echo "<br>";
// array_unique() function
$numbers=[1,2,4,4,1,3,4,2,4,6,7,8,9,8,7,9];
echo "<pre>";
print_r(array_unique($numbers));
echo "</pre>";
echo "<br>";
// array range() function
$numbers=range(5, 10);
echo "<pre>";
print_r($numbers);