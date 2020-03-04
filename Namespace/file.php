<?php 
include('file1.php');
include('file2.php');

// call to the file1
echo "<h3>namespace file1</h3>";
echo file1\a,"<br>";
echo file1\func1(),"<br>";
$obj=new file1\test;
$obj->sayHello();

// call to the file2
echo "<h3>namespace file2</h3>";
echo file2\a,"<br>";
echo file2\func2(),"<br>";
$obj=new file2\test1;
$obj->sayBye();