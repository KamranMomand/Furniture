<?php
session_start();
include_once 'config.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if($conn)
    {
        $query="DELETE FROM `order_invoice` WHERE `order_id`='$id'";
        $result=mysqli_query($conn,$query);

        if($result)
        {
            $query2="DELETE FROM `billing_info` WHERE `order_id`='$id'";
            $result2=mysqli_query($conn,$query2);
            
            if($result2){
                $query3="DELETE FROM `pro_order` WHERE `order_id`='$id'";
                $result3=mysqli_query($conn,$query3);
            }else{
                header('location:myaccount.php');
            }
            if($query3){
                header('location:myaccount.php');
            }
        }else{
            header('location:myaccount.php');
        }
    }
}else{
    header('location:myaccount.php');
}

?>