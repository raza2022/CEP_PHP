<?php

// $arr = array(10,20,30,40,50);
// foreach ($arr as $index => $value) 
// {
// 	echo $index." = ".$value."<br>";
// }
$arr[] = array(1,2,3); 
$arr[] = array(4,5,6);
$arr[] = array(7,8,9);
//$arr[2][1]
echo $arr[2][0];
echo $arr[2][1];
echo $arr[2][2];
// unset()
foreach ($arr as $index => $value) 
{
	# code...
}


foreach ($arr as $index => $value) 
{
	foreach ($value as $val) {
		echo $val."<br>";
	}
}

?>