<?php
session_start();
if(isset($_SESSION['adminid']))
{
include_once 'config.php';
include 'header.php';

if(isset($_POST['btnoadd']))
{
    $product=$_POST['product'];
    $discount=$_POST['discount'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $stime=$_POST['stime'];
    $etime=$_POST['etime'];
    $status = "Active";

    $query = "INSERT INTO `daily_offers`( `product_id`, `discount`, `start_date`, `start_time`, `end_date`, `end_time`, `offer_status`) VALUES ('$product','$discount','$sdate','$stime','$edate','$etime','$status')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location: dailyoffer.php');
    }else{
        echo "Record Not Inserted ".mysqli_error($conn);
    }
   
}
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
                        <h4 class="page-title">Daily Offers </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Deals Hot Of The Day </h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product</th>
                                    <th>Discount</th>
                                    <th>Start Date </th>
                                    <th>End Date </th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $t_query="select * from `daily_offers` df join `product` p on df.product_id = p.pro_id" ;
                                    $t_result=mysqli_query($conn,$t_query);

                                    while($t_row=mysqli_fetch_assoc($t_result))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $t_row['offer_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($t_row['pro_img1']);?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/>
                                            <?php echo $t_row['pro_name'];?></td>
                                    <td><?php echo $t_row['discount'];?> %</td>
                                    <td><?php echo $t_row['start_date'];?> - <?php echo $t_row['start_time'];?></td>
                                    <td><?php echo $t_row['end_date'];?> - <?php echo $t_row['end_time'];?></td>
                                    <td><?php echo $t_row['offer_status'];?></td>
                                    <td><a href="offeredit.php?oid=<?php echo $t_row['offer_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="offerdelete.php?oid=<?php echo $t_row['offer_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <br/>
                        <form method="post" enctype="multipart/form-data">
                            <label>Select Product : </label>
                            <?php 
                            $mcdquery = "select * from `product`";
                            $mcdresult = mysqli_query($conn, $mcdquery);
                            ?>
                            <select class="form-control" name="product" id="product" required>
                                <option>Select Product..</option>
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
                            <input type="number" class="form-control" name="discount" placeholder="Only Number" required/>
                            <br>
                            <label>Start Date:</label>
                            <input type="date" class="form-control" name="sdate" required/>
                            <br>
                            <label>Start Time:</label>
                            <input type="time" class="form-control" name="stime" required/>
                            <br>
                            <label>End Date:</label>
                            <input type="date" class="form-control" name="edate" required/>
                            <br>
                            <label>End Time:</label>
                            <input type="time" class="form-control" name="etime" required/>
                            <br>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Add Offers" name="btnoadd" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <?php
include 'footer.php';
}else{
    header('location:login.php');
 }
?>