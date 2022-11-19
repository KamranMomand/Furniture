<?php
include 'config.php';
if($_POST['maincategory']){


$maincategory = $_POST["maincategory"];
$mresult = mysqli_query($conn,"SELECT * FROM `category` where `main_category` = '$maincategory'");
?>
<option value="">Select Category..</option>
<?php
while($mrow = mysqli_fetch_array($mresult)) {
?>
<option value="<?php echo $mrow["cat_id"];?>"><?php echo $mrow["cat_name"];?></option>
<?php
}
}else if($_POST['category']){
$category = $_POST["category"];
$cresult = mysqli_query($conn,"SELECT * FROM `sub_category` where `category` = '$category'");
?>
<option value="">Select Sub Category..</option>
<?php
while($crow = mysqli_fetch_array($cresult)) {
?>
<option value="<?php echo $crow["subcat_id"];?>"><?php echo $crow["subcat_name"];?></option>
<?php
}
}else{
    header('location: index.php');
}
?>