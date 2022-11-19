<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';
    

    if(isset($_POST['btnpadd'])) {
        
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
                
        $p_query = "INSERT INTO `product`(`pro_code`, `pro_name`, `pro_description`, `pro_price`, `pro_crossprice`, `pro_quantity`, `pro_subcat`, `pro_badge`, `pro_img1`, `pro_img2`, `pro_img3`, `pro_warranty`, `pro_featured`, `pro_status`) VALUES ('$code','$name','$des','$price','$cprice','$stock','$scategory','$badge','$image1','$image2','$image3','$warrenty', '$featured', '$status')";
        $p_result = mysqli_query($conn, $p_query);

        if ($p_result) {
            header('location:product.php');
        } else {
            echo "<script>alert('Record Not Inserted" .mysqli_error($conn). "'</script>";
        }
    }
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
                        <h4 class="header-title">All Products</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Code</th>
                                    <th>Product</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>CrossPrice</th>
                                    <th>Stock</th>
                                    <th>Category</th>
                                    <th>Badge</th>
                                    <th>Warranty</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $query = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id join `pro_badge` pb on p.pro_badge=pb.badge_id join `pro_warrenty` pw on p.pro_warranty=pw.warren_id";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['pro_id']; ?></td>
                                    <td><?php echo $row['pro_code']; ?></td>
                                    <td >
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pro_img1']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/> <br/>
                                    
                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pro_img2']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/><br/>

                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['pro_img3']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/> <br/>

                                    <?php echo $row['pro_name']; ?></td>
                                    <td><?php echo $row['pro_description']; ?></td>
                                    <td><?php echo $row['pro_price']; ?></td>
                                    <td><del><?php echo $row['pro_crossprice']; ?></del></td>
                                    <td><?php echo $row['pro_quantity']; ?></td>
                                    <td><?php echo $row['maincat_name']; ?> / <?php echo $row['cat_name']; ?> / <?php echo $row['subcat_name']; ?></td>
                                    <td><?php echo $row['badge_name']; ?></td>
                                    <td><?php echo $row['warren_duration']; ?></td>
                                    <td><?php echo $row['pro_featured']; ?></td>
                                    <td><?php echo $row['pro_status']; ?></td>
                                    <td>
                                    <a href="products_edit.php?pid=<?php echo $row['pro_id']; ?>"
                                            class="btn " style="background-color: #336699 ;">Edit</a> |     
                                    <a href="products_delete.php?pid=<?php echo $row['pro_id']; ?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                    ?>
                            </tbody>
                        </table>

                        <form method="post" enctype="multipart/form-data">
                            
                            <label>Enter Product Code: </label>
                            <input type="text" class="form-control" id="pcode" name="pcode" required/>
                            <br>
                            <label>Enter Product Name: </label>
                            <input type="text" class="form-control" id="pname" name="pname" required/>
                            <br>
                            <label>Select Main Category: </label>
                            <select class="form-control" id="maincat" required >
                                <option>Select Main Catergory..</option>
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

                            </select>

                            <br/>
                            <label>Select Sub Category: </label>
                            
                            <select class="form-control" name="subcat" id="subcat">

                            </select>
                            <br/>
                            
                            <label>Enter Product Description: </label>
                            <input type="text" class="form-control" id="pdes" name="pdes" required/>
                            <br>
                            <label>Enter Product Price: </label>
                            <input type="text" class="form-control" id="pprice" name="pprice" required/>
                            <br>
                            <label>Enter Product Cross Price: </label>
                            <input type="text" class="form-control" id="pcprice" name="pcprice" required/>
                            <br>
                            <label>Enter Product Stock: </label>
                            <input type="text" class="form-control" id="pstock" name="pstock" required/>
                            <br>
                            <label>Enter Product Badge: </label>
                            <select class="form-control" name="pbadge" required>
                                <option>Select Badge..</option>
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
                                <option>Select Warrenty..</option>
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
                                <option value="No">Select..</option>
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

                            <input type="submit" class="btn" value="Add Product" style="background-color: #336699 ;"
                                name="btnpadd" />
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
                    url: "ajaxconfig.php",
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
                    url: "ajaxconfig.php",
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


        <?php
        include 'footer.php';
    } else {
        header('location:login.php');
    }
        ?>