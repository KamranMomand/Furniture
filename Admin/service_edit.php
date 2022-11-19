<?php
session_start();
include_once 'config.php';
 

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $s_query="SELECT * FROM `services` WHERE serv_id='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);
}

if(isset($_POST['btnEdit']))
{
    $name = $_POST['name'];
    $description = $_POST['desc'];
    $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
    $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    $query = "UPDATE `services` SET `serv_name`='$name',`serv_description`='$description',`serv_icon`='$icon',`serv_image`='$image' WHERE `serv_id`='$id'";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:service.php');
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
                                <li class="breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                        <h4 class="page-title"> Services</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Services Edit</h4>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="txtId" value="<?php echo $s_row['serv_id']?>" />
                            <label>Enter Name : </label>
                            <input type="text" class="form-control"  name="name" value="<?php echo $s_row['serv_name']?>" />
                            <br>
                            <label>Enter Description: </label>
                            <input type="text" class="form-control"  name="desc" value="<?php echo $s_row['serv_description']?>"/>
                            <br>
                            <label>Select Icon : </label>
                            <input type="file" class="form-control"  name="icon" value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s_row['serv_icon']);?>" required />
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control"  name="img" value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s_row['serv_image']);?>" required />
                            <br />
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Update Services" name="btnEdit" />
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <?Php
    include 'footer.php' 
    ?>