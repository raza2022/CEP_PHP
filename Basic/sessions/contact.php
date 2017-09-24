<?php
include('functions.php');

if(!isset($_SESSION['basic_info']))
{
    header("location: basic_info.php");
}
?>

<form action="submit.php" method="POST">
<label for="">Address</label>
<input type="text" name="address">
<br>
<label>City</label>
<input type="text" name="city">
<br>
<label for="">Country</label>
<input type="text" name="country">
<br>
<input type="submit" name="contact_info" value="submit">
</form>
<<a href="basicinfo.php">Go Back To Basic Info</a>
<?php
printErrors();
?>
