<?php
session_start(); 
if(isset($_SESSION['user_id'])){
  
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/wolmart/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:33:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Furniture Store</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description" content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body class="my-account">

<?php include 'header.php' ?>

<!-- Start of Main -->
<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content pt-2">
                <div class="container">
                    <div class="tab tab-vertical row gutter-lg">
                        <ul class="nav nav-tabs mb-6" role="tablist">
                            <li class="nav-item">
                                <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-orders" class="nav-link">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-downloads" class="nav-link">Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-addresses" class="nav-link">Addresses</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-details" class="nav-link">Account details</a>
                            </li>
                            <li class="link-item">
                                <a href="logout.php">Logout</a>
                            </li>
                        </ul>
                        <?php
                            $nameuser = $_SESSION['user_id'];
                            $namequery = "select * from user where user_id = '$nameuser'";
                            $nameresult = mysqli_query($conn, $namequery);
                            $namerow = mysqli_fetch_assoc($nameresult);
                            
                        ?>

                        <div class="tab-content mb-6">
                            <div class="tab-pane active in" id="account-dashboard">
                                <p class="greeting">
                                    Hello
                                    <span class="text-dark font-weight-bold"><?php echo $namerow['user_name'] ?></span>
                                    (not
                                    <span class="text-dark font-weight-bold"><?php echo $namerow['user_name'] ?></span>?
                                    <a href="logout.php" class="text-primary">Log out</a>)
                                </p>

                                <p class="mb-4">
                                    From your account dashboard you can view your <a href="#account-orders"
                                        class="text-primary link-to-tab">recent orders</a>,
                                    manage your <a href="#account-addresses" class="text-primary link-to-tab">shipping
                                        and billing
                                        addresses</a>, and
                                    <a href="#account-details" class="text-primary link-to-tab">edit your password and
                                        account details.</a>
                                </p>

                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-orders" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-orders">
                                                    <i class="w-icon-orders"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Orders</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-downloads" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-download">
                                                    <i class="w-icon-download"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Downloads</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-addresses" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-address">
                                                    <i class="w-icon-map-marker"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Addresses</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-details" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-account">
                                                    <i class="w-icon-user"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Account Details</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="wishlist.html" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-wishlist">
                                                    <i class="w-icon-heart"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Wishlist</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="logout.php">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-logout">
                                                    <i class="w-icon-logout"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Logout</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane mb-4" id="account-orders">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-orders">
                                        <i class="w-icon-orders"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders</h4>
                                    </div>
                                </div>
                                <?php 
                                $useriddd = $_SESSION['user_id'];
                                $orderquery = "select * from `pro_order` where user_id = '$useriddd'";
                                $orderqueryresult = mysqli_query($conn, $orderquery);
                                $ordercount = mysqli_num_rows($orderqueryresult);
                                ?>
                                <table class="shop-table account-orders-table mb-6 responsive">
                                    <thead>
                                        <tr style="text-align: left;">
                                            <th class="order-id">Order</th>
                                            <th class="order-date">Date & Time</th>
                                            <th class="order-total">Total</th>
                                            <th class="order-total">Shipping</th>
                                            <th class="order-status">Status</th>
                                            <th class="order-actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        if($ordercount > 0){
                                        while($orderroww = mysqli_fetch_assoc($orderqueryresult)){ ?>
                                        <tr>
                                            <td class="order-id"><?php echo $orderroww['order_id'] ?></td>
                                            <td class="order-date"><?php echo $orderroww['order_date'] ?><?php echo "&nbsp; &nbsp;".$orderroww['order_time'] ?></td>
                                            <td class="order-total"><span class="order-price">$<?php echo $orderroww['order_total'] ?></span> </td>
                                            <td class="order-status"><?php echo $orderroww['shipping'] ?></td>
                                            <td class="order-status"><?php echo $orderroww['order_status'] ?></td>
                                            <td class="">
                                                <a href="orderview.php?id=<?php echo $orderroww['order_id'] ?>"
                                                    class="btn btn-outline btn-default btn-block btn-sm btn-rounded">View</a> 
                                                    <a href="ordercancel.php?id=<?php echo $orderroww['order_id'] ?>"
                                                    class="btn btn-outline btn-default btn-block btn-sm btn-rounded">Cancel</a> 
                                            </td>
                                        </tr>
                                        <?php }} ?>
                                    </tbody>
                                </table>

                                <a href="allproducts.php" class="btn btn-dark btn-rounded btn-icon-right">Go
                                    Shop<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            <div class="tab-pane" id="account-downloads">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-downloads mr-2">
                                        <i class="w-icon-download"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title ls-normal">Downloads</h4>
                                    </div>
                                </div>
                                <p class="mb-4">No downloads available yet.</p>
                                <a href="allproducts.php" class="btn btn-dark btn-rounded btn-icon-right">Go
                                    Shop<i class="w-icon-long-arrow-right"></i></a>
                            </div>

                            <div class="tab-pane" id="account-addresses">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-map-marker">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Addresses</h4>
                                    </div>
                                </div>
                                <p>The following addresses will be used on the checkout page
                                    by default.</p>
                                <div class="row">

                                <?php
                            $useridd = $_SESSION['user_id'];
                            $addprintquery = "select * from `user_address` ua join `address_type` at on ua.add_type=at.type_id where ua.user_id = '$useridd'";
                            $addprintqueryresult = mysqli_query($conn, $addprintquery);
                            $addcount = mysqli_num_rows($addprintqueryresult);
                            while($addprintrow = mysqli_fetch_assoc($addprintqueryresult)){
                            
                        ?>
                                    <div class="col-sm-6 mb-6">
                                        <div class="ecommerce-address billing-address pr-lg-8">
                                            <h4 class="title title-underline ls-25 font-weight-bold"><?php echo $addprintrow["type_name"] ?> Address</h4>
                                            <address class="mb-4">
                                                <table class="address-table">
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <th>Company:</th>
                                                            <td><?php echo $addprintrow["company_name"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country:</th>
                                                            <td><?php echo $addprintrow["country"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address Line 1:</th>
                                                            <td><?php echo $addprintrow["street_add_1"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address Line 2:</th>
                                                            <td><?php echo $addprintrow["street_add_2"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>City:</th>
                                                            <td><?php echo $addprintrow["city"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>State:</th>
                                                            <td><?php echo $addprintrow["state"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>ZIP:</th>
                                                            <td><?php echo $addprintrow["zip"] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                            <br/>
                                                            <button value="<?php echo $addprintrow['add_id'] ?>"
                                            class="btn btn-link btn-underline btn-icon-right text-primary add_delet" style="font-size: 15px">Delete<i class="w-icon-long-arrow-right"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </address>
                                            
                                        </div>
                                    </div>
                                    
                                <?php } ?>
                                <ul class=" nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#account-address"
                                            class="btn btn-link btn-underline btn-icon-right text-primary nav-link" style="font-size: 15px">ADD ADDRESSES<i class="w-icon-long-arrow-right"></i></a>
                                            <!-- <a href="#account-shipping-address" class="nav-link">ADD SHIPPING ADDRESS</a> -->
                                    </li>
                                    </ul>
                                    
                                    <!-- <div class="col-sm-6 mb-6">
                                        <div class="ecommerce-address shipping-address pr-lg-8">
                                            <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address</h4>
                                            <address class="mb-4">
                                                <table class="address-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Name:</th>
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Company:</th>
                                                            <td>Conia</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Address:</th>
                                                            <td>Wall Street</td>
                                                        </tr>
                                                        <tr>
                                                            <th>City:</th>
                                                            <td>California</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country:</th>
                                                            <td>United States (US)</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Postcode:</th>
                                                            <td>92020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </address>
                                            
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <?php 
                            $addtypequery="select * from `address_type`";
                            $addtypequeryresult = mysqli_query($conn,$addtypequery);
                            
                            ?>
                            <div class="tab-pane" id="account-address">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-account mr-2">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Add Address</h4>
                                    </div>
                                </div>
                                <br/><br/>
                                <div class="form account-details-form">
                                
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Company Name</label>
                                                <input type="text" id="companyname" name="companyname" placeholder="Amazon"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="firstname">Country *</label>
                                                <select name="country" id="country" class="form-control form-control-md">
                                                    <option value="Pakistan" selected="selected">Pakistan (PK) </option>
                                                    <option value="United State">United States (US) </option>
                                                    <option value="United Kingdom">United Kingdom (UK)</option>
                                                    <option value="France">France</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="South Africa">South Africa</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Street Address 1 *</label>
                                                <input type="text" id="address1" name="address1" placeholder="House number and street name"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="firstname">Street Address 2</label>
                                            <input type="text" id="address2" name="address2" placeholder="Apartment, suite, unit, etc. (optional)"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">City *</label>
                                                <input type="text" id="city" name="city" 
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="firstname">State *</label>
                                            <input type="text" id="state" name="state" 
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">ZIP Code *</label>
                                                <input type="text" id="zip" name="zip" 
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                                                             
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label for="firstname">Address Type *</label>
                                                <select name="addresstype" id="addresstype" class="form-control form-control-md">
                                                <option value="Billing" selected="selected">Select Type..</option>
                                                    <?php while($addtyperow = mysqli_fetch_assoc($addtypequeryresult)){ ?>
                                                    <option value="<?php echo $addtyperow["type_id"] ?>" ><?php echo $addtyperow["type_name"] ?> </option>
                                                    <?php } ?>
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <button type="submit" id="btnaddaddress" class="btn btn-dark btn-rounded btn-sm mb-4">Add Address</button>
                                    <ul class=" nav-tabs" role="tablist">
                                            <li class="nav-item">
                                            <a href="#account-addresses"
                                                class="btn btn-link btn-underline btn-icon-right text-primary nav-link" id="btnalladdress" style="font-size: 15px">All ADDRESSES<i class="w-icon-long-arrow-right"></i></a>
                                                <!-- <a href="#account-shipping-address" class="nav-link">ADD SHIPPING ADDRESS</a> -->
                                            </li>
                                            </ul>
                            </div>
                            </div>

                            <div class="tab-pane" id="account-details">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-account mr-2">
                                        <i class="w-icon-user"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
                                    </div>
                                </div>
                                <form class="form account-details-form" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="firstname">Full Name *</label>
                                                <input type="text" id="txtfullname" name="firstname" value="<?php echo $namerow['user_name'] ?>" placeholder="John"
                                                    class="form-control form-control-md">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lastname">Phone Number *</label>
                                                <input type="text" id="txtphone" name="lastname" placeholder="Doe"
                                                    class="form-control form-control-md" value="<?php echo $namerow['user_phone'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="display-name">Country *</label>
                                        <input type="text" id="txtcountry" name="display_name" placeholder="John Doe"
                                            class="form-control form-control-md mb-0" value="<?php echo $namerow['user_country'] ?>">
                                        
                                    </div>

                                    <div class="form-group mb-6">
                                        <label for="email_1">Email address *</label>
                                        <input type="email" id="txtemail" name="email_1"
                                            class="form-control form-control-md" value="<?php echo $namerow['user_email'] ?>">
                                    </div>
                                  
                                    <h4 class="title title-password ls-25 font-weight-bold">Password change</h4>
                                    
                                    <div class="form-group mb-10">
                                        <label class="text-dark" for="conf-password">Confirm Password</label>
                                        <input type="password" class="form-control form-control-md"
                                            id="txtpassword" name="conf_password" value="<?php echo $namerow['user_password'] ?>">
                                    </div>
                                    <button type="submit" id="btnsavechanges" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
                                </form>
                            </div>

                            

                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <script>
    $(document).ready(function(){

    $('#btnsavechanges').click(function(){
        var fullname=$('#txtfullname').val();
        var email=$('#txtemail').val();
        var phone=$('#txtphone').val();
        var password=$('#txtpassword').val();
        var country=$('#txtcountry').val();
        

        $.ajax({

        url:'ajaxconfig.php',
        type:'POST',
        data:{
        Savechanges:1,
        u_name:fullname,
        u_email:email,
        u_phone:phone,
        u_country:country,
        u_pass:password,
        },
        success:function(response){
            if(response)
            {
                location.reload();
            }else
            {
                alert ("Failed");
            }
        },
        error:function(err)
        {
            alert ("Api Call Failed");
        },
           
        });
    });


    $(document).on('click','.add_delet',function(){
        var add_id = $(this).val();
        var confirmre = confirm("Do you really want to delete record?");
 
        if(confirmre){

        $.ajax({
            url:'ajaxconfig.php',
            type:'POST',
            data:{
            AddDelete:1,
            a_id:add_id,
            },
            success: function(response){
                if(response){
                    location.reload("#account-address");
                }else
                {
                    alert ("Failed");
                }
            },
            error:function(err)
        {
            alert ("Api Call Failed");
        },
        });
    }
    
    });
    
    $('#btnaddaddress').click(function(){
        var company=$('#companyname').val();
        var address1=$('#address1').val();
        var address2=$('#address2').val();
        var city=$('#city').val();
        var state=$('#state').val();
        var country=$('#country').val();
        var zip=$('#zip').val();
        var addresstype=$('#addresstype').val();


        $.ajax({

        url:'ajaxconfig.php',
        type:'POST',
        data:{
        Addaddress:1,
        c_name:company,
        a_1:address1,
        a_2:address2,
        a_city:city,
        a_state:state,
        a_country:country,
        a_zip:zip,
        a_addresstype:addresstype,

        },
        success:function(response){
            if(response)
            {
                swal("Great!", "Your Address Has Been Added!", "success").then(function() {
                    location.reload("#btnalladdress");
                });              

            }else
            {
                swal("Oops!", "Something Wrong! Please Try Again", "error");
            }
        },
        error:function(err)
        {
            alert ("Api Call Failed");
        },
           
        });
    });

    function blankfield(){
        $('#companyname').val("");
        $('#address1').val("");
        $('#address2').val("");
        $('#city').val("");
        $('#state').val("");
        $('#country').val("");
        $('#zip').val("");
        $('#addresstype').val("");
    }

    
    
});

</script>

<?php include 'footer.php';
}
else{

    header('location:signin.php');
}
?>