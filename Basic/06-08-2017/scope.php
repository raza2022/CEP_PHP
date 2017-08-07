<?php

//variable scope
// $a = 10;
// function showvalue()
// {
// 	global $a;
// 	echo "value of a is: ";
// 	echo $a;
// 	$a = 20;
// }
// showvalue();
// echo "After calling: ".$a;



function showvalue()
{
	$a = 10;
	echo "inside: ".$a;
}
showvalue();
global $a;

echo "outside: ".$a;



?>