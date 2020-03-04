<?php
// namesapce import
/*include('file1.php');
use User\Data\Info;
$obj=new Info\userData("1","Abir Ahmed");
echo "<pre>";
print_r($obj->getUser());
echo "</pre>";*/

// namesapce import
/*include('file1.php');
use User\Data\Info\userData; //pre declare className
$obj=new userData("1","Abir Ahmed");
echo "<pre>";
print_r($obj->getUser());
echo "</pre>";*/

// namesapce aliasing
include('file1.php');
use User\Data\Info as A; //aliasing namespace as
$obj=new A\userData("1","Abir Ahmed");
echo "<pre>";
print_r($obj->getUser());
echo "</pre>";