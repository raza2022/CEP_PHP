<?php
session_start();
if(isset($_POST['basic_info']))
{
    extract($_POST);
    //Validation
    $errors = array(); 
    if(!$name)
    {
        $errors[] = "Name is Required";
    }
    if(!$email)
    {
        $errors[] = "Email is Required";
    }
    
    if(!$contact_number)
    {
        $errors[] = "Contact is Required";
    }

    if(empty($errors))
    {
        $_SESSION['basic_info'] = $_POST;
        header("location: contact.php");
    }
    else
    {   
        $_SESSION['postedValues'] = $_POST;
        $_SESSION['errors']=$errors;
        header("location: basicinfo.php");
    }
}

// CONTACT INFO

if(isset($_POST['contact_info']))
{
    extract($_POST);
    //Validation
    $errors = array(); 
    if(!$address)
    {
        $errors[] = "address is Required";
    }
    if(!$city)
    {
        $errors[] = "City is Required";
    }
    
    if(!$country)
    {
        $errors[] = "Country is Required";
    }

    if(empty($errors))
    {
        $_SESSION['contact_info'] = $_POST;
        header("location: shipping.php");
    }
    else
    {   $_SESSION['errors']=$errors;
        header("location: contact.php");
    }
}