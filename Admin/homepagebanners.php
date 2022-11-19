<?php
session_start();
if (isset($_SESSION['adminid'])) 
{
    include_once 'config.php';
    include 'header.php';

if(isset($_POST['btnb1'])){

    $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
    $status1 = $_POST['status1'];

    $query="INSERT INTO `home_banner`(`banner_image`, `status`) VALUES ('$banner', '$status1')";
    $result=mysqli_query($conn,$query);

    if($result){
        header('location:homepagebanners.php');
    } else {
        echo "Record Not inserted";
    }
}


if(isset($_POST['btnb2'])){

    $banner2 = addslashes(file_get_contents($_FILES['ba2']['tmp_name']));
    $status2 = $_POST['status2'];

    $query2="INSERT INTO `home_banner2`(`banner_image2`, `status`) VALUES ('$banner2', '$status2')";
    $result2=mysqli_query($conn,$query2);

    if($result){
        header('location:homepagebanners.php');
    } else {
        echo "Record Not inserted";
    }
}


if(isset($_POST['btnb3'])){

    $banner3 = addslashes(file_get_contents($_FILES['ba3']['tmp_name']));
    $status3 = $_POST['status3'];

    $query3="INSERT INTO `home_banner3`(`banner_image3`, `status`) VALUES ('$banner3', '$status3')";
    $result3=mysqli_query($conn,$query3);

    if($result){
        header('location:homepagebanners.php');
    } else {
        echo "Record Not inserted";
    }
}


if(isset($_POST['btnb4'])){

    $banner4 = addslashes(file_get_contents($_FILES['ba4']['tmp_name']));
    $status4 = $_POST['status4'];

    $query4="INSERT INTO `home_banner4`(`banner_image4`, `status`) VALUES ('$banner4', '$status4')";
    $result4=mysqli_query($conn,$query4);

    if($result){
        header('location:homepagebanners.php');
    } else {
        echo "Record Not inserted";
    }
}


if(isset($_POST['btnb5'])){

    $banner5 = addslashes(file_get_contents($_FILES['ba5']['tmp_name']));
    $status5 = $_POST['status5'];

    $query5="INSERT INTO `home_office_banner`(`obanner_image`, `status`) VALUES ('$banner5', '$status5')";
    $result5=mysqli_query($conn,$query5);

    if($result){
        header('location:homepagebanners.php');
    } else {
        echo "Record Not inserted";
    }
}


if(isset($_POST['btnb6'])){

    $banner6 = addslashes(file_get_contents($_FILES['ba6']['tmp_name']));
    $status6 = $_POST['status6'];

    $query6="INSERT INTO `home_rest_banner`(`rbanner_image`, `status`) VALUES ('$banner6', '$status6')";
    $result6=mysqli_query($conn,$query6);

    if($result){
        header('location:homepagebanners.php');
    } else {
        echo "Record Not inserted";
    }
}


if(isset($_POST['btnb7'])){

    $banner7 = addslashes(file_get_contents($_FILES['ba7']['tmp_name']));
    $status7 = $_POST['status7'];

    $query7="INSERT INTO `home_wedding_banner`(`wbanner_image`, `status`) VALUES ('$banner7', '$status7')";
    $result7=mysqli_query($conn,$query7);

    if($result){
        header('location:homepagebanners.php');
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
                                <li class="breadcrumb-item">Banners</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sale Banners</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Horizontal</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery = "select * from `home_banner`";
                                $wresult = mysqli_query($conn, $wquery);
                                    while($wrow=mysqli_fetch_assoc($wresult))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow['banner_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow['banner_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow['status'];?></td>
                                    <td><a href="banneredit.php?id1=<?php echo $wrow['banner_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id1=<?php echo $wrow['banner_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/><span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status1" id="status1" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>

                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Horizontal</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery2 = "select * from `home_banner2`";
                                $wresult2 = mysqli_query($conn, $wquery2);
                                    while($wrow2=mysqli_fetch_assoc($wresult2))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow2['banner2_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow2['banner2_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow2['status'];?></td>
                                    <td><a href="banneredit.php?id2=<?php echo $wrow2['banner2_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id2=<?php echo $wrow2['banner2_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba2" required/><span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status2" id="status2" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb2" />
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Horizontal</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery3 = "select * from `home_banner3`";
                                $wresult3 = mysqli_query($conn, $wquery3);
                                    while($wrow3=mysqli_fetch_assoc($wresult3))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow3['banner3_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow3['banner3_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow3['status'];?></td>
                                    <td><a href="banneredit.php?id3=<?php echo $wrow3['banner3_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id3=<?php echo $wrow3['banner3_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba3" required/><span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status3" id="status3" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb3" />
                        </form>
                    </div>
                </div>


                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Horizontal</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery4 = "select * from `home_banner4`";
                                $wresult4 = mysqli_query($conn, $wquery4);
                                    while($wrow4=mysqli_fetch_assoc($wresult4))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow4['banner4_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow4['banner4_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow4['status'];?></td>
                                    <td><a href="banneredit.php?id4=<?php echo $wrow4['banner4_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id4=<?php echo $wrow4['banner4_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba4" required/><span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status4" id="status4" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb4" />
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Vertical</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery5 = "select * from `home_office_banner`";
                                $wresult5 = mysqli_query($conn, $wquery5);
                                    while($wrow5=mysqli_fetch_assoc($wresult5))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow5['obanner_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow5['obanner_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow5['status'];?></td>
                                    <td><a href="banneredit.php?id5=<?php echo $wrow5['obanner_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id5=<?php echo $wrow5['obanner_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba5" required /><span> (295w * 673h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status5" id="status5" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb5" />
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Vertical</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery6 = "select * from `home_rest_banner`";
                                $wresult6 = mysqli_query($conn, $wquery6);
                                    while($wrow6=mysqli_fetch_assoc($wresult6))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow6['rbanner_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow6['rbanner_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow6['status'];?></td>
                                    <td><a href="banneredit.php?id6=<?php echo $wrow6['rbanner_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id6=<?php echo $wrow6['rbanner_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba6" required/><span> (295w * 673h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status6" id="status6" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb6" />
                        </form>
                    </div>
                </div>




                <div class="col-6">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Home Page Banner Vertical</h4>
                        <br>
                        <table id="" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                $wquery7 = "select * from `home_wedding_banner`";
                                $wresult7 = mysqli_query($conn, $wquery7);
                                    while($wrow7=mysqli_fetch_assoc($wresult7))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $wrow7['wbanner_id'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wrow7['wbanner_image']);?>"
                                            width="50%" height="50%" /></td>
                                    <td><?php echo $wrow7['status'];?></td>
                                    <td><a href="banneredit.php?id7=<?php echo $wrow7['wbanner_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="bannerdelete.php?id7=<?php echo $wrow7['wbanner_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba7" required/> <span> (295w * 673h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status7" id="status7" required>
                                <option>Select Status.. </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Add Banner" style="background-color: #336699 ;" name="btnb7" />
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