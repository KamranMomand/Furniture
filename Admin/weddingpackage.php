<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';
    

    $pro_query = "select * from `wedding_packages` w join `pro_badge` pb on w.pro_badge=pb.badge_id ";
    $pro_result = mysqli_query($conn, $pro_query);

    if (isset($_POST['btnAddd'])) {
        $code = $_POST['code'];
        $name = $_POST['name'];
        $descrition = $_POST['desc'];
        $price = $_POST['price'];
        $crossprice = $_POST['cprice'];
        $quantity = $_POST['quantity'];
        $badge = $_POST['probadge'];
        $image1 = addslashes(file_get_contents($_FILES['image1']['tmp_name']));
        $image2 = addslashes(file_get_contents($_FILES['image2']['tmp_name']));
        $image3 = addslashes(file_get_contents($_FILES['image3']['tmp_name']));
        $warrenty = $_POST['warrenty'];
        $status = "Active";
        
        $p_query = "INSERT INTO `wedding_packages`( `wpack_code`, `wpack_name`, `wpack_description`, `wpack_price`, `wpack_cross_price`, `wpack_quantity`, `pro_badge`, `wpack_img1`, `wpack_img2`, `wpack_img3`, `pro_warrenty`, `wpack_status`) VALUES ('$code','$name','$descrition','$price','$crossprice','$quantity','$badge','$image1','$image2','$image3','$warrenty','$status')";
        $p_result = mysqli_query($conn, $p_query);

        if ($p_result) {
            header('location: weddingpackage.php');
        } else {
            echo "Record Not Inserted " . mysqli_error($conn);
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
                        <h4 class="header-title">Wedding Packages</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Product Code</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Cross Price</th>
                                    <th>Stock</th>
                                    <th>Badge</th>
                                    <th style="text-align: center ;">Images</th>
                                    <th>Warranty</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $query = "select * from wedding_packages";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['wpack_id']; ?></td>
                                    <td><?php echo $row['wpack_code']; ?></td>
                                    <td><?php echo $row['wpack_name']; ?></td>
                                    <td><?php echo $row['wpack_description']; ?></td>
                                    <td><?php echo $row['wpack_price']; ?></td>
                                    <td><?php echo $row['wpack_cross_price']; ?></td>
                                    <td><?php echo $row['wpack_quantity']; ?></td>
                                    <td><?php echo $row[7]; ?></td>
                                    <td style="text-align: center ;"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['wpack_img1']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/>
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['wpack_img2']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/>
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['wpack_img3']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/>
                                        </td>

                                   
                                    <td><?php echo $row[11]; ?></td>
                                    <td><?php echo $row['wpack_status']; ?></td>
                                    <td><a href="weddingpackage_edit.php?id=<?php echo $row['wpack_id'];?>"
                                            class="btn " style="background-color: #336699 ;">Edit</a> | <a
                                            href="weddingpackage_delete.php?id=<?php echo $row['wpack_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                    ?>
                            </tbody>
                        </table >
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Product Code : </label>
                            <input type="text" class="form-control" id="pro" name="code" />
                            <br>
                            <label>Enter Name : </label>
                            <input type="text" class="form-control" id="pro" name="name" />
                            <br>
                            <label>Enter Description: </label>
                            <input type="text" class="form-control" id="desc" name="desc" />
                            <br>
                            <label>Enter Price: </label>
                            <input type="text" class="form-control" id="price" name="price" />
                            <br>
                            <label>Enter Cross Price: </label>
                            <input type="text" class="form-control" id="cprice" name="cprice" />
                            <br>
                            <label>Enter Quantity: </label>
                            <input type="text" class="form-control" id="quantity" name="quantity" />
                            <br>
                            <label>Enter Product Badge: </label>
                            <select class="form-control" name="probadge" >
                                <option>Select Product Badge</option>
                                <?php
                                $cquery = "select * from pro_badge";
                                $cresult = mysqli_query($conn, $cquery);
                                while ($crow = mysqli_fetch_assoc($cresult)) {
                                ?>
                                    <option value="<?php echo $crow['badge_id']; ?>"><?php echo $crow['badge_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <br> 
                            <label>Select Image : </label>
                            <input type="file" class="form-control" id="image1" name="image1" required />
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control" id="image2" name="image2" required />
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control" id="image3" name="image3" required />
                            <br>
                            <label>Enter Product Warranty: </label>
                            <select class="form-control" name="warrenty" >
                                <option>Select Product Warranty</option>
                                <?php
                                $wquery = "select * from pro_warrenty";
                                $wresult = mysqli_query($conn, $wquery);
                                while ($wrow = mysqli_fetch_assoc($wresult)) {
                                ?>
                                    <option value="<?php echo $wrow['warren_id']; ?>"><?php echo $wrow['warren_duration']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <br />
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Add Wedding Package" id="btnAddd" name="btnAddd" />
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