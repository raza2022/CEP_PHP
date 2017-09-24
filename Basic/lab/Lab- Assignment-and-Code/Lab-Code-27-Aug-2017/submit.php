<?php
session_start();
if(isset($_POST['sub']))
{
    extract($_POST);
    $errors = array();
    if(!$uname)
    {
        $errors[] = "User name is required";
    }
    if(!$email)
    {
        $errors[] = "Email name is required";
    }
    if($email)
    {   
       /*if(filter email false)
       {
        $errors[] = "Email is invalid";
       }
        */
    }
    if(!$pass)
    {
        $errors[] = "Password is required";
    }
    if(!$cpass)
    {
        $errors[] = "Confirm Passwor is required";
    }
    if($pass && $cpass)
    {
        if($pass != $cpass)
        {
            $errors[] = "password does not match";
        }
    }
    if(count($errors)>0)
    {
        $_SESSION['errors']= $errors;
        header("Location:form.php");
    }
    else
    {   
        $_SESSION['loged_in']=true;
        header("Location:welcome.php");
    }

    

}