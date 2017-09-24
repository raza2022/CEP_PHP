<?php
//temp info -> Browser

// checkbox remember me 

setcookie("email","abc@domain.com");

echo "Cookie value is: ".$_COOKIE['email']; //
header("Location: step1.php");
?>