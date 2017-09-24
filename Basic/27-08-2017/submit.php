<?php
//client side -> JS
//server side -> PHP
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// echo $_POST['fullname'];
// echo $_POST['email'];
// echo "<br>".md5($_POST['password']); //hashing algo
$pattern = "/^[a-zA-Z]{2,}$/";
if(preg_match($pattern, $_POST['fullname']))
{
	echo "invalid name";
}

if(isset($_POST['fullname']) && !empty($_POST['fullname']))
{
	echo "fullname is not empty";
}
else
{
	// echo "fullname is empty";
	header("Location: forms.php?error=fullname is empty");
}
?>
<!-- password
credit card/debit card

xxxx-xxxx-xxxx-1234 -->
<!-- http://localhost/27-08-2017/
submit.php?
fullname=dsfoilasjgl
&email=asjlfklaj%40hotmail.com
&password=ejsdkfhskdjlghl
&sbt=Submit -->