<?php 
// Type operators
// instanceof
class Myclass{

} 
class AnotherClass{

}
$obj=new Myclass;
var_dump($obj instanceof Myclass); //output:bool(true)
echo "<br>";
var_dump($obj instanceof AnotherClass); //output:bool(false)