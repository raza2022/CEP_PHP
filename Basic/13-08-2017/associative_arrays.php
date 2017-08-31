<?PHP
//associative arrays
// $info[] = 20;
// $info[] = "a-123";
// $info[] = "123456789";
// $info[] = "Abdullah";

// echo "Welcome ".$info[3];

// variable should be NOUN
// function should be verb _> action
$info["age"] = 20;
$info["name"] = "Abdullah";
$info["address"] = "a-123";
$info["phone"] = "123456789";

foreach ($info as $key => $value) 
{
	echo $key." = ". $value."<br>";
}

// echo "Welcome ".$info['name'];
// echo "<pre>";
// print_r($info);
// echo "</pre>";
?>