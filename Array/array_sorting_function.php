<?php 
// array sort function for accending order
$arra=[1,5,2,4,3,6,4,7];
$arrString=["first","apple","gender"];
sort($arra);
sort($arrString);
echo "<pre>";
print_r($arra);
print_r($arrString);
echo "<br>";
// ignore the case-sensitive by using SORT_NATURAL | SORT_FLAG_CASE
$fruits = array("Orange1", "orange2", "Orange3", "orange20");
sort($fruits,SORT_NATURAL | SORT_FLAG_CASE);
echo "<pre>";
print_r($fruits);
echo "</pre>";
// array rsort function for decending order | reverse array
$arra=[1,5,2,4,3,6,4,7];
$arrString=["first","apple","gender"];
rsort($arra);
rsort($arrString);
echo "<pre>";
print_r($arra);
print_r($arrString);
echo "<br>";
// asort function for print vlaue with index or key
$arra1=["A"=>"America","B"=>"Bangladesh","C"=>"Canada"];
$arra2=["img12.png", "img10.png", "img2.png", "img1.png"];
$arra3=['IMG0.png','img12.png','img10.png','img2.png','img1.png','IMG3.png'];
$arra4=["M"=>"Mango","D"=>"Dark","O"=>"Orange","A"=>"Apple"];
$arra5=["M"=>"Mango","D"=>"Dark","O"=>"Orange","A"=>"Apple"];
$arra6=["M"=>"Mango","D"=>"Dark","O"=>"Orange","A"=>"Apple"];
$arra7=["M"=>"Mango","D"=>"Dark","O"=>"Orange","A"=>"Apple"];
// asort function
asort($arra1);
// natsort function
natsort($arra2);
// natcasesort function
natcasesort($arra3);
// arsort function
arsort($arra4);
// ksort function
ksort($arra5);
// krsort function
krsort($arra6);
echo "<pre>";
print_r($arra1);
print_r($arra2);
print_r($arra3);
print_r($arra4);
print_r($arra5);
print_r($arra6);
echo "</pre>";
echo "<br>";
// usort function Example
function func1($a, $b){
	    if($a==$b){
	    	  return 0;
	    }
	    return ($a<$b)? -1:1;
}
function func2($a, $b){
	    if($a==$b){
	    	  return 0;
	    }
	    return ($a>$b)? -1:1;
}
$a=$b=array("a"=>3,"b"=>2,"d"=>4, "e"=>5);
usort($a, "func1");
echo "Ascending order sorting by callback function";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "Descending order sorting by callback function";
usort($b, "func2");
echo "<pre>";
print_r($b);
echo "</pre>";
// uasort function
function func3($a, $b){
	    if($a==$b){
	    	  return 0;
	    }
	    return ($a<$b)? -1:1;
}
function func4($a, $b){
	    if($a==$b){
	    	  return 0;
	    }
	    return ($a>$b)? -1:1;
}
$a=$b=array("a"=>3,"b"=>2,"d"=>4, "e"=>5);
uasort($a, "func3");
echo "Ascending order sorting by callback function";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "Descending order sorting by callback function";
uasort($b, "func4");
echo "<pre>";
print_r($b);
echo "</pre>";
// uksort function
function func5($a, $b){
	    if($a==$b){
	    	  return 0;
	    }
	    return ($a<$b)? -1:1;
}
function func6($a, $b){
	    if($a==$b){
	    	  return 0;
	    }
	    return ($a>$b)? -1:1;
}
$a=$b=array("a"=>3,"b"=>2,"d"=>4,"e"=>5);
uasort($a, "func5");
echo "Ascending order sorting by callback function";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "Descending order sorting by callback function";
uasort($b, "func6");
echo "<pre>";
print_r($b);
echo "</pre>";
// arrray_multisort function 
$sum1=array(10,50,100,0,500);
$sum2=array(0,5,1,10,8);
array_multisort($sum1,$sum2);
echo "<pre>";
echo "Sum1 result:-<br>";
print_r($sum1);
echo "Sum2 result:-<br>";
print_r($sum2);