<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $mc_query="Select * from `main_category` where maincat_id='$id'";
    $mc_result=mysqli_query($conn,$mc_query);
    $mc_row=mysqli_fetch_assoc($mc_result);


if(isset($_POST['btnEdit']))
{
    $name=$_POST['txtname'];
    $status="Active";
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));

    $query="UPDATE `main_category` SET `maincat_name`='$name',`maincat_icon`='$icon',`maincat_image`='$image',`maincat_status`='$status' WHERE `maincat_id` = '$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:main_category.php');
    }else{
        echo "Record Not Inserted ";
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
                                <li class="breadcrumb-item">Category</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Category</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Edit Main Category</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Category : </label>
                            <input type="text" class="form-control" name="txtname" value="<?php echo $mc_row['maincat_name']?>" required/><br/>
                            <label>Upload Image : </label>
                            <input type="file" class="form-control" name="image" required/><br/>
                            <label>Upload Icon : </label>
                            <input type="file" class="form-control" name="icon" required/><br/>
                            <br>
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Update Main Category" name="btnEdit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <?php
    include 'footer.php';
    }else if(isset($_GET['cid']))
{
    $id=$_GET['cid'];
    $mc_query="select * from `category` c join `main_category` mc on c.main_category = mc.maincat_id where c.cat_id='$id'";
    $mc_result=mysqli_query($conn,$mc_query);
    $mc_row=mysqli_fetch_assoc($mc_result);


if(isset($_POST['btnEdit']))
{
    $name=$_POST['txtname2'];
    $mcid=$_POST['categoryv'];

    $query="UPDATE `category` SET `cat_name` = '$name', `main_category` = '$mcid' WHERE `cat_id` = '$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:main_category.php');
    }else{
        echo "Record Not Inserted ";
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
                                <li class="breadcrumb-item">Category</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Category</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Edit Category</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Category : </label>
                            <input type="text" class="form-control" name="txtname2" value="<?php echo $mc_row['cat_name']?>" required/><br/>
                            <label>Select Main Category : </label>
                            <?php 

                            $mcdquery = "select * from `main_category`";
                            $mcdresult = mysqli_query($conn, $mcdquery);

                            ?>
                            <select class="form-control" name="categoryv" id="categoryv">
                                <option value="<?php echo $mc_row['main_category']?>"><?php echo $mc_row['maincat_name']?></option>
                                <?php
                                    while ($mdcrow = mysqli_fetch_assoc($mcdresult)) {
                                    ?>
                                <option value="<?php echo $mdcrow['maincat_id']; ?>"><?php echo $mdcrow['maincat_name']; ?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                            <br>
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Update Category" name="btnEdit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <?php
    include 'footer.php';
}
                            else if(isset($_GET['scid']))
                                {
                                    $id=$_GET['scid'];
                                    $mc_query="select * from `sub_category` sc join `category` c on sc.category = c.cat_id where sc.subcat_id='$id'";
                                    $mc_result=mysqli_query($conn,$mc_query);
                                    $mc_row=mysqli_fetch_assoc($mc_result);
                                
                                
                                if(isset($_POST['btnEdit']))
                                {
                                    $name=$_POST['txtname3'];
                                    $cid=$_POST['categoryv3'];

                                    $query="UPDATE `sub_category` SET `subcat_name` = '$name', `category` = '$cid' where `subcat_id` = '$id'";
                                    $result=mysqli_query($conn,$query);
                                                                
                                    if($result)
                                    {
                                        header('location:main_category.php');
                                    }else{
                                        echo "Record Not Inserted ";
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
                                                                <li class="breadcrumb-item">Category</li>
                                                            </ol>
                                                        </div>
                                                        <h4 class="page-title">Category</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end page title -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card-box table-responsive">
                                                        <h4 class="header-title">Edit Sub Category</h4>
                                                        <br>
                                                        
                                                        <form method="post" enctype="multipart/form-data">
                                                            <label>Enter Sub Category : </label>
                                                            <input type="text" class="form-control" name="txtname3" value="<?php echo $mc_row['subcat_name']?>" required/><br/>
                                                            <label>Select Category : </label>
                                                            <?php 

                        $mcdquery2 = "select * from `category`";
                        $mcdresult2 = mysqli_query($conn, $mcdquery2);

                        ?>
                            <select class="form-control" name="categoryv3" id="categoryv3">
                                <option value="<?php echo $mc_row['category']?>"><?php echo $mc_row['cat_name']?></option>
                                <?php
                                    while ($mdcrow2 = mysqli_fetch_assoc($mcdresult2)) {
                                    ?>
                                <option value="<?php echo $mdcrow2['cat_id']; ?>"><?php echo $mdcrow2['cat_name']; ?></option>
                                <?php
                                    }
                                    ?>
                            </select>
                                                            <br>
                                                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Update Sub Category" name="btnEdit" />
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                        <?php
                                    include 'footer.php';
                                                                }
                                                                else{
                                    header('location: main_category.php');
                                }
} else {
    header('location: login.php');
}
    ?>