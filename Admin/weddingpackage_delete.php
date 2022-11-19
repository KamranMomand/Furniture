<?php
session_start();
include_once 'config.php';
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if($conn)
    {
        $status="Deactive";
        $query="UPDATE `wedding_packages` SET `wpack_status`= '$status' WHERE `wpack_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:weddingpackage.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else{
    header('location:weddingpackage.php');
}

?>