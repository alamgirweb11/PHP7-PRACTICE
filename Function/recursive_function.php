<?php 
// recursive function
function own($a){
	  if($a<=10){
	  	  echo "$a<br>";
	  	  own($a+2);
	  }
}
own(2);
// result will be even number 