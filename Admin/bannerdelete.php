<?php
session_start();
include_once 'config.php';
if(isset($_GET['id1']))
{
    $id=$_GET['id1'];
    if($conn)
    {
        $query="UPDATE `home_banner` SET `status` = 'Deactive' WHERE `banner_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['id2']))
{
    $id=$_GET['id2'];
    if($conn)
    {
        $query="UPDATE `home_banner2` SET `status` = 'Deactive' WHERE `banner2_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['id3']))
{
    $id=$_GET['id3'];
    if($conn)
    {
        $query="UPDATE `home_banner3` SET `status` = 'Deactive' WHERE `banner3_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['id4']))
{
    $id=$_GET['id4'];
    if($conn)
    {
        $query="UPDATE `home_banner4` SET `status` = 'Deactive' WHERE `banner4_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['id5']))
{
    $id=$_GET['id5'];
    if($conn)
    {
        $query="UPDATE `home_office_banner` SET `status` = 'Deactive' WHERE `obanner_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['id6']))
{
    $id=$_GET['id6'];
    if($conn)
    {
        $query="UPDATE `home_rest_banner` SET `status` = 'Deactive' WHERE `rbanner_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else if(isset($_GET['id7']))
{
    $id=$_GET['id7'];
    if($conn)
    {
        $query="UPDATE `home_wedding_banner` SET `status` = 'Deactive' WHERE `wbanner_id`='$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location:homepagebanners.php');
        }else{
            echo "Record Not Deleted";
        }
    }
}else{
    header('location:homepagebanners.php');
}

?>