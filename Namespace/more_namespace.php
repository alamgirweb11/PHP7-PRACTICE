<?php 
// Namespace 1
namespace project1;
const a="Africa";
function func1(){
	  echo "I'm form project1.";
}
class A{
	  public $b="Bangladesh";
	  function test(){
	  	  echo "Hi i'm from Bangladesh.<br>";
	  }
}

// Namespace 2
namespace project2;
const a="America";
function func2(){
	  echo "I'm form project2.";
}
class B{
	  public $c="Canada";
	  function test1(){
	  	  echo "Hi i'm from Canada.<br>";
	  }
}

// call to the project1
echo "<h3>project1 namespace</h3>";
use project1;
echo project1\a,"<br>";
echo project1\func1(),"<br>";
$obj=new project1\A;
$obj->b;
$obj->test();


// call to the project2
echo "<h3>project2 namespace</h3>";
use project2;
echo project2\a,"<br>";
echo project2\func2(),"<br>";
$obj=new project2\B;
$obj->c;
$obj->test1();