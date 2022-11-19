<?php
session_start();
include_once 'config.php';

if(isset($_GET['id1']))
{
    $id=$_GET['id1'];
    $s_query="Select * from `home_banner` where `banner_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_banner` SET `banner_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Horizontal 1</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>

                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->

        
<?php include 'footer.php'; 
}else if(isset($_GET['id2']))
{
    $id=$_GET['id2'];
    $s_query="Select * from `home_banner2` where `banner2_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_banner2` SET `banner2_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Horizontal 2</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->

        
<?php include 'footer.php'; 
}else if(isset($_GET['id3']))
{
    $id=$_GET['id3'];
    $s_query="Select * from `home_banner3` where `banner3_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_banner3` SET `banner3_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Horizontal 3</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->

        
<?php include 'footer.php'; 
}else if(isset($_GET['id4']))
{
    $id=$_GET['id4'];
    $s_query="Select * from `home_banner4` where `banner4_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_banner4` SET `banner4_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Horizontal 4</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (610w * 200h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->

        
<?php include 'footer.php'; 
}else if(isset($_GET['id5']))
{
    $id=$_GET['id5'];
    $s_query="Select * from `home_office_banner` where `obanner_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_office_banner` SET `obanner_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Vertical 5</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (295w * 673h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->

        
<?php include 'footer.php'; 
}else if(isset($_GET['id6']))
{
    $id=$_GET['id6'];
    $s_query="Select * from `home_rest_banner` where `rbanner_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_rest_banner` SET `rbanner_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Vertical 6</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (295w * 673h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->

        
<?php include 'footer.php'; 
}else if(isset($_GET['id7']))
{
    $id=$_GET['id7'];
    $s_query="Select * from `home_wedding_banner` where `wbanner_id`='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);

    if(isset($_POST['btnb1'])){

        $banner = addslashes(file_get_contents($_FILES['ba1']['tmp_name']));
        $status = $_POST['status'];
    
        $query="UPDATE `home_wedding_banner` SET `wbanner_image` = '$banner', `status` = '$status'";
        $result=mysqli_query($conn,$query);
    
        if($result){
            header('location:homepagebanners.php');
        } else {
            echo "Record Not inserted";
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
                <div class="col-6">
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
                        <h4 class="header-title">Edit Home Page Banner Vertical 7</h4>
                        <br>
                        
                        <form method="post" enctype="multipart/form-data">
                            <label>Upload Banner : </label>
                            <input type="file" class="form-control" name="ba1" required/> <span> (295w * 673h Pixel / JPG, PNG) </span>
                            <br/><br/>
                            <label>Status : </label>
                            <select class="form-control" name="status" id="status" required>
                                <option value="<?php echo $s_row['status'] ?>"><?php echo $s_row['status'] ?> </option>
                                <option value="Active">Active</option>
                                <option value="Deactive">Deactive</option>
                            </select>
                            <br>
                            <input type="submit" class="btn" value="Update Banner" style="background-color: #336699 ;" name="btnb1" />
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
        <!-- end row -->
        
<?php include 'footer.php'; 
}else{
    header('location:homepagebanners.php');
}
?>