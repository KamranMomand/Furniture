<?php
session_start();
include_once 'config.php';

if(isset($_GET['pid']))
{
    $id=$_GET['pid'];
    $p_query="select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id join `pro_badge` pb on p.pro_badge=pb.badge_id join `pro_warrenty` pw on p.pro_warranty=pw.warren_id where p.pro_id='$id'";
    $p_result=mysqli_query($conn,$p_query);
    $p_row=mysqli_fetch_assoc($p_result);

if(isset($_POST['btnpedit']))
{
        $code = $_POST['pcode'];
        $name = $_POST['pname'];
        $des = $_POST['pdes'];
        $price = $_POST['pprice'];
        $cprice = $_POST['pcprice'];
        $scategory = $_POST['subcat'];
        $stock=$_POST['pstock'];
        $image1 = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
        $image2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
        $image3 = addslashes(file_get_contents($_FILES['img3']['tmp_name']));
        $badge = $_POST['pbadge'];
        $warrenty = $_POST['pwarrenty'];
        $featured = $_POST['pfeat'];
        $status = "Active";
                
        $p_query = "UPDATE `product` SET `pro_code`='$code',`pro_name`='$name',`pro_description`='$des',`pro_price`='$price',`pro_crossprice`='$cprice',`pro_quantity`='$stock',`pro_subcat`='$scategory',`pro_badge`='$badge',`pro_img1`='$image1',`pro_img2`='$image2',`pro_img3`='$image3',`pro_warranty`='$warrenty',`pro_featured`='$featured',`pro_status`='$status' WHERE `pro_id`='$id'";
        $p_result = mysqli_query($conn, $p_query);

        if ($p_result) {
            header('location:product.php');
        } else {
            echo "<script>alert('Record Not Inserted" .mysqli_error($conn). "'</script>";
        }

    $name=$_POST['name'];
    $designation=$_POST['desig'];
    $profile=addslashes(file_get_contents($_FILES['profile1']['tmp_name']));

    $query = "UPDATE `team` SET `team_name`='$name',`team_designation`='$designation',`team_profile`='$profile' WHERE `team_id`='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:team.php');
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
        <div class="container-fluid ">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Product</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Products</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Edit Product</h4>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            
                            <label>Enter Product Code: </label>
                            <input type="text" class="form-control" id="pcode" name="pcode" value="<?php echo $p_row['pro_code']?>" required/>
                            <br>
                            <label>Enter Product Name: </label>
                            <input type="text" class="form-control" id="pname" name="pname" value="<?php echo $p_row['pro_name']?>" required/>
                            <br>
                            <label>Select Main Category: </label>
                            <select class="form-control" id="maincat" required >
                                <option value="<?php echo $p_row['maincat_id']?>" selected><?php echo $p_row['maincat_name']?></option>
                                <?php
                                $cquery3 = "select * from `main_category`";
                                $cresult3 = mysqli_query($conn, $cquery3);
                                while ($crow3 = mysqli_fetch_assoc($cresult3)) {
                                ?>
                                    <option value="<?php echo $crow3['maincat_id']; ?>"><?php echo $crow3['maincat_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <br/>
                            <label>Select Category: </label>
                            <select class="form-control" id="category">
                            <option value="<?php echo $p_row['cat_id']; ?>" selected><?php echo $p_row['cat_name']; ?></option>
                            </select>

                            <br/>
                            <label>Select Sub Category: </label>
                            
                            <select class="form-control" name="subcat" id="subcat">
                            <option value="<?php echo $p_row['subcat_id']; ?>" selected><?php echo $p_row['subcat_name']; ?></option>
                            </select>
                            <br/>
                            
                            <label>Enter Product Description: </label>
                            <input type="text" class="form-control" id="pdes" value="<?php echo $p_row['pro_description']?>" name="pdes" required/>
                            <br>
                            <label>Enter Product Price: </label>
                            <input type="text" class="form-control" id="pprice" value="<?php echo $p_row['pro_price']?>" name="pprice" required/>
                            <br>
                            <label>Enter Product Cross Price: </label>
                            <input type="text" class="form-control" id="pcprice" value="<?php echo $p_row['pro_crossprice']?>" name="pcprice" required/>
                            <br>
                            <label>Enter Product Stock: </label>
                            <input type="text" class="form-control" id="pstock" value="<?php echo $p_row['pro_quantity']?>" name="pstock" required/>
                            <br>
                            <label>Enter Product Badge: </label>
                            <select class="form-control" name="pbadge" required>
                                <option value="<?php echo $p_row['badge_id']; ?>"><?php echo $p_row['badge_name']; ?></option>
                                <?php
                                $cquery = "select * from `pro_badge`";
                                $cresult = mysqli_query($conn, $cquery);
                                while ($crow = mysqli_fetch_assoc($cresult)) {
                                ?>
                                    <option value="<?php echo $crow['badge_id']; ?>"><?php echo $crow['badge_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <br>
                            <label>Enter Product Warrenty: </label>
                            <select class="form-control" name="pwarrenty" required>
                                <option value="<?php echo $p_row['warren_id']; ?>"><?php echo $p_row['warren_duration']; ?></option>
                                <?php
                                $cquery2 = "select * from `pro_warrenty`";
                                $cresult2 = mysqli_query($conn, $cquery2);
                                while ($crow2 = mysqli_fetch_assoc($cresult2)) {
                                ?>
                                    <option value="<?php echo $crow2['warren_id']; ?>"><?php echo $crow2['warren_duration']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <br>
                            <label>Do You Want to Featured Product: </label>
                            <select class="form-control" name="pfeat" required>
                                <option value="<?php echo $p_row['pro_featured']; ?>"><?php echo $p_row['pro_featured']; ?></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                                
                            </select>
                            <br>
                            <label>Enter Image 1: </label>
                            <input type="file" class="form-control" id="img1" name="img1" required/>
                            <br>
                            <label>Enter Image 2: </label>
                            <input type="file" class="form-control" id="img2" name="img2" required/>
                            <br>
                            <label>Enter Image 3: </label>
                            <input type="file" class="form-control" id="img3" name="img3" required/>
                            <br>

                            <input type="submit" class="btn" value="Update Product" style="background-color: #336699 ;"
                                name="btnpedit" />
                        </form>
                                    
                    </div>
                    
                </div>
                
            </div>


            
        </div>
        <!-- end row -->

        <script>
        $(document).ready(function() {

            $('#maincat').on('change', function() {
                var maincategory = this.value;
                $.ajax({
                    url: "ajaxconfig2.php",
                    type: "POST",
                    data: {
                        'maincategory': maincategory
                    },
                    cache: false,
                    success: function(result) {
                        $("#category").html(result);

                    }
                });
            });


            $('#category').on('change', function() {
                var category = this.value;
                $.ajax({
                    url: "ajaxconfig2.php",
                    type: "POST",
                    data: {
                        'category': category
                    },
                    cache: false,
                    success: function(result) {
                        $("#subcat").html(result);

                    }
                });
            });
                

    });
        </script>
        <?Php include 'footer.php';
        
                            }else{
                                header('location: product.php');
                            }
                            
                            ?>