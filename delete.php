<?php
if(isset($_POST['remove_submit']))
{
    require 'config.php';
    $order_id=$_POST['order_id'];

   
    $sql="DELETE FROM orders WHERE order_id='$order_id'";
    
    if($con->query($sql))
    {
        if($con->affected_rows)
        header('Location:admin.php');
        else
        echo("ID Invalid ");
    }else{echo("error");}

    }
?>