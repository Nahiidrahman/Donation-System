<?php
session_start();
include('database/DBconfig.php');

if($DBconfig)
{
	//echo "Dtabase Connected";
}
else
{
	header("Location: database/DBconfig.php");
}

/*login session*/

if (!$_SESSION['username'])
{
	header('Location: login.php');
}

?>