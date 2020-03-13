<?php 
// array_diff function
$arr=["a"=>"red","green","blue","purple"];
$arr1=["b"=>"red","green","blue"];
$diff=array_diff($arr, $arr1);
echo "<h3>array_diff function</h3>";
echo "<pre>";
print_r($diff);
echo "</pre>";
// array_udiff function by callback function
function Udiff($a,$b){
	   if($a===$b){
	   	 return 0;
	   }
	   return ($a>$b)?1:-1;
}
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple"];
$diff=array_udiff($arr, $arr1,"Udiff");
echo "<h3>array_udiff function</h3>";
echo "<pre>";
print_r($diff);
echo "</pre>";
// array_diff_assoc function 
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"red","b"=>"green","blue","purple"];
$diff=array_diff_assoc($arr, $arr1);
echo "<h3>array_diff_assoc function</h3>";
echo "<pre>";
print_r($diff);
echo "</pre>";
// array_diff_uassoc function by callback function
function uassoc($a,$b){
	 if($a===$b){
	 	  return 0;
	 }
	 return ($a>$b)?1:-1;
}
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"red","b"=>"green","blue","purple"];
$diff=array_diff_uassoc($arr, $arr1,"uassoc");
echo "<h3>array_diff_uassoc function</h3>";
echo "<pre>";
print_r($diff);
echo "</pre>";
// array_udiff_assoc function by callback function
function udiffAssoc($a,$b){
	     if ($a===$b) {
	     	return 0;
	     }
	     return ($a>$b)?1:-1;
}
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"light-red","b"=>"green","c"=>"blue","d"=>"purple"];
$diff=array_udiff_assoc($arr, $arr1,"udiffAssoc");
echo "<h3>array_udiff_uassoc function</h3>";
echo "<pre>";
print_r($diff);
echo "</pre>";
// array_udiff_uassoc function by callback function
function udiffKey($a,$b){
	     if ($a===$b) {
	     	return 0;
	     }
	     return ($a>$b)?1:-1;
}
function udiffValue($a,$b){
	     if ($a===$b) {
	     	return 0;
	     }
	     return ($a>$b)?1:-1;
}

$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"light-red","j"=>"green","c"=>"blue","d"=>"purple"];
$diff=array_udiff_uassoc($arr, $arr1,"udiffKey","udiffValue");
echo "<h3>array_udiff_uassoc function</h3>";
echo "<pre>";
print_r($diff);
echo "</pre>";

// array_diff_key function
$arr=["a"=>"red","b"=>"green","c"=>"purple","d"=>"blue"];
$arr1=["e"=>"red","b"=>"green","n"=>"purple","d"=>"blue"];
$keyDiff=array_diff_key($arr, $arr1);
echo "<h3>array_diff_key function</h3>";
echo "<pre>";
print_r($keyDiff);
echo "</pre>";
// array_diff_ukey function by callback function
function funcUkey($a,$b){
	   if($a===$b)
	   {
	   	return 0;
	   }
	   return ($a>$b)?1:-1;
} 
$arr=["a"=>"red","b"=>"green","c"=>"purple","d"=>"blue"];
$arr1=["e"=>"red","b"=>"green","n"=>"purple","d"=>"blue"];
$keyDiff=array_diff_ukey($arr, $arr1,"funcUkey");
echo "<h3>array_diff_ukey function</h3>";
echo "<pre>";
print_r($keyDiff);
echo "</pre>";
