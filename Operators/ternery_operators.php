<?php 
// ternery operators
$age=20;
echo ($age>15)?"You are young.<br>":"You are child."; //output: You are young.
$action=(empty($_POST['action']))?"Default":$_POST['action'];
echo $action,"<br>";
