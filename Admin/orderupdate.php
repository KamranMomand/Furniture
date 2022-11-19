<?php
session_start();
include_once 'config.php';


if(isset($_GET['ouid']))
{
    $id=$_GET['ouid'];
    $s_query="Select * from `pro_order` where `order_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);


if(isset($_POST['btnostatus']))
{
    $status=$_POST['orderstatus'];

    $query = "UPDATE `pro_order` SET `order_status`='$status' WHERE `order_id`='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:order.php');
    }else{
        echo "Record Not Updated";
    }
}
include 'header.php'; 
include 'navbar.php'; 
?>


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-6">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Order</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Order Update</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Update Status</h4>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Name : </label>
                            <select class="form-control" name="orderstatus" id="orderstatus">
                                <option value="<?php echo $s_row['order_status'] ?>"><?php echo $s_row['order_status'] ?></option>
                                <option value="Recieved">Recieved</option>
                                <option value="Processing">Processing</option>
                                <option value="Dispatched">Dispatched</option>
                                <option value="Shipped">Shipped</option>
                                <option value="Returned">Returned</option>
                                <option value="Completed">Completed</option>
                                <option value="Cancelled">Cancelled</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Update Order Status" name="btnostatus" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?Php
include 'footer.php';
}else{
    header('location:order.php');
} 
?>


