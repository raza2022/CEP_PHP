<?php
session_start();
$_SESSION['userid'] = 10;
$_SESSION['email'] = "abc@domain.com";
$_SESSION['role'] = "admin";
header("Location: inbox.php");
?>