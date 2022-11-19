
<?php 
if (isset($_GET['id'])) {
    include 'config.php';
    $id = $_GET['id'];
    $orderview = "select * from `order_invoice` oi join `product` p on oi.pro_id=p.pro_id where oi.order_id='$id'";
    $orderviewresult = mysqli_query($conn, $orderview);

    $orderview2 = "select * from `pro_order` po join `user_address` ua on po.order_address=ua.add_id where po.order_id='$id'";
    $orderviewresult2 = mysqli_query($conn, $orderview2);
    $ordervrow2 = mysqli_fetch_assoc($orderviewresult2);
    
    $orderview3 = "select * from `billing_info` where order_id='$id'";
    $orderviewresult3 = mysqli_query($conn, $orderview3);
    $ordervrow3 = mysqli_fetch_assoc($orderviewresult3);

    
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/wolmart/order-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:37:05 GMT -->
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

    <!-- <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous"> -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body class="my-account">
    <?php include 'header.php' ?>

        <!-- Start of Main -->
        <main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Order View</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="orderview.php">Order View</a></li>
                        <li>Order #<?php echo $id ?></li>
                    </ul>
                </div>

            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            
                <div class="container">
                            
                            <div class="tab-pane active order">
                                <p class="mb-7">Order #<?php echo $id ?> was placed on <?php echo $ordervrow2['order_date'] ?>, and is currently <?php echo $ordervrow2['order_status'] ?>.</p>
                                <div class="order-details-wrapper mb-5">
                                    <h4 class="title text-uppercase ls-25 mb-5">Order Details</h4>
                                    <table class="order-table ">
                                        <thead>
                                            <tr>
                                                <th class="text-dark">Product</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $allprototal2 = 0;
                                            while($ordervrow = mysqli_fetch_assoc($orderviewresult)){
                                                $sptotal = $ordervrow['pro_price'] * $ordervrow['inv_pro_quantity'];
                                            ?>
                                            
                                            <tr>
                                                <td>
                                                    <span><?php echo $ordervrow['pro_name'] ?></span>&nbsp;<strong>x <?php echo $ordervrow['inv_pro_quantity'] ?></strong>
                                                </td>
                                                <td>$<?php echo $sptotal ?></td>
                                            </tr>

                                            <?php 
                                        $allprototal2 += $sptotal;
                                        } ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Subtotal:</th>
                                                <td>$<?php echo $allprototal2 ?></td>
                                            </tr>
                                            <tr>
                                                <th>Shipping:</th>
                                                <td><?php echo $ordervrow2['shipping'] ?></td>
                                            </tr>
                                            <tr>
                                                <th>Payment method:</th>
                                                <td><?php echo $ordervrow3['billing_type'] ?></td>
                                            </tr>
                                            <tr class="total">
                                                <th class="border-no">Total:</th>
                                                <td class="border-no">$<?php echo $ordervrow2['order_total'] ?></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- End of Order Details -->
                       
                                <div id="billing-account-addresses">
                                    <div class="row">       
                                        <div class="col-sm-6 mb-8">
                                            <div class="ecommerce-address billing-address">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Billing Address</h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['country'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['street_add_1'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['street_add_2'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['city'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['state'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['zip'] ?></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-8">
                                            <div class="ecommerce-address shipping-address">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Different Address</h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $ordervrow2['order_diff_addr'] ?></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Account Address -->
            
                                <a href="myaccount.php" class="btn btn-dark btn-rounded btn-icon-left btn-back mt-6 mb-6"><i class="w-icon-long-arrow-left"></i>Back To List</a>
                            </div>
                </div>
           
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <?php include 'footer.php' ?>

        <?php

} else {
    header('location: myaccount.php');
}
?>