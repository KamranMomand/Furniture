<?php
session_start();
if (isset($_SESSION['adminid'])) 
{
    include_once 'config.php';
    include 'header.php';

if(isset($_POST['btnAdd'])){

    $badge=$_POST['badge'];

    $query="INSERT INTO `pro_badge`(`badge_name`) VALUES ('$badge')";
    $result=mysqli_query($conn,$query);

    if($result){
        header('location:product_badge.php');
    } else {
        echo "Record Not inserted";
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
                                <li class="breadcrumb-item">Product Badge</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Product Badge</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Product Badge Details</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Badge</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $bquery = "select * from pro_badge";
                                $bresult = mysqli_query($conn, $bquery);
                                    while($brow=mysqli_fetch_assoc($bresult))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $brow['badge_id'];?></td>
                                    <td><?php echo $brow['badge_name'];?></td>
                                    <td><a href="product_badge_edit.php?id=<?php echo $brow['badge_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="product_badge_delete.php?id=<?php echo $brow['badge_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" >
                            <label>Enter Product Badge : </label>
                            <input type="text" class="form-control" name="badge" />

                            <br>
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Add Product Badge" name="btnAdd" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <?php
include 'footer.php';

} else {
    header('location:login.php');
}
    ?>