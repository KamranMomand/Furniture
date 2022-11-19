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
                                <li class="breadcrumb-item active">Subscription</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Subscription</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Subscription Details</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $sub_query="select * from subscription";
                                    $sub_result=mysqli_query($conn,$sub_query);

                                    while($sub_row=mysqli_fetch_assoc($sub_result))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $sub_row['sub_id'];?></td>
                                    <td><?php echo $sub_row['sub_email'];?></td>
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