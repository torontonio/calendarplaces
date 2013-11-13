<?php


function __autoload($class)
{
	echo $class."<br>";
	$class2 = strtolower(str_replace('_', '/', $class)).".php";	
	echo $class2."<br>";
	require_once $class2;
}