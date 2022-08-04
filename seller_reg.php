<?php

if(isset($_POST['reg_submit']))
{
require 'config.php';
$Comany_Name=$_POST['Company_Name'];
$Email=$_POST['Email'];
$Contact_Number=$_POST['Contact_Number'];
$Pass=$_POST['Pass'];
$District=$_POST['District'];

$sql="INSERT INTO seller(Company_Name,Email,Contact_Number,Pass,District) VALUES ('$Comany_Name','$Email','$Contact_Number','$Pass','$District')";

if($con->query($sql))
{
    header('Location:admin.php');
}else{echo("error");}

}
?>