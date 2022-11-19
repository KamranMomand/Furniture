<?php
session_start();
if (isset($_SESSION['adminid'])) {
    include_once 'config.php';
    include 'header.php';

if(isset($_POST['btnAdd']))
{
    $name=$_POST['txtname'];
    $status="Active";
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $icon = addslashes(file_get_contents($_FILES['icon']['tmp_name']));

    $query="INSERT INTO `main_category`( `maincat_name`, `maincat_icon`, `maincat_image`, `maincat_status`) VALUES ('$name','$icon','$image','$status')";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:main_category.php').mysqli_error($conn);
    }else{
        echo "Record Not Inserted ".mysqli_error($conn);
    }
}


if(isset($_POST['btnAdd2']))
{
    $name=$_POST['txtname2'];
    $mcid=$_POST['categoryv'];

    $query="INSERT INTO `category`( `cat_name`, `main_category`) VALUES ('$name','$mcid')";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:main_category.php');
    }else{
        echo "Record Not Inserted ";
    }
}


if(isset($_POST['btnAdd3']))
{
    $name=$_POST['txtname3'];
    $cid=$_POST['categoryv3'];

    $query="INSERT INTO `sub_category`( `subcat_name`, `category`) VALUES ('$name','$cid')";
    $result=mysqli_query($conn,$query);

    if($result)
    {
        header('location:main_category.php');
    }else{
        echo "Record Not Inserted ";
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
                        <h4 class="header-title">Main Category</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Icon</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                 <?php
                                $cquery = "select * from main_category";
                                $cresult = mysqli_query($conn, $cquery);
                                    while($crow=mysqli_fetch_assoc($cresult))
                                    {
                                    ?> 
                                <tr>
                                    <td><?php echo $crow['maincat_id'];?></td>
                                    <td><?php echo $crow['maincat_name'];?></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($crow['maincat_icon']); ?>"width="50px" height="50px" style="border-radius: 50%;"/></td>
                                    <td><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($crow['maincat_image']); ?>" width="50px" height="50px" style="border-radius: 50%;" /></td>
                                    <td><?php echo $crow['maincat_status'];?></td>
                                    <td><a href="main_category_edit.php?id=<?php echo $crow['maincat_id'];?>"class="btn" style="background-color: #336699 ;">Edit</a> | <a href="main_category_delete.php?id=<?php echo $crow['maincat_id'];?>"class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Category : </label>
                            <input type="text" class="form-control" name="txtname" required/><br/>
                            <label>Upload Image : </label>
                            <input type="file" class="form-control" name="image" placeholder="Image" required/><br/>
                            <label>Upload Icon : </label>
                            <input type="file" class="form-control" name="icon" placeholder="Icon" required/><br/>
                            <br>
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Add Main Category" name="btnAdd" />
                        </form>
                    </div>
                </div>
            
            </div>

</div>

</div>



<div class="container-fluid">

<div class="row">
                <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Category</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Main Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                 <?php
                                $cquery = "select * from `category` c join `main_category` mc on c.main_category = mc.maincat_id";
                                $cresult = mysqli_query($conn, $cquery);
                                    while($crow=mysqli_fetch_assoc($cresult))
                                    {
                                    ?> 
                                <tr>
                                    <td><?php echo $crow['cat_id'];?></td>
                                    <td><?php echo $crow['cat_name'];?></td>
                                    <td><?php echo $crow['maincat_name'];?></td>
                                    <td><a href="main_category_edit.php?cid=<?php echo $crow['cat_id'];?>"class="btn" style="background-color: #336699 ;">Edit</a> | <a href="main_category_delete.php?cid=<?php echo $crow['cat_id'];?>"class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Category : </label>
                            <input type="text" class="form-control" name="txtname2" required/><br/>
                            <label>Select Main Category : </label>
                            <?php 

                            $mcdquery = "select * from `main_category`";
                            $mcdresult = mysqli_query($conn, $mcdquery);

                            ?>
                            <select class="form-control" name="categoryv" id="categoryv">
                                <option>Select Category</option>
                                <?php
                                    while ($mdcrow = mysqli_fetch_assoc($mcdresult)) {
                                    ?>
                                <option value="<?php echo $mdcrow['maincat_id']; ?>"><?php echo $mdcrow['maincat_name']; ?></option>
                                <?php
                                    }
                                    ?>
                            </select>

                            <br>
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Add Category" name="btnAdd2" />
                        </form>
                    </div>
                </div>
            </div>
  
        <!-- end row -->
</div>




        

<div class="container-fluid">
<div class="row">
        <div class="col-12">
                    <div class="card-box table-responsive">
                        <h4 class="header-title">Sub Category</h4>
                        <br>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                 <?php
                                $scquery = "select * from `sub_category` sc join `category` c on sc.category = c.cat_id";
                                $scresult = mysqli_query($conn, $scquery);
                                    while($scrow=mysqli_fetch_assoc($scresult))
                                    {
                                    ?> 
                                <tr>
                                    <td><?php echo $scrow['subcat_id'];?></td>
                                    <td><?php echo $scrow['subcat_name'];?></td>
                                    <td><?php echo $scrow['cat_name'];?></td>
                                    <td><a href="main_category_edit.php?scid=<?php echo $scrow['subcat_id'];?>"class="btn" style="background-color: #336699 ;">Edit</a> | <a href="main_category_delete.php?scid=<?php echo $scrow['subcat_id'];?>"class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                        <form method="post" enctype="multipart/form-data">
                            <label>Enter Category : </label>
                            <input type="text" class="form-control" name="txtname3" required/><br/>
                            <label>Select Category : </label>
                        <?php 

                        $mcdquery2 = "select * from `category`";
                        $mcdresult2 = mysqli_query($conn, $mcdquery2);

                        ?>
                            <select class="form-control" name="categoryv3" id="categoryv3">
                                <option>Select Category</option>
                                <?php
                                    while ($mdcrow2 = mysqli_fetch_assoc($mcdresult2)) {
                                    ?>
                                <option value="<?php echo $mdcrow2['cat_id']; ?>"><?php echo $mdcrow2['cat_name']; ?></option>
                                <?php
                                    }
                                    ?>
                            </select>

                            <br>
                            <input type="submit" class="btn " style="background-color: #336699 ;" value="Add Sub Category" name="btnAdd3" />
                        </form>
                    </div>
                </div>
            </div>
  
        <!-- end row -->

</div>
























        <?php
    include 'footer.php';
} else {
    header('location:login.php');
}
    ?>