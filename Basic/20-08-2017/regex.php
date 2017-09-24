<?php
$pattern = "/[a-zA-Z0-9]{2,100}@[a-zA-Z0-9]{2,100}\.[a-zA-Z]{2,3}/";
$input = "abc@gmail.com";

if(preg_match($pattern, $input))
{
	echo "matched";
}
else
{
	echo "not matched";
}

?>