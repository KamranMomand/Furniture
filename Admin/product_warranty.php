<?php
session_start();
if (isset($_SESSION['adminid'])) 
{
    include_once 'config.php';
    include 'header.php';

if(isset($_POST['btnAdd'])){

    $duration=$_POST['duration'];

    $query="INSERT INTO `pro_warrenty`(`warren_duration`) VALUES ('$duration')";
    $result=mysqli_query($conn,$query);

    if($result){
        header('location:product_warranty.php');
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
                                <li class="breadcrumb-item">Warranty</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Warranty</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Warranty Details</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Duration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery = "select * from pro_warrenty";
                                $wresult = mysqli_query($conn, $wquery);
                                    while($wrow=mysqli_fetch_assoc($wresult))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow['warren_id'];?></td>
                                    <td><?php echo $wrow['warren_duration'];?></td>
                                    <td><a href="product_warranty_edit.php?id=<?php echo $wrow['warren_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="product_warranty_delete.php?id=<?php echo $wrow['warren_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" >
                            <label>Enter Duration : </label>
                            <input type="text" class="form-control" name="duration" />

                            <br>
                            <input type="submit" class="btn " value="Add Warrenty" style="background-color: #336699 ;" name="btnAdd" />
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