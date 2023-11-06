<?php
require_once("config/Contador.php");
$c1=new Contador();
$c2=new Contador();

$c1->count();
$c1->count();
$c1->count();

echo $c1->__toString();

$c2->count();
$c2->count();
$c2->count();
$c2->count();

echo $c2->__toString();

echo $c1::countInstance();
echo $c2::countInstance();

?>