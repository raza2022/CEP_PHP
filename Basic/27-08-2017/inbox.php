<?php
session_start();
if(!isset($_SESSION['userid']) && empty($_SESSION['userid']))
{
	header("location: home.php");
}
else
{
	echo "Inbox of user: <b>".$_SESSION['email']."</b>";
}

?>