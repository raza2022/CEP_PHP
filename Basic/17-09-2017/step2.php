<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

session_start();
$_SESSION['fullname'] = $_POST['fullname'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];

?>

<h1>Shipment Info</h1>
<form action="step3.php" method="post">
<table>
	<tr>
		<td>
			<input type="text" name="address">
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="city">
		</td>
	</tr>
	<tr>
		<td>
			<input type="text" name="phone">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" value="Finish">
		</td>
	</tr>
</table>
</form>