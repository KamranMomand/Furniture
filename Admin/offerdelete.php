<?php
session_start();
include_once 'config.php';
if(isset($_GET['oid']))
{
    $id=$_GET['oid'];
    if($conn)
    {
        $query="UPDATE `daily_offers` SET `offer_status` = 'Deactive' WHERE `offer_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:dailyoffer.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else{
    header('location:dailyoffer.php');
}

?>