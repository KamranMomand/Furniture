<?php
session_start(); 
if(isset($_SESSION['user_id'])){
    
    
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:35:59 GMT -->
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>

<body>

<?php include 'header.php' ?>

<!-- Start of Main -->
<main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="cart.php">Shopping Cart</a></li>
                        <li class="active"><a href="checkout.php">Checkout</a></li>
                        <li><a href="order.php" style="pointer-events: none">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <?php
                if (isset($_SESSION['user_id'])) {
                  $allprouser = $_SESSION['user_id'];
                  $allproquery = "select * from cart c join `product` p on c.pro_id=p.pro_id where user_id = '$allprouser'";
                  $allproresult = mysqli_query($conn, $allproquery);
                } 
            ?>
            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    
                
                    <div class="form checkout-form" >
                        <div class="row mb-9">

                        
                            <div class="col-lg-7 pr-lg-4 mb-4">
                            <?php 
                    $useriddd = $_SESSION['user_id'];
                    $addcheckquery = "select * from `user_address` ua join `address_type` at on ua.add_type=at.type_id where ua.user_id = '$useriddd' && at.type_name = 'Billing'";
                    $addcheckqueryres = mysqli_query($conn, $addcheckquery);
                    $addcountcheck = mysqli_num_rows($addcheckqueryres);
                    $adddatafetch = mysqli_fetch_assoc($addcheckqueryres);

                    if($addcountcheck >= 1){ 
                    $userdetail = "select * from `user` where user_id = '$useriddd'";
                    $userdetailres = mysqli_query($conn, $userdetail);
                    $datafetch = mysqli_fetch_assoc($userdetailres);
                ?>
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>


                                <div class="row gutter-sm">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input type="text" class="form-control form-control-md" name="firstname" value="<?php echo $datafetch["user_name"] ?>"
                                                required disabled>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Company name</label>
                                            <input type="text" class="form-control form-control-md" name="company-name" value="<?php echo $adddatafetch["company_name"] ?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                
                                <input type="hidden" id="addressid" value="<?php echo $adddatafetch["add_id"] ?>"/>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country / Region *</label>
                                                <div class="select-box">
                                                    <select name="country" class="form-control form-control-md" disabled>
                                                    <option value="<?php echo $adddatafetch["country"] ?>" selected="selected"><?php echo $adddatafetch["country"] ?></option>
                                                        <option value="Pakistan" >Pakistan (PK) </option>
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
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <label>Town / City *</label>
                                            <input type="text" class="form-control form-control-md" name="town" value="<?php echo $adddatafetch["city"] ?>" required disabled>
                                        </div>
                                    
                                </div>
                                </div>
                                
                                <input type="hidden" name="address_id" id="address_id" value="<?php echo $adddatafetch["add_id"] ?>" disabled/>

                                <div class="form-group">
                                    <label>Street address *</label>
                                    <input type="text" placeholder="House number and street name" value="<?php echo $adddatafetch["street_add_1"] ?>"
                                        class="form-control form-control-md mb-2" name="street-address-1" required disabled>
                                    <input type="text" placeholder="Apartment, suite, unit, etc. (optional)" value="<?php echo $adddatafetch["street_add_2"] ?>"
                                        class="form-control form-control-md" name="street-address-2" required disabled>
                                </div>

                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State *</label>
                                        <input type="text" class="form-control form-control-md" name="company-name" value="<?php echo $adddatafetch["state"] ?>" disabled>
                                    </div>
                                        <div class="form-group">
                                            <label>ZIP *</label>
                                            <input type="text" class="form-control form-control-md" name="zip" value="<?php echo $adddatafetch["zip"] ?>" required disabled>
                                        </div>
                                    </div>
                                        <?php 
                                        $addtypequery="select * from `address_type`";
                                        $addtypequeryresult = mysqli_query($conn,$addtypequery);

                                        ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type *</label>
                                            <div class="select-box">
                                                <select name="country" class="form-control form-control-md" value="<?php echo $adddatafetch["type_name"] ?>" disabled>
                                                <option value="<?php echo $adddatafetch["type_name"] ?>" selected="selected"><?php echo $adddatafetch["type_name"] ?></option>
                                                    <?php while($addtyperow = mysqli_fetch_assoc($addtypequeryresult)){ ?>
                                                    <option value="<?php echo $addtyperow["type_id"] ?>" ><?php echo $addtyperow["type_name"] ?> </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone *</label>
                                            <input type="text" class="form-control form-control-md" name="phone" value="<?php echo $datafetch["user_phone"] ?>" required disabled>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group mb-7">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control form-control-md" name="email" value="<?php echo $datafetch["user_email"] ?>" required disabled>
                                </div>
                                <div class="form-group checkbox-toggle pb-2">
                                    <input type="checkbox" class="custom-checkbox" id="shipping-toggle" value="shippadd" name="shipping-toggle">
                                    <label for="shipping-toggle">Ship to a different address?</label>
                                </div>
                                <div class="checkbox-content">
                                    
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input type="text" placeholder="House number, street name and Apartment, suite, unit, etc." 
                                        class="form-control form-control-md" name="diffaddress" id="diffaddress" >
                                                                                
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30"
                                        rows="4" placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                                <?php }else{ ?>


    <p class="mb-0" style="font-size: 15px">
    Your Address Doesn't Exist. Please Add The Address First!
                                                        </p> <br/>
    <div style="width: 180px">
                <a href="myaccount.php" class="btn btn-dark btn-block btn-rounded">Add Addresses</a>
            </div>

<?php
} ?>
                            </div>

                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Product</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            
                                                <?php

                                                  $allprototal = 0;
                                                  while ($allprorow = mysqli_fetch_array($allproresult)) {
                                                  
                                            
                                            ?>
                                                <tr class="bb-no">
                                                    <td class="product-name"><?php echo $allprorow['pro_name']; ?>&nbsp; &nbsp; <?php echo $allprorow['pro_price']; ?><i
                                                            class="fas fa-times"></i> <span
                                                            class="product-quantity"><?php echo $allprorow['cart_pro_qty']; ?></span></td>
                                                    <td class="product-total">$<?php echo $allprorow['cart_pro_qty'] * $allprorow['pro_price']; ?></td>
                                                </tr>
                                                
                                                <?php $allprototal += $allprorow['cart_pro_qty'] * $allprorow['pro_price'];
                                                } ?>

                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal</b>
                                                    </td>
                                                    <td>
                                                        <b>$<?php echo $allprototal ; ?></b>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                
                                            <tr class="order-total">
                                                    <th>
                                                        <b>Shipping Charges</b>
                                                    </th>
                                                    
                                                    <td>
                                                        <span>$<span id="priceprint"></span>.00</span>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>
                                                        <b>Total</b>
                                                    </th>
                                                    <td>
                                                        <b>$<span id="ordertotal"></span></b>
                                                        <input type="hidden" id="prodtotalam" value="<?php echo $allprototal;?>" />
                                                    </td>
                                                </tr>

                                                <tr class="shipping-methods">
                                                    <td colspan="2" class="text-left">
                                                        <h4 class="title title-simple bb-no mb-1 pb-0 pt-3">Shipping
                                                        </h4>
                                                        <ul id="shipping-method" class="mb-4">
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="free-shipping"
                                                                        class="custom-control-input" name="shipping" value="FreeShipping">
                                                                    <label for="free-shipping"
                                                                        class="custom-control-label color-dark">Free
                                                                        Shipping: $0.00</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="local-pickup"
                                                                        class="custom-control-input" name="shipping" value="LocalPickup">
                                                                    <label for="local-pickup"
                                                                        class="custom-control-label color-dark">Local
                                                                        Pickup: $5.00</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-radio">
                                                                    <input type="radio" id="flat-rate"
                                                                        class="custom-control-input" name="shipping" value="FlatRate">
                                                                    <label for="flat-rate"
                                                                        class="custom-control-label color-dark">Flat
                                                                        rate: $10.00</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <div class="payment-methods" id="paymethod">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">

                                                <div class="card">
                                                    <input id="cashod" name="paymentMethod" type="radio" value="cod" >
                                                    <label class="custom-control-label" style="font-size: 15px; font-weight: 300; color: rgb(105, 105, 105);" for="cashod">&nbsp; &nbsp;Cash On Delivery</label>
                                                        <!-- <a href="#delivery" name="paymethod" id="paymethodc" value="cod" class="collapse">Cash on delivery</a> -->
                                                   
                                                    <div id="delivery" class="card-body" style="display: none ;">
                                                       
                                                        <p class="mb-0">
                                                        <input type="hidden" id="cashond" value="Cash On Delivery" 
                                                        class="form-control form-control-md" name="cashond">
                                                            Pay with cash upon delivery.
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    
                                                        <input id="credit" name="paymentMethod" type="radio" value="credit" >
                                                    <label class="custom-control-label" style="font-size: 15px; font-weight: 300; color: rgb(105, 105, 105);" for="cashod">&nbsp; &nbsp;Credit Card</label>
                                                        <!-- <a href="#cash-on-delivery" name="paymethod" id="paymethodcr" value="credit" class="expand">Credit Card</a> -->
                                                    
                                                    <div id="creditcard" class="card-body" style="display: none ;">
                                                        <br/>
                                                        <p class="mb-0">
                                                        <input type="text" id="creditcardno" placeholder="****-****-****-****" 
                                                        class="form-control form-control-md" name="creditcardno">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                        
                                                    </div>
                                                </div>
                                                
                                                <div class="card">
                                                   
                                                    <input id="paypal" name="paymentMethod" type="radio" value="paypal" >
                                                    <label class="custom-control-label" style="font-size: 15px; font-weight: 300; color: rgb(105, 105, 105);" for="cashod">&nbsp; &nbsp;PayPal</label>
                                                        <!-- <a href="#paypal" name="paymethod" id="paymethodp" value="paypal" class="expand">PayPal</a> -->
                                                    
                                                    <!-- <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.hbl.com/personal/cards/debit-cards/debit-cards-overview','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a> -->
                                                    
                                                    <div id="paypalac" class="card-body" style="display: none ;">
                                                        <br/>
                                                        <p class="mb-0">
                                                        <input type="text" placeholder="****-****-****-****" 
                                                        class="form-control form-control-md" id="paypalacc" name="paypalacc">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded" id="btnplaceorder">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                            </div>
                    
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <script>

$(document).ready(function() {

  
        var price = $('#prodtotalam').val();
        $('#ordertotal').text(price);

        var shipp = "";
        
        $('input:radio[name="shipping"]').change(function() {
        if ($(this).val() == 'FreeShipping') {
          
            price = 0;
            shipp = "Free Shipping";
            $('#priceprint').text(price);
            var prototal = $('#prodtotalam').val();
            var ordertotal = parseInt(prototal) + parseInt(price);
            $('#ordertotal').text(ordertotal);
        } 
        if ($(this).val() == 'LocalPickup') {

            price = 5;
            shipp = "Local Pickup";
            $('#priceprint').text(price);
            var prototal = $('#prodtotalam').val();
            var ordertotal = parseInt(prototal) + parseInt(price);
            $('#ordertotal').text(ordertotal);
        } 
        if ($(this).val() == 'FlatRate') {

            price = 10;
            shipp = "Flat Rate";
            $('#priceprint').text(price);
            var prototal = $('#prodtotalam').val();
            var ordertotal = parseInt(prototal) + parseInt(price);
            $('#ordertotal').text(ordertotal);
            
        }
      });



      $('input:radio[name="paymentMethod"]').change(function() {
        if ($(this).val() == 'credit') {
          $('#creditcard').show();
        } else {
          $('#creditcard').hide();
        }
        if ($(this).val() == 'cod') {
          $('#delivery').show();
        } else {
          $('#delivery').hide();
        }
        if ($(this).val() == 'paypal') {
          $('#paypalac').show();
        } else {
          $('#paypalac').hide();
        }
      });
      

    $('#btnplaceorder').click(function() {
                
        var total = $('#ordertotal').html();
        var type = $("input[name='paymentMethod']:checked").val();

        var card = "";
        var cardtype = "";
            if (type == "credit") {
                card = $('#creditcardno').val();
                cardtype = "Credit Card";
            }
            if (type == "cod") {
                card = $('#cashond').val();
                cardtype = "Cash On Delivery";
            }
            if (type == "paypal") {
                card = $('#paypalacc').val();
                cardtype = "PayPal";
            }

        var address = $('#addressid').val();
        var diffadd = $('#diffaddress').val();
        var notes = $('#order-notes').val();
        
        $.ajax({

            url: 'ajaxconfig.php',
            type: 'POST',
            data: {
                Order: 1,
                a_id: address,
                o_total: total,
                b_card: card,
                d_add: diffadd,
                note: notes,
                o_shipp: shipp,
                c_type: cardtype,
            },
            success: function(response) {
                if (response) {
                    window.location.replace("order.php");
                    // alert("Order Successfully");
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

<?php include 'footer.php';
   
}
else{

    header('location:signin.php');
}
?>