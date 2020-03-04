<?php
// 1.Unqualified namespace

 // unqualified namespace do call to the function without using namespace 
namespace Colors\White;
function color(){
	echo "Color is White<br>";
}
color(); 

// 2.Qualified namespace
// Qualified namespace call a function or constant atlest using namespace path

namespace Foods\Apples;
function foods(){
	  echo "This is Apple.<br>";
}
use Foods\Apples;
foods();

// Fully Qualified Namespace

// Qualified namespace call a function or constant atlest using namespace fullpath or namespace aliasing
namespace Flowers\Rose;
function flowers(){
	  echo "This is Rose.";
}

/*use Flowers\Rose as rose; //call the function by using namespace aliasing
rose\flowers();*/

use Flowers\Rose; //call the function by using namespace full path
flowers();