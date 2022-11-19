<?php
session_start();
include_once 'config.php';
if(isset($_GET['pid']))
{
    $id=$_GET['pid'];
    if($conn)
    {
        $query="UPDATE `product` SET `pro_status` = 'Deactive' WHERE `pro_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:product.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else{
    header('location:product.php');
}

?>