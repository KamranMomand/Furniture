<?php
session_start();
if(isset($_SESSION['adminid']))
{
include_once 'config.php';
include 'header.php';

if(isset($_POST['btnAdd']))
{
    $name=$_POST['name'];
    $designation=$_POST['desig'];
    $profile=addslashes(file_get_contents($_FILES['profile']['tmp_name']));

    $query = "INSERT INTO `team`( `team_name`, `team_designation`, `team_profile`) VALUES ('$name','$designation','$profile')";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        header('location: team.php');
    }else{
        echo "Record Not Inserted ".mysqli_error($conn);
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
                                <li class="breadcrumb-item active">Team</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Our Team</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Our Teams</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Profile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    $t_query="select * from team";
                                    $t_result=mysqli_query($conn,$t_query);

                                    while($t_row=mysqli_fetch_assoc($t_result))
                                    {
                                    ?>
                                <tr>
                                    <td><?php echo $t_row['team_id'];?></td>
                                    <td><?php echo $t_row['team_name'];?></td>
                                    <td><?php echo $t_row['team_designation'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($t_row['team_profile']);?>"
                                            width="70px" height="70px" style="border-radius: 50%;"/></td>
                                    <td><a href="team_edit.php?id=<?php echo $t_row['team_id'];?>"
                                            class="btn" style="background-color: #336699 ;">Edit</a> | <a
                                            href="team_delete.php?id=<?php echo $t_row['team_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Name : </label>
                            <input type="text" class="form-control" name="name" />
                            <br>
                            <label>Enter Designation: </label>
                            <input type="text" class="form-control" name="desig" />
                            <br>
                            <label>Select Profile : </label>
                            <input type="file" class="form-control" name="profile" />
                            <br>
                            <input type="submit" class="btn" style="background-color: #336699 ;" value="Add Member" name="btnAdd" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <?php
include 'footer.php';
}else{
    header('location:login.php');
 }
?>