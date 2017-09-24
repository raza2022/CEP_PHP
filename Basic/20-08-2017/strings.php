<?php
// Expert of ONE
// Plus addon
// ()

// Jack of all
// expert of none

//string & Regular Experssion (REGEX)


// $str = "SSUET-CEP"; //set of char
// echo $str[4]; //

// substr
// strstr
// strpos(haystack, needle) 
// strtolower(str)
// strtoupper(string)
// ucwords(str) my name is mubashir -> My Name Is Mubashir
// ucfirst(str) My name is mubashir

//$str = "My name is Mubashir";
//echo substr($str, 3, 10);

$arr = array(1,2,3,4,5,6,7);
$str = "";
foreach ($arr as $value) 
{
	// $str = $str . $value . ",";
	$str .= $value.",";
}
// echo substr($str,0,strlen($str)-1);
echo substr($str,0,-1);

// select * from tablename where id = 10
// select * from tablename where id = 11
// select * from tablename where id = 12

// select * from tablename where id in (10,11,12)
// 10,11,12

?>