<?php
//array related functions
// in_array(needle, haystack)
// array_search(needle, haystack)
// array_replace(array, array1)
// array_push(array, var)
// array_pop(array)
// array_diff(array1, array2)
// asort
// arsort
// ksort
// krsort(array)

// sort(array) //index array
// rsort(array)

// $arr = array(2,5,7,10,13,19,25);
// $temp = in_array(11,$arr);
// $temp = array_search(11,$arr);
// var_dump($temp);
// if(in_array(10,$arr))
// {
// 	echo "10 exists in this array";
// }
// else
// {
// 	echo "not exists";
// }
// $arr1 = array(1,2,3,4,5);
// $arr2 = array(4,5,6,7,8);
// $result = array_diff($arr1, $arr2);
// $result = array_merge($arr1, $arr2);
// $result = array_intersect($arr1, $arr2);
// echo "<pre>";
// print_r($result);
// echo "</pre>";


$arr = array(1,2,3,4,5);
array_push($arr, 10);
echo "<pre>";
print_r($arr);
echo "</pre>";

echo array_pop($arr);
echo array_pop($arr);
echo array_pop($arr);

// array_walk

A block Third floor 03 -> Madni Lab

AT-03

?>
fb/cep_php_mysql


bubble sort 

$arr = array(8,13,7,19,21,43,20,18);
