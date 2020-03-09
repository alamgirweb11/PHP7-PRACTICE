<?php 
 // else if statements
$fruits="Mango";
if($fruits=="Apple"){
	         echo "Sorry! Mango is not avaiable.";
}
elseif($fruits=="Banana"){
	echo "Sorry! Mango is not avaiable.";	
}else{
        echo "Try to another shop.<br>";
}

// Another Example of else if statements
$age=16;
if(($age > 0) && ($age<=15)){
 echo "you are child";
}
elseif(($age > 15) && ($age<=25)){
echo "you are Young Man!";
}
elseif($age > 25 && $age<=40){
echo "you are Matured";
}
else
{
echo "Sorry, You are not capable to work";
}