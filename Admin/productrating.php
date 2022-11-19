<?php
session_start();
if(isset($_SESSION['adminid']))
{
include_once 'config.php';
 include 'header.php';
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
                                <li class="breadcrumb-item active">Product Ratings</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Ratings</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Product Ratings</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Reviews</th>
                                    <th>Rating</th>
                                    <th>Date / Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $rating_query="select * from `rating` r join `product` p on r.pro_id = p.pro_id";
                                    $rating_result=mysqli_query($conn,$rating_query);

                                    while($rating_row=mysqli_fetch_assoc($rating_result))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $rating_row['rating_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rating_row['pro_img1']);?>"
                                            width="35px" height="35px" style="border-radius: 50%;"/>&nbsp;&nbsp;<?php echo $rating_row['pro_name'];?></td>
                                    <td><?php echo $rating_row['your_name'];?></td>
                                    <td><?php echo $rating_row['your_email'];?></td>
                                    <td><?php echo $rating_row['review'];?></td>
                                    <td><?php echo $rating_row['rating'];?></td>
                                    <td><?php echo $rating_row['rating_date'];?> - <?php echo $rating_row['rating_time'];?></td>
                                    <td><a
                                            href="productratingdelete.php?id=<?php echo $rating_row['rating_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Product Ratings (Wedding Packages)</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Reviews</th>
                                    <th>Rating</th>
                                    <th>Date / Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $rating_query2="select * from `wedding_rating` wr join `wedding_packages` wp on wr.wpack_id = wp.wpack_id";
                                    $rating_result2=mysqli_query($conn,$rating_query2);

                                    while($rating_row2=mysqli_fetch_assoc($rating_result2))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $rating_row2['wrating_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rating_row2['wpack_img1']);?>"
                                            width="35px" height="35px" style="border-radius: 50%;"/>&nbsp;&nbsp;<?php echo $rating_row2['wpack_name'];?></td>
                                    <td><?php echo $rating_row2['wrating_name'];?></td>
                                    <td><?php echo $rating_row2['wrating_email'];?></td>
                                    <td><?php echo $rating_row2['wreview'];?></td>
                                    <td><?php echo $rating_row2['wrating'];?></td>
                                    <td><?php echo $rating_row2['wrating_date'];?> - <?php echo $rating_row2['wrating_time'];?></td>
                                    <td><a
                                            href="productratingdelete.php?wrid=<?php echo $rating_row2['wrating_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>

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