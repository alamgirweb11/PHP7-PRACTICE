<?php 
// lambda function in php
function getMessage($message){
	   echo $message();
}
getMessage(function(){
	  return "Hello programmers.";
});