<?php session_start(); 
if (!isset($_SESSION["username"])) // add your SESSION(username)
{
	header('Location:login.php'); // your login page name 

}
?>

add to admin.html & change it to php extension
