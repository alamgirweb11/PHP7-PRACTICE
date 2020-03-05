<?php 
// Variable variables declaration
$city="Dhaka";
$$city="Dhaka is the capital of Bangladesh.";
echo $Dhaka,"<br>"; //Output:Dhaka is the capital of Bangladesh

// Second Example of variable variables
$Bar="a";
$Foo="Bar";
$World="Foo";
$Hello="World";
$a="Hello";
echo $a,"<br>"; //output:Hello
echo $$a,"<br>"; //output:World
echo $$$a,"<br>"; //output:Foo
echo $$$$a,"<br>"; //output:Bar
echo $$$$$a,"<br>"; //output:a

// Second Example of variable variables
$price_for_saturday=10;
$price_for_sunday=20;
$price_for_monday=30;
$today="sunday";
$price_for_today=${'price_for_'.$today};
echo $price_for_today; //Output:20PHP Reference Variable 