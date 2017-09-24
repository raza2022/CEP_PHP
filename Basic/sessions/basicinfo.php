<?php
include('functions.php');

?>

<form action="submit.php" method="POST">
<label for="">Name</label>
<input type="text" name="name" value="<?php echo $_SESSION['postedValues']['name'];?>">
<br>
<label>Email</label>
<input type="text" name="email">
<br>
<label for="">Contact Number</label>
<input type="text" name="contact_number">
<br>
<input type="submit" name="basic_info" value="submit">
</form>
<?php

printErrors();

?>
