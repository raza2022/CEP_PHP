<?php
include('session.php');

function printErrors()
{   
    if(isset($_SESSION['errors']))
    {
        foreach($_SESSION['errors'] as $value)
        {
            echo $value."<br>";
        }
    }
    unset($_SESSION['errors']);
}

