<?php
session_start(); 
include('security.php');
include('includes/header.php'); 

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    $email_query = "SELECT * FROM admin_register WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        if($password === $cpassword)
        {
            $query = "INSERT INTO admin_register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['success'] = "Admin Profile Added";
                header('Location: register.php');
            }
            else 
            {
                $_SESSION['status'] = "Admin Profile Not Added";
                header('Location: register.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            header('Location: register.php');  
        }
    }
}

/*Update Register*/

if (isset($_POST['updatebtn'])) 
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];

    $query = "UPDATE admin_register SET username='$username', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location: register.php');
    }

}

/*Delete Admin*/

if (isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM admin_register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        header('Location: register.php');
    }

}


/*login */

if (isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];

    $query = "SELECT * FROM admin_register WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = "Email And Password is Invalid!";
        header('Location: login.php');
    }
}

/*HOOOOMEEEE*/

/* HERO DATA*/

if (isset($_POST['hero_save']))
{
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $button = $_POST['hero_btn'];

    $query = "INSERT INTO hero (title,subtitle,button) VALUES ('$title','$subtitle','$button')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Inserted";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Stored";
        header('Location: home.php');
    }
}


?>