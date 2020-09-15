<?php
session_start();
include('security.php');
include('database/DBconfig.php');

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
        $_SESSION['success'] = "Your Data is Stored";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Stored";
        header('Location: home.php');
    }
}

/*Update hero data*/
if (isset($_POST['hero_updatebtn']))
{
    $id = $_POST['edit_hero_id'];
    $title = $_POST['edit_title'];
    $subtitle = $_POST['edit_subtitle'];
    $button = $_POST['edit_btnname'];

    $query = "UPDATE hero SET title='$title', subtitle='$subtitle', button='$button' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Updated";
        header('Location: home.php');
    }
}

/*Delete Hero data*/

if (isset($_POST['delete_hero_btn']))
{
    $id = $_POST['delete_hero_id'];
    $query = "DELETE FROM hero WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        header('Location: home.php');
    }

}

/* Featured Causes */

if (isset($_POST['feature_save']))
{
    $image = $_FILES["feature_image"]['name'];
    $title = $_POST['feature_title'];
    $description = $_POST['feature_description'];
    $raised = $_POST['feature_raised'];
    $goal = $_POST['feature_goal'];

    $validate_img_extension = $_FILES["feature_image"]['type'] == "image/jpg" || $_FILES["feature_image"]['type'] == "image/png" || 
                              $_FILES["feature_image"]['type'] == "image/jpeg" ;

    if ($validate_img_extension) {

        $query = "INSERT INTO featured_causes (image,title,description,raised,goal) VALUES ('$image','$title','$description','$raised','$goal')";
        $query_run = mysqli_query($connection, $query);

            if($query_run)
            {
                move_uploaded_file($_FILES["feature_image"]["tmp_name"], "upload/".$_FILES["feature_image"]["name"]);
                $_SESSION['success'] = "Your Data is Stored";
                header('Location: home.php');
            }
            else
            {
                $_SESSION['status'] = "Your Data is Not Stored";
                header('Location: home.php');
            }
    }
    else{
        $_SESSION['status'] = "Please Upload your correct image!(example: jpg,png,jpeg)";
        header('Location: home.php');
    }
}

/*Update Featured causes*/
if (isset($_POST['feature_updatebtn']))
{
    $edit_id = $_POST['edit_feature_id'];
    $edit_image = $_FILES["feature_image"]['name'];
    $edit_title = $_POST['edit_feature_title'];
    $edit_description = $_POST['edit_feature_description'];
    $edit_raised = $_POST['edit_feature_raised'];
    $edit_goal = $_POST['edit_feature_goal'];

    $validate_img_extension = $_FILES["feature_image"]['type'] == "image/jpg" || $_FILES["feature_image"]['type'] == "image/png" || 
                              $_FILES["feature_image"]['type'] == "image/jpeg" ;

    if ($validate_img_extension) {

        $feature_query = "SELECT * FROM featured_causes WHERE id='$edit_id' ";
        $feature_query_run = mysqli_query($connection, $feature_query);
        foreach ($feature_query_run as $fa_row) {
            if ($edit_image == NULL) {
                $image_data = $fa_row['image'];
            }
            else{
                if ($img_path = "upload/".$fa_row['image']) {
                    unlink($img_path);
                    $image_data = $edit_image;
                }
            }
        }

        $query = "UPDATE featured_causes SET image='$image_data', title='$edit_title', description ='$edit_description', raised='$edit_raised', goal='$edit_goal' WHERE id='$edit_id' ";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            if ($edit_image == NULL) {
                $_SESSION['success'] = "Your Data is Updated";
                header('Location: home.php');
            }
            else{
                move_uploaded_file($_FILES["feature_image"]["tmp_name"], "upload/".$_FILES["feature_image"]["name"]);
                $_SESSION['success'] = "Your Data is Updated";
                header('Location: home.php');
                
            }   
        }
        else
        {
            $_SESSION['status'] = "Your Data is Not Updated";
            header('Location: home.php');
        }
    }
    else{
        $_SESSION['status'] = "Please Upload your correct image!(example: jpg,png,jpeg)";
        header('Location: home.php');
    }

}

/*Delete Featured  causes*/

if (isset($_POST['delete_feature_btn']))
{
    $id = $_POST['delete_feature_id'];

    $query = "DELETE FROM featured_causes WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: home.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Not Deleted";
        header('Location: home.php');
    }

}

?>