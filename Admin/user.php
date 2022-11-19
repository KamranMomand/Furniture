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
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Users</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">User Details</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $user_query="select * from user";
                                    $user_result=mysqli_query($conn,$user_query);

                                    while($user_row=mysqli_fetch_assoc($user_result))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $user_row['user_id'];?></td>
                                    <td><?php echo $user_row['user_email'];?></td>
                                    <td><?php echo $user_row['user_password'];?></td>
                                    <td><?php echo $user_row['user_name'];?></td>
                                    <td><?php echo $user_row['user_country'];?></td>
                                    <td><?php echo $user_row['user_phone'];?></td>
                                    <td><a href="user_edit.php?id=<?php echo $user_row['user_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="user_delete.php?id=<?php echo $user_row['user_id'];?>"
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