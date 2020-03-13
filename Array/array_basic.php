<?php 
// array basic
// array declare 
$countries=["A"=>"America","B"=>"Bangladesh","C"=>"Canada"];
$countries2=array("A"=>"America","B"=>"Bangladesh","C"=>"Canada");
$array1=["Apple","Banana",true,5.5,5];
 
var_dump($array1);
echo "<pre>";
print_r($countries);
echo "<br>";
print_r($countries2);
echo "<br>";
var_dump($array1);
echo "</pre>";
// 2types of array base on dimension
// 1.single array
$single=["A","1","2"];
echo "Single array<br>";
print_r($single);
echo "<br>";
// 2.Nested array
$nestedArray=[
               ["A"=>"1","B"=>"2","C"=>"3"],
               ["Name"=>"Abir Ahmed","Address"=>"Dhaka","Mobile"=>"0166600"],
               ['A',5.5,'C','Canada']
               ];
echo "Nested array<br>";
echo "<pre>";
print_r($nestedArray);
echo "<br>";

// 3types of array base on index or key
// 1.Numerical array
$numerical1=array("Rayan","Zerry","Jhon");
$numerical2=["1"=>"First Name","2"=>"Last Name"];
echo "Numerical array<br>";
echo "<pre>";
print_r($numerical1);
print_r($numerical2);
echo "<br>";
// 2.Associative array
$Associative=["first"=>"First Name","Second"=>"Last Name"];
echo "Associative array<br>";
echo "<pre>";
print_r($Associative);
echo "<br>";

// 2.Hybrid array
$Hybrid=["first"=>"First Name","Second"=>"Last Name","1"=>"Country"];
echo "Hybrid array<br>";
echo "<pre>";
print_r($Hybrid);
echo "<br>";
// print a specific value
$array3=["Abir","Canada",0.5,"c"=>"cat_id","d"=>"division"];
echo "Print specific value<br>";
print_r($array3[1]);
// From nested array
$nestedArray2=[
               ["A"=>"1","B"=>"2","C"=>"3"],
               ["Name"=>"Abir Ahmed","Address"=>"Dhaka","Mobile"=>"0166600"],
               ['A',5.5,'C','Canada']
               ];
echo "Print specific value<br>";
echo "<pre>";
print_r($nestedArray2[1]);

// print specific value and specific key 
$array4=["Name"=>"Abir Ahmed","Address"=>"Dhaka","Mobile"=>"0166600"];
/*echo "Print only value<br>";
foreach ($array4 as $key=>$value) {
           echo $value,"<br>";
}*/

// echo "Print only key<br>";
//  foreach ($array4 as $key=>$value) {
//            echo $key,"<br>";
//  }

echo "Print only key and value both<br>";
 foreach ($array4 as $key=>$value) {
           echo "$key=>$value<br>";
 }
