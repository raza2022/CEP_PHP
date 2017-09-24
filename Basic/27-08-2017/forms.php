<?php
//forms 
//URL 
//secure
//hack
//validation
//empty

if(!empty($_GET['error']))
{
	echo "<p style='font-size:10px;color:red;'> ".$_GET['error']."</p>";
}
?>
<!-- w3schools.com > HTML

WEB Graphics Designer
photoshop, illustrator, design

UI Developer
HTML, CSS, JS

Developer

Table 
div
mobile.facebook.com


twitter
bootstrap 
responsive web




web template 
cms

admin panel
frontwebsite
 -->


<form action="submit.php" method="post" name="reg_form" id="reg_form">
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="fullname"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		
		<td colspan="2">
			<input type="submit" name="sbt" value="Submit">
		</td>
	</tr>
</table>
</form>


