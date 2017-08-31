<?php
$info["employee_id"] = 2001;
$info["info"] = array(
				"name"=>"Abdullah",
				"age" => 20
				);
$info["qualification"] = array(
				"degree"=>"BS",
				"from" => "SSUET",
				"year" => "2016"
				);

// echo "<pre>";
// print_r($info);
// echo "</pre>";

foreach ($info as $key => $value) 
{
	// if(gettype($value) == array)
	if(is_array($value))
	{
		foreach ($value as $key2 => $value2)
		{
			echo $key2." = ".$value2."<br>";
		}	
	}
	else
	{
		echo $key." = ".$value."<br>";
	}
	
}

?>