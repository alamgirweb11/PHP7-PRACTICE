<?php 
// goto statements
function test(){
	    echo "It's create for goto statements.";
}
for ($i=0; $i < 10; $i++) { 
	if ($i==5) {
	      goto end;
	}
	echo $i,"<br>";
}
end:
test();
 ?>