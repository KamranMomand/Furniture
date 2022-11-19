<?php
session_start();
include_once 'config.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if($conn)
    {
        $query="UPDATE `main_category` SET `maincat_status` = 'Deactive' WHERE `maincat_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:main_category.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}
else if(isset($_GET['cid']))
{
    $id=$_GET['cid'];
    if($conn)
    {
        $query="DELETE FROM `category` WHERE `cat_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:main_category.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}
else if(isset($_GET['scid']))
{
    $id=$_GET['scid'];
    if($conn)
    {
        $query="DELETE FROM `sub_category` WHERE `subcat_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:main_category.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}
else{
    header('location:main_category.php');
}

?>