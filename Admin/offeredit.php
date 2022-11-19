<?php
session_start();
include_once 'config.php';

if(isset($_GET['oid']))
{
    $id=$_GET['oid'];
    $s_query="Select * from `daily_offers` do join `product` p on do.product_id = p.pro_id where `offer_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);


    if(isset($_POST['btnoedit']))
    {
        $product=$_POST['product'];
        $discount=$_POST['discount'];
        $sdate=$_POST['sdate'];
        $edate=$_POST['edate'];
        $stime=$_POST['stime'];
        $etime=$_POST['etime'];
        $status = $_POST['status'];
    
        $query = "UPDATE `daily_offers` SET `product_id` = '$product', `discount` = '$discount', `start_date` = '$sdate', `start_time` = '$stime', `end_date` = '$edate', `end_time` = '$etime', `offer_status` = '$status' where offer_id = '$id'";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            header('location: dailyoffer.php');
        }else{
            echo "Record Not Inserted ".mysqli_error($conn);
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
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Daily Offers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Edit Daily Offers </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Edit Deals Hot Of The Day </h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Select Product : </label>
                            <?php 
                            $mcdquery = "select * from `product`";
                            $mcdresult = mysqli_query($conn, $mcdquery);
                            ?>
                            <select class="form-control" name="product" id="product" required>
                                <option value="<?php echo $s_row['pro_id'] ?>"><?php echo $s_row['pro_name'] ?> &nbsp; - &nbsp; $ <?php echo $s_row['pro_price'] ?></option>
                                <?php
                                    while ($mdcrow = mysqli_fetch_assoc($mcdresult)) {
                                    ?>
                                <option value="<?php echo $mdcrow['pro_id']; ?>">
                                
                                <?php echo $mdcrow['pro_name']; ?> &nbsp; - &nbsp; $ <?php echo $mdcrow['pro_price']; ?>
                            </option>
                                <?php
                                    }
                                    ?>
                            </select>
                            <br>
                            <label>Enter Discount: %</label>
                            <input type="number" class="form-control" name="discount" placeholder="Only Number" value="<?php echo $s_row['discount'] ?>" required/>
                            <br>
                            <label>Start Date:</label>
                            <input type="date" class="form-control" name="sdate" value="<?php echo $s_row['start_date'] ?>" required/>
                            <br>
                            <label>Start Time:</label>
                            <input type="time" class="form-control" name="stime" value="<?php echo $s_row['start_time'] ?>" required/>
                            <br>
                            <label>End Date:</label>
                            <input type="date" class="form-control" name="edate" value="<?php echo $s_row['end_date'] ?>" required/>
                            <br>
                            <label>End Time:</label>
                            <input type="time" class="form-control" name="etime" value="<?php echo $s_row['end_time'] ?>" required/>
                            <br>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['offer_status'] ?>"><?php echo $s_row['offer_status'] ?></option>
                                
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br/>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Update Offer" name="btnoedit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <?php
include 'footer.php';
}else{
    header('location:dailyoffer.php');
 }
?>