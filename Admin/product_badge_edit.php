<?php
session_start();
include_once 'config.php';


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $s_query="Select * from pro_badge where badge_id='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);
}

if(isset($_POST['btnEdit']))
{
    $badge=$_POST['badge'];
    

    $query = "UPDATE `pro_badge` SET `badge_name`='$badge' WHERE `badge_id`='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:product_badge.php');
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
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Product Badge</li>
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
                        <h4 class="header-title">Edit Product Badge </h4>
                        <br>
                        <form method="post">
                            <input type="hidden" name="txtId" value="<?php echo $s_row['badge_id']?>" />
                            <label>Enter Duration: </label>
                            <input type="text" class="form-control" name="badge"
                                value="<?php echo $s_row['badge_name']?>" />
                            <br>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Update Product Badge" name="btnEdit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?Php
include 'footer.php' 
?>