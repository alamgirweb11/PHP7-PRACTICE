<?php 
// While loops
// print 1-10
echo "Print 1-10 all numbers.<br>";
$a=1;
while($a<=10){
	echo $a,"<br>";
	      $a++;
}
// ahother way to declare while loops
// print 2-10 all even numbers
echo "Print 2-10 all even numbers.<br>";
$a=2;
while($a<=10):
	echo $a,"<br>";
	      $a+=2;
endwhile;