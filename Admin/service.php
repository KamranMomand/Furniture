<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';

if(isset($_POST['btnAdd']))
{
    $name = $_POST['name'];
    $description = $_POST['desc'];
    $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
    $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    $squery="INSERT INTO `services`( `serv_name`, `serv_description`, `serv_icon`, `serv_image`) VALUES ('$name','$description','$icon','$image')";
    $sresult=mysqli_query($conn,$squery);

    if($sresult){
        header('location:service.php');
    } else {
        echo "Record Not inserted" .mysqli_error($conn);
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
                                <li class="breadcrumb-item active">Services</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Services</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Services Details</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive "
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php
                                    $query = "select * from services";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['serv_id']; ?></td>
                                    <td><?php echo $row['serv_name']; ?></td>
                                    <td><?php echo $row['serv_description']; ?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['serv_icon']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['serv_image']); ?>"
                                            width="50px" height="50px" style="border-radius: 50%;"/></td>
                                    <td><a href="service_edit.php?id=<?php echo $row['serv_id'];?>"
                                            class="btn " style="background-color: #336699 ;">Edit</a> | <a
                                            href="service_delete.php?id=<?php echo $row['serv_id'];?>"
                                            class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                    ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Name : </label>
                            <input type="text" class="form-control"  name="name" required/>
                            <br>
                            <label>Enter Description: </label>
                            <input type="text" class="form-control"  name="desc" required/>
                            <br>
                            <label>Select Icon : </label>
                            <input type="file" class="form-control"  name="icon" required />
                            <br>
                            <label>Select Image : </label>
                            <input type="file" class="form-control"  name="img" required />
                            <br />
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Add Services" 
                                name="btnAdd" />
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