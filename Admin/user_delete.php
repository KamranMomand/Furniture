<?php
session_start();
include_once 'config.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if($conn)
    {
        $query="DELETE FROM `user` WHERE `user_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:user.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else{
    header('location:user.php');
}

?>