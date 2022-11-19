<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/wolmart/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:35:59 GMT -->
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

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!--AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>

<?php include 'header.php' ?>

<!-- Start of Main -->
<main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="cart.php">Shopping Cart</a></li>
                        <li><a href="checkout.php" style="pointer-events: none">Checkout</a></li>
                        <li><a href="order.php" style="pointer-events: none">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="col-lg-8 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span>Product</span></th>
                                        <th></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        <th class="product-subtotal"><span>Subtotal</span></th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    if (isset($_SESSION['user_id'])) {
                                      $allcartuser = $_SESSION['user_id'];
                                    
                                      $allcartquery = "select * from `cart` join `product` p on cart.pro_id=p.pro_id where cart.user_id = '$allcartuser' ";
                                    
                                      $allcartresult = mysqli_query($conn, $allcartquery);
                                      $carttotal3 = 0;
                                      while ($allcartrow = mysqli_fetch_array($allcartresult)) {
                                ?>
                                    <tr>
                                    <td style="display: none;"><?php echo $allcartrow['cart_id']; ?></td>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="product-default.html">
                                                    <figure>
                                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($allcartrow['pro_img1']); ?>" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                                </a>
                                                <button type="submit" class="btn btn-close btntdelete" value="<?php echo $allcartrow['cart_id']; ?>"><i
                                                        class="fas fa-times"></i></button>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="product-default.html">
                                            <?php echo $allcartrow['pro_name']; ?>
                                            </a>
                                        </td>
                                        <td class="product-price" style="text-align: center ;"><span class="amount">$<?php echo $allcartrow['pro_price']; ?></span></td>
                                        <td class="product-quantity" style="text-align: center ;">
                                            <div class="input-group2">
                                                <input type="hidden" name="<?php $allcartrow['cart_pro_qty']; ?>" value="<?php echo $allcartrow['cart_pro_qty']; ?>">
                                                <input class="form-control qty" type="number" name="qty<?php echo $allcartrow['cart_pro_qty']; ?>" value="<?php echo $allcartrow['cart_pro_qty']; ?>" min="1" max="100000">
                                                <!-- <button class="quantity-plus w-icon-plus qty"></button>
                                                <button class="quantity-minus w-icon-minus qty"></button> -->
                                            </div>
                                        </td>
                                        <td class="product-subtotal" style="text-align: center ;">
                                            <span class="amount">$<?php echo $allcartrow['pro_price'] * $allcartrow['cart_pro_qty']; ?></span>
                                        </td>
                                    </tr>

                                    <?php
                                    $carttotal3 += $allcartrow['cart_pro_qty'] * $allcartrow['pro_price'];
                                        }

                                        $allcartcheck = mysqli_num_rows($allcartresult) > 0;
                                        if ($allcartcheck <= 0) { ?>
                                        
                                        <tr><td colspan="5" style="text-align: center ;">
                                        <h5> No Product in cart</h5></td></tr>

                                        </tbody>
                                        </table>
                                        <div class="cart-action mb-6">
                                            <a href="allproducts.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                                            
                                        </div>
                                    <?php

                                    }else{ ?>

                            </tbody>
                            </table>
                            <div class="cart-action mb-6">
                                <a href="allproducts.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                                <button type="submit" class="btn btn-rounded btn-default btn-clear btnclearcart" name="clear_cart" value="Clear Cart">Clear Cart</button> 
                                
                            </div>

                                <?php
                                    }
                                }else{ ?>
                                    
                                    <tr><td colspan="5" style="text-align: center ;">
                                    <h5> No Product in cart</h5></td></tr>

                                    </tbody>
                            </table>
                            <div class="cart-action mb-6">
                                <a href="allproducts.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                                <a href="signin.php" type="submit" class="btn btn-rounded btn-update" name="Login" value="Login Required">Login Required</a>
                            </div>
                                    <?php } ?>

                            <script>
$(document).ready(function() {
$(document).on('click', '.btntdelete', function() {
      var id = $(this).val();
      $.ajax({
        url: 'ajaxconfig.php',
        type: 'POST',
        data: {
          CartDelete: 1,
          c_id: id,
        },
        success: function(response) {
          if (response) {
            location.reload();
          } else {
            alert("Failed");
          }
        },
        error: function(err) {
          alert("Api Call Failed");
        },
      });
    });

    $(document).on('click', '.btnclearcart', function() {
     
      $.ajax({
        url: 'ajaxconfig.php',
        type: 'POST',
        data: {
          ClearCart: 1,
        },
        success: function(response) {
          if (response) {
            location.reload();
          } else {
            alert("Failed");
          }
        },
        error: function(err) {
          alert("Api Call Failed");
        },
      });
    });


    $(document).on('change', '.qty', function() {
      var row = $(this).closest('tr').find('td');
      var qty = $(this).val();
      

      var c_id = row['0'].innerText;
      $.ajax({
        url: 'ajaxconfig.php',
        type: 'POST',
        data: {
            CartUpdate: 1,
          c_qty: qty,
          ca_id: c_id,
        },
        success: function(response) {
          if (response) {
            location.reload();
          } else {
            alert("Failed");
          }
        },
        error: function(err) {
          alert("Api Call Failed");
        },
      });

    });
});
</script>     

                        </div>
                        <div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>$<?php if (isset($_SESSION['user_id'])) { echo $carttotal3; }else{ echo "0.00" ;} ?></span>
                                    </div>

                                    <hr class="divider">
                                <?php 
                                if (isset($_SESSION['user_id'])) {
                                if ($allcartcheck <= 0) { ?>
                                
                                    <span
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout disabled">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></span>
                                <?php }else{ ?>

                                    <a href="checkout.php"
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>

                                <?php
                                }}else{ ?>

                                        <span
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout disabled">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></span>
                                <?php
                                } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

<?php include 'footer.php' ?>