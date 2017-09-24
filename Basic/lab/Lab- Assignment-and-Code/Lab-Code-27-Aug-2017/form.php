<?php
session_start();
if(isset($_SESSION['loged_in']))
{
    header("Location:welcome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="submit.php" method="post">


        <label>Username: </label>
        <input type="text" name="uname"><br>
        <label>Email: </label>
        <input type="email" name="email"><br>
        <label>Password: </label>
        <input type="password" name="pass"><br>
        <label>Confirm Password</label>
        <input type="password" name="cpass"><br>
        <button type="submit" name="sub">Submit</button>

    </form>
    <?php
    if(isset($_SESSION['errors']))
    {
        foreach($_SESSION['errors'] as $key => $error)
        {
            echo $error."<br>";
        }
        unset($_SESSION['errors']);
    }
    ?>
</body>
</html>
