<?php
 // array_intersect() function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"red","c"=>"blue","d"=>"purple"];
$interSect=array_intersect($arr, $arr1);
echo "<h3>array_intersect function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_uintersect() by callback function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"red","c"=>"blue","d"=>"purple"];
$interSect=array_uintersect($arr, $arr1,"strcasecmp");
echo "<h3>array_uintersect function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_intersect_assoc() function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"red","y"=>"blue","d"=>"purple","k"=>"Black"];
$interSect=array_intersect_assoc($arr, $arr1);
echo "<h3>array_intersect_assoc function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_intersect_uassoc() by callback function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"Chocolate","y"=>"blue","d"=>"purple","k"=>"Black"];
$interSect=array_intersect_uassoc($arr, $arr1,"strcasecmp");
echo "<h3>array_intersect_uassoc function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_intersect_uassoc() by callback function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"Chocolate","y"=>"blue","d"=>"purple","k"=>"Black"];
$interSect=array_intersect_uassoc($arr, $arr1,"strcasecmp");
echo "<h3>array_intersect_uassoc function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_uintersect_uassoc() by callback function
function uKey($a,$b){
	  if ($a===$b) {
	    return 0;
	  }
	  return ($a>$b)?1:-1;
}
function uValue($a,$b){
	  if ($a===$b) {
	  	 return 0;
	  }
	  return ($a>$b)?1:-1;
}
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["a"=>"Chocolate","b"=>"green","y"=>"blue","n"=>"purple","k"=>"Black"];
$interSect=array_uintersect_uassoc($arr, $arr1,"uKey","uValue");
echo "<h3>array_uintersect_uassoc function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_intersect_key() function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["k"=>"black","c"=>"blue","d"=>"purple"];
$interSect=array_intersect_key($arr, $arr1);
echo "<h3>array_intersect_key function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";
// array_intersect_ukey() function
$arr=["a"=>"red","b"=>"green","c"=>"blue","d"=>"purple","e"=>"White"];
$arr1=["k"=>"black","c"=>"blue","n"=>"purple"];
$interSect=array_intersect_ukey($arr, $arr1,"strcasecmp");
echo "<h3>array_intersect_ukey function</h3>";
echo "<pre>";
print_r($interSect);
echo "</pre>";