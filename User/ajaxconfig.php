<?php
session_start();
include 'config.php';

if(isset($_POST['Signup']))
{
    $fname = htmlspecialchars($_POST['f_name']);
    $email = htmlspecialchars($_POST['s_email']);
    $phone = htmlspecialchars($_POST['s_phone']);
    $pass = htmlspecialchars($_POST['s_pass']);
    $encpass = password_hash($pass, PASSWORD_DEFAULT);
    $country = htmlspecialchars($_POST['s_country']);

    $emcheckquery = "select * from `user` where `user_email` = '$email'";
    $emcheckresult = mysqli_query($conn, $emcheckquery);
    $emailcount = mysqli_num_rows($emcheckresult);
    if($emailcount == 0){
        $query="INSERT INTO `user`(`user_email`, `user_password`, `user_name`, `user_country`, `user_phone`) VALUES ('$email','$encpass','$fname','$country','$phone')";
        $result=mysqli_query($conn,$query);
        echo $result;
        
    }
    echo 1;
  
}

if(isset($_POST['Login']))
{
    
    $email=mysqli_real_escape_string($conn, $_POST['l_email']);
    $pass=mysqli_real_escape_string($conn, $_POST['l_pass']);
    
    $queryl="select * from `user` where `user_email`='$email'";
    $resultl=mysqli_query($conn,$queryl);

    $checkl=mysqli_num_rows($resultl) > 0;
    if($checkl > 0)
    {
        $rowl = mysqli_fetch_assoc($resultl);
        if (password_verify($pass, $rowl['user_password'])) {
            $_SESSION['user_name'] = $rowl['user_name'];
            $_SESSION['user_id'] = $rowl['user_id'];
            echo 1;
        } else {
            echo 0;
        }
    }else {
        echo 0;
    }
}

if(isset($_POST['Contact']))
{
    $name = htmlspecialchars($_POST['c_name']);
    $email = htmlspecialchars($_POST['c_email']);
    $msg = htmlspecialchars($_POST['c_msg']);
    
    $queryc="INSERT INTO `contact`(`contact_fname`, `contact_email`, `contact_msg`) VALUES ('$name','$email','$msg')";
    $resultc=mysqli_query($conn,$queryc);
    echo $resultc;    
}

if(isset($_POST['Subscription']))
{
    $email = htmlspecialchars($_POST['s_email']);

    $query="INSERT INTO `subscription`(`sub_email`) VALUES ('$email')";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if (isset($_POST['cart'])) {
    if (isset($_SESSION['user_id'])) {
        $pid = $_POST['p_id'];
        $user = $_SESSION['user_id'];
        $qty = 1;
        $query = "INSERT INTO `cart`(`pro_id`, `cart_pro_qty`, `user_id`) VALUES ('$pid','$qty','$user')";
        $result = mysqli_query($conn, $query);
        echo $result;
    } else {
        echo "noadd";
    }
}

if (isset($_POST['CartDelete'])) {
    $cid = $_POST['c_id'];
    $query = "DELETE from cart where cart_id = '$cid'";
    $result = mysqli_query($conn, $query);
    echo $result;
}


if (isset($_POST['ClearCart'])) {
    $user = $_SESSION['user_id'];
    $query = "DELETE from cart where `user_id` = '$user'";
    $result = mysqli_query($conn, $query);
    echo $result;
}

if (isset($_POST['CartUpdate'])) {
    $cid = $_POST['ca_id'];
    $qty = $_POST['c_qty'];
    $query = "UPDATE `cart` SET `cart_pro_qty`='$qty' WHERE `cart_id`='$cid'";
    $result = mysqli_query($conn, $query);
    echo $result;
}

if(isset($_POST['Savechanges']))
{
    $user = $_SESSION['user_id'];
    $name = htmlspecialchars($_POST['u_name']);
    $email = htmlspecialchars($_POST['u_email']);
    $phone = htmlspecialchars($_POST['u_phone']);
    $country = htmlspecialchars($_POST['u_country']);
    $password = htmlspecialchars($_POST['u_pass']);
    
    $query="UPDATE `user` SET `user_email`='$email',`user_password`='$password',`user_name`='$name',`user_country`='$country',`user_phone`='$phone' WHERE `user_id`='$user'";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if(isset($_POST['Addaddress']))
{
    $company = htmlspecialchars($_POST['c_name']);
    $country = htmlspecialchars($_POST['a_country']);
    $add2 = htmlspecialchars($_POST['a_2']);
    $add1 = htmlspecialchars($_POST['a_1']);
    $city = htmlspecialchars($_POST['a_city']);
    $state = htmlspecialchars($_POST['a_state']);
    $zip = htmlspecialchars($_POST['a_zip']);
    $type = htmlspecialchars($_POST['a_addresstype']);
    $user=$_SESSION['user_id'];
    
    $query="INSERT INTO `user_address`(`company_name`, `country`, `street_add_1`, `street_add_2`, `city`, `state`, `zip`, `user_id`, `add_type`) VALUES ('$company','$country','$add1','$add2','$city','$state','$zip','$user','$type')";
    $result=mysqli_query($conn,$query);
    echo $result;
}

if (isset($_POST['feedback'])) {
    $user=$_SESSION['user_id'];
    $reviews = htmlspecialchars($_POST['f_comment']);
    $name = htmlspecialchars($_POST['f_name']);
    $email = htmlspecialchars($_POST['f_email']);
    $rating = $_POST['f_rating'];
    $pro_id = $_POST['f_pid'];
    $date = date("Y-m-d");
    date_default_timezone_set('Asia/Karachi');
    $time = date('h:i:s');

    $query = "INSERT INTO `rating`(`your_name`, `your_email`, `pro_id`, `user_id`, `review`, `rating`, `rating_date`, `rating_time`) VALUES ('$name','$email','$pro_id','$user','$reviews','$rating','$date','$time')";
    $result = mysqli_query($conn, $query);
    echo $result;
}


if (isset($_POST['wfeedback'])) {
    $user=$_SESSION['user_id'];
    $reviews = htmlspecialchars($_POST['f_comment']);
    $name = htmlspecialchars($_POST['f_name']);
    $email = htmlspecialchars($_POST['f_email']);
    $rating = $_POST['f_rating'];
    $pro_id = $_POST['f_pid'];
    $date = date("Y-m-d");
    date_default_timezone_set('Asia/Karachi');
    $time = date('h:i:s');

    $query = "INSERT INTO `wedding_rating` (`wrating_name`, `wrating_email`, `wpack_id`, `user_id`, `wreview`, `wrating`, `wrating_date`, `wrating_time`) VALUES ('$name','$email','$pro_id','$user','$reviews','$rating','$date','$time')";
    $result = mysqli_query($conn, $query);
    echo $result;
}


if (isset($_POST['Order'])) {
    $user=$_SESSION['user_id'];
    $aid = $_POST['a_id'];
    $ototal = $_POST['o_total'];
    $date = date("Y-m-d");
    date_default_timezone_set('Asia/Karachi');
    $time = date('h:i:s');
    $cardno = $_POST['b_card'];
    $diffadd = htmlspecialchars($_POST['d_add']);
    if($diffadd == ""){
        $diffadd = "No Any Different Address";
    }
    $notes = htmlspecialchars($_POST['note']);
    $shipptype = $_POST['o_shipp'];
    $cardtypee = $_POST['c_type'];
    $status = "On Hold";
    
    $query = "INSERT INTO `pro_order`(`order_date`, `order_time`, `order_total`, `user_id`, `order_address`, `order_diff_addr`, `shipping`,`order_notes`,`order_status`) VALUES ('$date','$time','$ototal','$user','$aid', '$diffadd','$shipptype','$notes','$status')";
    $result = mysqli_query($conn, $query);
    $o_id = mysqli_insert_id($conn);
    if ($result) {
        $c_query = "SELECT * FROM `cart` WHERE `user_id`='$user'";
        $c_result = mysqli_query($conn, $c_query);
        if (mysqli_num_rows($c_result) > 0) {
            while ($c_row = mysqli_fetch_array($c_result)) {
                $pro_id = $c_row['pro_id'];
                $qty = $c_row['cart_pro_qty'];

                $pquery = "SELECT * FROM `product` WHERE `pro_id`='$pro_id'";
                $presult = mysqli_query($conn, $pquery);
                $prow = mysqli_fetch_array($presult);

                $pro_name = $prow['pro_name'];
                $pro_price = $prow['pro_price'];

                $i_query = "INSERT INTO `order_invoice`(`pro_id`, `inv_pro_quantity`, `inv_pro_price`, `order_id`, `inv_pro_name`) VALUES ('$pro_id','$qty','$pro_price','$o_id','$pro_name')";
                $i_result = mysqli_query($conn, $i_query);
            }
            $b_query = "INSERT INTO `billing_info`(`billing_type`, `order_id`, `status`, `card_no`, `date`) VALUES ('$cardtypee','$o_id', '$status','$cardno','$date')";
            $b_result = mysqli_query($conn, $b_query);

            if ($b_result) {
                $cd_query = "DELETE FROM `cart` WHERE `user_id`='$user'";
                $cd_result = mysqli_query($conn, $cd_query);
            }
        }
    }

    echo $result;
}

if(isset($_POST['AddDelete']))
{
    $id=$_POST['a_id'];
    $query="DELETE FROM `user_address` WHERE `add_id`='$id'";
    $result=mysqli_query($conn,$query);
    echo $result;
}


?>