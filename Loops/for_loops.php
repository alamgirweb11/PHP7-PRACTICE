<?php 
// for loop example
// print 1-10 numbers
echo "Print 1-10<br>";
for($a=1; $a<=10; $a++){
	       echo $a,"<br>";
}
// another way to declare for loop
echo "Print 1-10<br>";
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i,"<br>";
}
// print 2-10 even numbers
echo "Print 2-10<br>";
for($a=2; $a<=10; $a+=2){
	       echo $a,"<br>";
}
// print 1-9 odd numbers
echo "Print 1-9<br>";
for($a=1; $a<=10; $a+=2){
	       echo $a,"<br>";
}
// print 10-1 numbers
echo "Print 10-1<br>";
for($a=10; $a>0; $a--){
	       echo $a,"<br>";
}