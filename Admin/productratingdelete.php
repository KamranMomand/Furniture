<?php
session_start();
include_once 'config.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if($conn)
    {
        $query="DELETE FROM `rating` WHERE `rating_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:productrating.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['wrid']))
{
    $id=$_GET['wrid'];
    if($conn)
    {
        $query="DELETE FROM `wedding_rating` WHERE `wrating_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:productrating.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}
else{
    header('location:productrating.php');
}

?>