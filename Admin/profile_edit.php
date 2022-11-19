<?php
session_start();
include_once 'config.php';


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $s_query="SELECT * FROM `admin` WHERE admin_id='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);
}

if(isset($_POST['btnEdit']))
{
    $id=$_POST['txtId'];
    $name=$_POST['txtName'];
    $email=$_POST['email'];
    $password=$_POST['passd'];
    $profile=addslashes(file_get_contents($_FILES['profile']['tmp_name']));

    $query = "UPDATE `admin` SET `admin_name`='$name',`admin_email`='$email',`admin_password`='$password',`admin_profile`='$profile' where `admin_id`='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:profile.php');
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
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Profile Edit</h4>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="txtId" value="<?php echo $d_row['admin_id']?>" />
                            <label>Enter Your Name: </label>
                            <input type="text" name="txtName" class="form-control"
                                value="<?php echo $d_row['admin_name']?>" />

                            <br>
                            <label>Enter Your Email: </label>
                            <input type="text" name="email" class="form-control"
                                value="<?php echo $d_row['admin_email']?>" />

                            <br>
                            <label>Enter Your Password: </label>
                            <input type="password" name="passd" class="form-control"
                                value="<?php echo $d_row['admin_password']?>" />

                            <br>
                            <label>Select Your Profile: </label>
                            <input class="form-control" name="profile" type="file"
                            value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($t_row['admin_profile']);?>" />

                            <br>

                            <input type="submit" class="btn btn-primary" value="Update Profile" name="btnEdit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?Php
    include 'footer.php' 
    ?>