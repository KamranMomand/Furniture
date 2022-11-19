<?php
session_start();
include_once 'config.php';


if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $s_query="Select * from team where team_id='$id'";
    $s_result=mysqli_query($conn,$s_query);
    $s_row=mysqli_fetch_assoc($s_result);
}

if(isset($_POST['btnEdit']))
{
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
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="index.php">Furniture</a></li>
                                <li class="breadcrumb-item active">Team</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Team Edit</h4>
                        <br>
                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="txtId" value="<?php echo $s_row['team_id']?>" />
                            <label>Enter Name : </label>
                            <input type="text" class="form-control" name="name" value="<?php echo $s_row['team_name']?>" />
                            <br>
                            <label>Enter Designation: </label>
                            <input type="text" class="form-control" name="desig"
                                value="<?php echo $s_row['team_designation']?>" />
                            <br>
                            <label>Select Profile : </label>
                            <input type="file" class="form-control" name="profile1"
                                value="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($t_row['team_profile']);?>" />
                            <br>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Update Member" name="btnEdit" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?Php
include 'footer.php' 
?>