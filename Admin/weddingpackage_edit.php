<?php
session_start();
include_once 'config.php';
 

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $s_query="SELECT * FROM `wedding_packages` wp join `pro_badge` pb on wp.pro_badge = pb.badge_id join `pro_warrenty` pw on wp.pro_warrenty = pw.warren_id WHERE wpack_id='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);
}

if(isset($_POST['btnEdit']))
{
    $code = $_POST['code'];
    $name = $_POST['name'];
    $descrition = $_POST['desc'];
    $price = $_POST['price'];
    $crossprice = $_POST['cprice'];
    $quantity = $_POST['quantity'];
    $badge = $_POST['probadge'];
    $image1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
    $image2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
    $image3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
    $warrenty = $_POST['warrenty'];
    $status = "Active";

    $query = "UPDATE `wedding_packages` SET `wpack_code`='$code',`wpack_name`='$name',`wpack_description`='$descrition',`wpack_price`='$price',`wpack_cross_price`='$crossprice',`wpack_quantity`='$quantity',`pro_badge`='$badge',`wpack_img1`='$image1',`wpack_img2`='$image2',`wpack_img3`='$image3',`pro_warrenty`='$warrenty',`wpack_status`='$status' WHERE `wpack_id`='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:weddingpackage.php');
    }else{
        echo "Record Not Updated";
    }
}
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
                                <li class="breadcrumb-item active">Wedding Package</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Wedding Packages</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Wedding Package Edit</h4>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="txtId" value="<?php echo $s_row['wpack_id']?>" />
                            <label>Enter Code : </label>
                            <input type="text" class="form-control" value="<?php echo $s_row['wpack_code']?>"
                                name="code" />
                            <br>
                            <label>Enter Name : </label>
                            <input type="text" class="form-control" value="<?php echo $s_row['wpack_name']?>"
                                name="name" />
                            <br>
                            <label>Enter Description: </label>
                            <input type="text" class="form-control" value="<?php echo $s_row['wpack_description']?>"
                                name="desc" />
                            <br>
                            <label>Enter Price: </label>
                            <input type="text" class="form-control" value="<?php echo $s_row['wpack_price']?>"
                                name="price" />
                            <br>
                            <label>Enter Cross Price: </label>
                            <input type="text" class="form-control" value="<?php echo $s_row['wpack_cross_price']?>"
                                name="cprice" />
                            <br>
                            <label>Enter Quantity: </label>
                            <input type="text" class="form-control" value="<?php echo $s_row['wpack_quantity']?>"
                                name="quantity" />
                            <br>
                            <label>Enter Product Badge: </label>
                            <select class="form-control" name="probadge">
                                <option value="<?php echo $s_row['pro_badge']?>"><?php echo $s_row['badge_name']?></option>
                                <?php
                                $cquery = "select * from pro_badge";
                                $cresult = mysqli_query($conn, $cquery);
                                while ($crow = mysqli_fetch_assoc($cresult)) {
                                ?>
                                <option value="<?php echo $crow['badge_id']; ?>"><?php echo $crow['badge_name']; ?>
                                </option>
                                <?php
                                }
                                ?>
                            </select>
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control" name="img1"
                                value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s_row['wpack_img1']);?>"
                                required />
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control" name="img2"
                                value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s_row['wpack_img2']);?>"
                                required />
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control" name="img3"
                                value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s_row['wpack_img3']);?>"
                                required />
                            <br>
                            <label>Enter Product Warrenty: </label>
                            <select class="form-control" name="warrenty">
                                <option value="<?php echo $s_row['pro_warrenty']?>"><?php echo $s_row['warren_duration']?></option>
                                <?php
                                $wquery = "select * from pro_warrenty";
                                $wresult = mysqli_query($conn, $wquery);
                                while ($wrow = mysqli_fetch_assoc($wresult)) {
                                ?>
                                <option value="<?php echo $wrow['warren_id']; ?>">
                                    <?php echo $wrow['warren_duration']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <br />
                            <select class="form-control" name="status">

                                <option value="<?php echo $s_row['wpack_status']?>"><?php echo $s_row['wpack_status']?></option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>

                            </select>
                            <br>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Update Wedding Package" name="btnEdit" />
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?Php
    include 'footer.php' 
    ?>