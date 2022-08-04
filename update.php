<?php
if(isset($_POST['update_submit']))
{
    require 'config.php';
    $product_id=$_POST['product_id'];
    $product_type=$_POST['product_type'];
    $product_quntity=$_POST['product_quntity'];
    $product_price=$_POST['product_price'];

    $sql="UPDATE item SET product_type='$product_type',product_quntity='$product_quntity',product_price='$product_price' WHERE product_id='$product_id'";
    
    if($con->query($sql))
    {
        if($con->affected_rows)
        header('Location:admin.php');
        else
        echo("ID Invalid ");
    }else{echo("error");}

    }
?>