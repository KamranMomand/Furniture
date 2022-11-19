<?php
    if(session_id()==null) 
    { 
        session_start(); 
    } 
    include 'config.php';
    ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:36:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Wolmart - Furniture Store</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/icons/favicon.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
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

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/demo1.min.css">

    <!--AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Wolmart - Responsive Marketplace HTML Template</h1>
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Wolmart Store message or remove it!</p>
                    </div>
                    <div class="header-right">
                        <span class="divider d-lg-show"></span>
                        <a href="contact.php" class="d-lg-show">Contact Us</a>
                        <a href="myaccount.php" class="d-lg-show">My Account</a>
                        <?php
                        if(isset($_SESSION['user_id']))
                        {
                        ?>
                        <span class="d-lg-show" style="color: #336699 ;"><?php echo $_SESSION['user_name'] ?></span><span class="divider d-lg-show"></span>
                        <a href="logout.php" class="d-lg-show"><i class="w-icon-account"></i>Log Out</a>
                        <?php
                        }else
                        {
                        ?>
                        <a href="login.php" class="d-lg-show login sign-in"><i class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter d-lg-show">/</span>                        
                        <a href="login.php" class="ml-0 d-lg-show login register">Register</a>
                        <?php 
                        } 
                        ?>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->
            <?php
                $allcatdropquery = "select * from main_category";
                $allcatdropresult = mysqli_query($conn,$allcatdropquery);
   
            ?>
            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="index.php" class="logo ml-lg-0">
                            <img src="assets/images/logo.png" alt="logo" width="144" height="45" />
                        </a>
                        <form method="post" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="searchcategory">
                                <option value="all">All Categories</option>
                                    <?php 
                                    while($allcatrow = mysqli_fetch_array($allcatdropresult)) { ?>

                                    <option value="<?php echo $allcatrow['maincat_id'] ?>"><?php echo $allcatrow['maincat_name'] ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search in..." required />
                            <button class="btn btn-search" type="submit" name="btnsearch"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">0(800)123-456</a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="myaccount.php">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="cart.php" class="cart-toggle label-down link">
                            <?php
                                if (isset($_SESSION['user_id'])) {
                                  $cartuser = $_SESSION['user_id'];
                                  $cartquery = "select * from cart where user_id = '$cartuser'";
                                  $cartresult = mysqli_query($conn, $cartquery);
                                  $cartcount = mysqli_num_rows($cartresult);
                                }
                                
                            ?>

                                <i class="w-icon-cart">
                                    <?php if (isset($_SESSION['user_id'])) { ?><span class="cart-count"><?php  echo $cartcount;  ?></span><?php } ?>
                                </i>
                                
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                

                                <?php
                                if (isset($_SESSION['user_id'])) {
                                  $user = $_SESSION['user_id'];
                                
                                  $acartquery = "select * from `cart` join `product` p on cart.pro_id=p.pro_id where cart.user_id = '$user' ";
                                  $acartresult = mysqli_query($conn, $acartquery);
                                  $carttotal2 = 0;
                                  while ($acartrow = mysqli_fetch_array($acartresult)) {
                            ?>
                                    <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name"><?php echo $acartrow['pro_name']; ?></a>
                                            <div class="price-box">
                                                <span class="product-quantity"><?php echo $acartrow['cart_pro_qty']; ?></span>
                                                <span class="product-price">$<?php echo $acartrow['pro_price']; ?></span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($acartrow['pro_img1']); ?>" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close btntdelete" value="<?php echo $acartrow['cart_id']; ?>" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                    </div>
                                    <?php
                                    $carttotal2 += $acartrow['cart_pro_qty'] * $acartrow['pro_price'];
                                  }
                                        
                                    ?>
                                    
                              
                                    <?php
                                        $acartcheck = mysqli_num_rows($acartresult) > 0;
                                        if ($acartcheck <= 0) { ?>
                                        <br/>
                                        <h5> No Data in cart</h5>
                                        <br/>
                                        <div class="cart-action">
                                        <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                        <a href="allproducts.php" class="btn btn-primary btn-rounded">Shop</a>
                                        </div>
                                    <?php
                                        } else {
                                    ?>
                                        <div class="cart-total">
                                        <label>Subtotal:</label>
                                        <span class="price">$<?php echo $carttotal2 ?></span>
                                        </div>
                                        <div class="cart-action">
                                            <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                            <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                                        </div>
                                    <?php 
                                        }
                                          }else{ ?>

                                        <br/>
                                        <h5> No Data in cart</h5>
                                        <br/>
                                        <div class="cart-action">
                                        <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                        <a href="signin.php" class="btn btn-primary btn-rounded">Login</a>
                                        </div>

                                        <?php } ?>
                                                        
                            </div>
                            <script>

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

</script>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>
                                
                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                <?php
                                    $query = "select * from `main_category`";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {
                                    $cquery = "select * from `category` where main_category=" . $row['maincat_id'];
                                    $cresult = mysqli_query($conn, $cquery);
                                    $ccount = mysqli_num_rows($cresult);
                                
                                    if ($row['maincat_status'] == "Active") {
                                ?>
                                        
                                        <li>
                                            <a href="maincatproduct.php?id=<?php echo $row[0]; ?>">
                                                <i><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['maincat_icon']); ?>" alt="Menu Banner"
                                                                 /></i><?php echo $row['maincat_name']; ?>
                                            </a>
                                            <?php if($ccount >0 ){ ?>
                                            <ul class="megamenu">
                                                <li>
                                                <?php
                                                while ($crow = mysqli_fetch_array($cresult)) {
                                                ?>
                                                <ul>
                                                        <li><a href="categoryproduct.php?id=<?php echo $crow[0]; ?>"><?php echo $crow['cat_name']; ?></a></li>
                                                        <hr class="divider">
                                                </ul>
                                                    
                                                    <?php } ?>
                                                </li>
                                                <li>
                                                    <div class="menu-banner banner-fixed menu-banner3">
                                                        <figure>
                                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['maincat_image']); ?>" alt="Menu Banner"
                                                                width="235" height="461" />
                                                        </figure>
                                                        
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } ?>
                                        </li>

                                        
                                        <?php
                                        }
                                        }
                                                
                                        ?>

                                        <li>
                                            <a href="allproducts.php"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="active">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="allproducts.php">Products</a>
                                        <!-- Start of Megamenu -->
                                    <ul>
                                        <?php
                                            
                                            $pcquery = "select * from `category`";
                                            $pcresult = mysqli_query($conn, $pcquery);
                                            while ($pcrow = mysqli_fetch_array($pcresult)) {
                                            $pscquery = "select * from `sub_category` where category=" . $pcrow['cat_id'];
                                            $pscresult = mysqli_query($conn, $pscquery);
                                            $psccount=mysqli_num_rows($pscresult);
                                                                                        
                                        ?>
                                            <li>
                                                <a href="categoryproduct.php?id=<?php echo $pcrow[0]; ?>"><?php echo $pcrow['cat_name']; ?></a>
                                                <?php if($psccount >0 ){ ?>
                                                <ul>
                                                <?php
                                                while ($pscrow = mysqli_fetch_array($pscresult)) {
                                                ?>
                                                    <li><a href="subcatproduct.php?id=<?php echo $pscrow[0]; ?>"><?php echo $pscrow['subcat_name']; ?></a></li>
                                                    
                                                <?php } ?>
                                                </ul>
                                                <?php } ?>
                                            </li>
                                            
                                        <?php
                                            }
                                        ?>
                                    </ul>
                                        <!-- End of Megamenu -->
                                    </li>
                                    <li>
                                        <a href="weddingpackages.php">Wedding Packages</a>
                                    </li>
                                    <li>
                                        <a href="import.php">Import</a>
                                    </li>
                                    <li>
                                        <a href="about.php">About</a>
                                        <ul>
                                            <li><a href="faqs.php">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                    
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                        <a href="budgetfilter.php" class="d-xl-show"><i class="w-icon-grid mr-2" ></i>Filter By Budget</a>
                            <a href="specialoffers.php"><i class="w-icon-sale"></i>Deals Hot Of The Day</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->
        
<!-- Start of Main-->
<main class="main">
            <section class="intro-section">
                <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                            style="background-image: url(assets/images/demos/demo1/sliders/slide-1.jpg); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate">
                                    <img src="assets/images/banner22.png" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="574" height="497">
                                </figure>
                                <div class="banner-content y-50 text-right">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                        Custom <span class="p-relative d-inline-block">Furniture</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                        Luxury Couch
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                        Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                                    </p>

                                    <a href="allproducts.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">SHOP NOW<i class="w-icon-long-arrow-right"></i></a>

                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide1 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                            style="background-image: url(assets/images/demos/demo1/sliders/slide-2.jpg); background-color: #ebeef2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s'
                                }">
                                    <img src="assets/images/banner.png" alt="Banner"
                                        data-bottom-top="transform: translateX(10vh);"
                                        data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                                </figure>
                                <div class="banner-content d-inline-block y-50">
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                        Modway Garner-<span class="text-secondary">Outdoor</span>
                                    </h5>
                                    <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Wicker Hanging
                                    </h3>
                                    <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        Only until the end of this week.
                                    </p>
                                    <a href="allproducts.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '1s'
                                    }">
                                        SHOP NOW<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </div>
                                <!-- End of .banner-content -->
                            </div>
                            <!-- End of .container -->
                        </div>
                        <!-- End of .intro-slide2 -->

                        <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                            style="background-image: url(assets/images/demos/demo1/sliders/slide-3.jpg); background-color: #f0f1f2;">
                            <div class="container">
                                <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s'
                                }">
                                    <img src="assets/images/banner55.png" alt="Banner"
                                        data-bottom-top="transform: translateY(10vh);"
                                        data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                                </figure>
                                <div class="banner-content text-right y-50">
                                    <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.6s'
                                    }">
                                        Top weekly Seller
                                    </p>
                                    <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                        Trending Collection
                                    </h5>
                                    <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                        data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }"><span class="text-white mr-4">Best</span>-Couch
                                    </h3>
                                    <div class="btn-group slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                        <a href="allproducts.php"
                                            class="btn btn-dark btn-outline btn-rounded btn-icon-right">SHOP
                                            NOW<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End of .banner-content -->
                                </div>
                                <!-- End of .container -->
                            </div>
                        </div>
                        <!-- End of .intro-slide3 -->
                    </div>
                    <div class="swiper-pagination"></div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                </div>
                <!-- End of .swiper-container -->
            </section>
            <!-- End of .intro-section -->

            <div class="container">
                <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
                    <!-- <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-shipping">
                                <i class="w-icon-truck"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                                <p class="text-default">For all orders over $99</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                            <span class="icon-box-icon icon-payment">
                                <i class="w-icon-bag"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                                <p class="text-default">We ensure secure payment</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                            <span class="icon-box-icon icon-money">
                                <i class="w-icon-money"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                                <p class="text-default">Any back within 30 days</p>
                            </div>
                        </div>
                        <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                            <span class="icon-box-icon icon-chat">
                                <i class="w-icon-chat"></i>
                            </span>
                            <div class="icon-box-content">
                                <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                                <p class="text-default">Call or email us 24/7</p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- End of Iocn Box Wrapper -->


                <?php 
                    $bannerquery1 = "select * from `home_banner` where status = 'Active'";
                    $bannerresult1 = mysqli_query($conn, $bannerquery1);
                    $row1 = mysqli_fetch_array($bannerresult1);

                    $bannerquery2 = "select * from `home_banner2` where status = 'Active'";
                    $bannerresult2 = mysqli_query($conn, $bannerquery2);
                    $row2 = mysqli_fetch_array($bannerresult2);

                    $bannerquery3 = "select * from `home_banner3` where status = 'Active'";
                    $bannerresult3 = mysqli_query($conn, $bannerquery3);
                    $row3 = mysqli_fetch_array($bannerresult3);

                    $bannerquery4 = "select * from `home_banner4` where status = 'Active'";
                    $bannerresult4 = mysqli_query($conn, $bannerquery4);
                    $row4 = mysqli_fetch_array($bannerresult4);

                    $bannerquery5 = "select * from `home_wedding_banner` where status = 'Active'";
                    $bannerresult5 = mysqli_query($conn, $bannerquery5);
                    $row5 = mysqli_fetch_array($bannerresult5);

                    $bannerquery6 = "select * from `home_office_banner` where status = 'Active'";
                    $bannerresult6 = mysqli_query($conn, $bannerquery6);
                    $row6 = mysqli_fetch_array($bannerresult6);

                    $bannerquery7 = "select * from `home_rest_banner` where status = 'Active'";
                    $bannerresult7 = mysqli_query($conn, $bannerquery7);
                    $row7 = mysqli_fetch_array($bannerresult7);


                ?>
                <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure style="border: solid ; border-width: thin ;border-color: #d9d9d9 ; border-radius: 5px;">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['banner_image']); ?>" alt="Category Banner"
                                    width="610" height="160" style="background-color: #ecedec;" />
                            </figure>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure style="border: solid ; border-width: thin ;border-color: #d9d9d9 ; border-radius: 5px;">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row2['banner2_image']); ?>" alt="Category Banner" width="610" height="160" style="background-color: #636363;" />
                            </figure>
                            
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

                <?php 
                $dailyoffer = "select * from `daily_offers` do join `product` p on do.product_id=p.pro_id join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id where do.offer_status = 'Active'";
                $dailyofferresult = mysqli_query($conn,$dailyoffer);
                
                ?>

                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-lg-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                                Deals Hot of The Day
                            </h4>
                            <div class="swiper">
                                <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">
                                
                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                    <?php while($dailyrows = mysqli_fetch_assoc($dailyofferresult)){ 
                                        
                                        ?>
                                        <div class="swiper-slide">
                                            <div class="product product-single row">
                                                <div class="col-md-6">
                                                    <div class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                        <div class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                            <div class="swiper-wrapper row cols-1 gutter-no">
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img1']); ?>"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-1-800x900.jpg"
                                                                            alt="<?php echo $dailyrows['pro_name'] ?>" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img2']); ?>"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-2-800x900.jpg"
                                                                            alt="<?php echo $dailyrows['pro_name'] ?>" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img3']); ?>"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-3-800x900.jpg"
                                                                            alt="<?php echo $dailyrows['pro_name'] ?>" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                                <div class="swiper-slide">
                                                                    <figure class="product-image">
                                                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img1']); ?>"
                                                                            data-zoom-image="assets/images/demos/demo1/products/1-4-800x900.jpg"
                                                                            alt="<?php echo $dailyrows['pro_name'] ?>" width="800"
                                                                            height="900">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <button class="swiper-button-next"></button>
                                                            <button class="swiper-button-prev"></button>
                                                            <div class="product-label-group">
                                                                <label class="product-label label-discount"><?php echo $dailyrows['discount'] ?>%
                                                                    Off</label>
                                                            </div>
                                                        </div>
                                                        <div class="product-thumbs-wrap swiper-container"
                                                            data-swiper-options="{
                                                            'direction': 'vertical',
                                                            'breakpoints': {
                                                                '0': {
                                                                    'direction': 'horizontal',
                                                                    'slidesPerView': 4
                                                                },
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">
                                                            <div class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img1']); ?>"
                                                                        alt="<?php echo $dailyrows['pro_name'] ?>" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img2']); ?>"
                                                                        alt="<?php echo $dailyrows['pro_name'] ?>" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img3']); ?>"
                                                                        alt="<?php echo $dailyrows['pro_name'] ?>" width="60" height="68" />
                                                                </div>
                                                                <div class="product-thumb swiper-slide">
                                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img1']); ?>"
                                                                        alt="<?php echo $dailyrows['pro_name'] ?>" width="60" height="68" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="product-details scrollable">
                                                        <h2 class="product-title mb-1"><a
                                                                href="productdetails.php?id=<?php echo $dailyrows['pro_id'] ?>"><?php echo $dailyrows['pro_name'] ?></a></h2>

                                                        <hr class="product-divider">

                                                        <div class="product-price"><ins class="new-price ls-50">$<?php echo $dailyrows['pro_price'] ?></ins></div>

                                                        <div class="product-countdown-container flex-wrap">
                                                            <label class="mr-2 text-default">Offer Start In:</label>
                                                            <!-- <div class="product-countdown countdown-compact"
                                                                data-until="2022, 12, 31" data-compact="true"> -->
                                                                <span style="color: #336699 ; font-weight: 700;"><?php echo $dailyrows['start_date'] ?>,  &nbsp; <?php echo $dailyrows['start_time'] ?></span>
                                                            <!-- </div> -->
                                                        </div>
                                                        
                                                        <div class="product-countdown-container flex-wrap">
                                                            <label class="mr-2 text-default">Offer Ends In:</label>
                                                            <!-- <div class="product-countdown countdown-compact"
                                                                data-until="2022, 12, 31" data-compact="true"> -->
                                                                <span style="color: #336699 ; font-weight: 700;"><?php echo $dailyrows['end_date'] ?>,  &nbsp; <?php echo $dailyrows['end_time'] ?></span>
                                                            <!-- </div> -->
                                                                                                                                
                                                        </div>
                                                        

                                                        <div
                                                            class="product-form product-variation-form product-size-swatch mb-3">
                                                            <label class="mb-1">Category:</label>
                                                            <div
                                                                class="flex-wrap d-flex align-items-center">
                                                                <span class="size"><?php echo $dailyrows['maincat_name']; ?></span> &nbsp; / &nbsp;
                                                                <span class="size"><?php echo $dailyrows['cat_name']; ?> </span>&nbsp; / &nbsp;
                                                                <span class="size"><?php echo $dailyrows['subcat_name']; ?></span>
                                                            </div>
                                                        </div>

                                                        <div class="product-form pt-4">
                                                            <div class="product-qty-form mb-2 mr-2">
                                                                <div class="input-group">
                                                                    <input class="quantity form-control" type="number"
                                                                        min="1" max="10000000">
                                                                    <button class="quantity-plus w-icon-plus"></button>
                                                                    <button
                                                                        class="quantity-minus w-icon-minus"></button>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-cart btncart" value="<?php echo $dailyrows['pro_id']; ?>">
                                                                <i class="w-icon-cart"></i>
                                                                <span>Add to Cart</span>
                                                            </button>
                                                        </div>

                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        <?php 
                                    
                                    
                                    } ?>
                                        
                                    </div>
                                    <button class="swiper-button-prev"></button>
                                    <button class="swiper-button-next"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-4">
                        <div class="widget widget-products widget-products-bordered h-100">
                            <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                                    Seller</h4>
                                <div class="swiper">
                                    <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }">
                                        <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                            <div class="swiper-slide product-widget-wrap">
                                            <?php 
                                                        $topquery = "SELECT * FROM `rating` r join `product` p on r.pro_id=p.pro_id  WHERE p.pro_status = 'Active' AND r.rating = '5' ORDER BY p.pro_id DESC LIMIT 3";
                                                        $topqueryresult = mysqli_query($conn, $topquery);

                                                        $topquery2 = "SELECT * FROM `rating` r join `product` p on r.pro_id=p.pro_id  WHERE p.pro_status = 'Active' AND r.rating >= '4' ORDER BY p.pro_id DESC LIMIT 3";
                                                        $topqueryresult2 = mysqli_query($conn, $topquery2);
                            
                                                        while ($toprows = mysqli_fetch_array($topqueryresult)) {
                                                    ?>
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="productdetails.php?id=<?php echo $toprows['pro_id']; ?>">
                                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($toprows['pro_img1']); ?>"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="productdetails.php?id=<?php echo $toprows['pro_id']; ?>"><?php echo substr($toprows['pro_name'],0,13);  ?></a>
                                                            <?php
                                                                $produ_id = $toprows['pro_id'];
                                                                $queryra = "select * from `rating` WHERE `pro_id` = '$produ_id' ORDER BY `rating_id` DESC LIMIT 1";
                                                                $resultra = mysqli_query($conn, $queryra);
                                                                $countra = mysqli_num_rows($resultra);
                                                                $rafetch = mysqli_fetch_assoc($resultra);

                                                                $queryra2 = "select * from `rating` WHERE `pro_id` = '$produ_id'";
                                                                $resultra2 = mysqli_query($conn, $queryra2);
                                                                $countra2 = mysqli_num_rows($resultra2);
                                                                if($countra > 0){
                                                            ?>
                                                                    <div class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                            </div>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                                                        <span class="product-price">
                                                            <ins class="new-price">$<?php echo $toprows['pro_price'] ?></ins>
                                                                    </span>
                                                        </h4>
                                        
                                                        
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <div class="swiper-slide product-widget-wrap">
                                                <?php while ($toprows2 = mysqli_fetch_array($topqueryresult2)) { ?>
                                                    <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="productdetails.php?id=<?php echo $toprows2['pro_id']; ?>">
                                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($toprows2['pro_img1']); ?>"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="productdetails.php?id=<?php echo $toprows2['pro_id']; ?>"><?php echo substr($toprows2['pro_name'],0,13);  ?></a>
                                                            <?php
                                                                $produ_id = $toprows2['pro_id'];
                                                                $queryra = "select * from `rating` WHERE `pro_id` = '$produ_id' ORDER BY `rating_id` DESC LIMIT 1";
                                                                $resultra = mysqli_query($conn, $queryra);
                                                                $countra = mysqli_num_rows($resultra);
                                                                $rafetch = mysqli_fetch_assoc($resultra);

                                                                $queryra2 = "select * from `rating` WHERE `pro_id` = '$produ_id'";
                                                                $resultra2 = mysqli_query($conn, $queryra2);
                                                                $countra2 = mysqli_num_rows($resultra2);
                                                                if($countra > 0){
                                                            ?>
                                                                    <div class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                            </div>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                                                        <span class="product-price">
                                                            <ins class="new-price">$<?php echo $toprows2['pro_price'] ?></ins>
                                                                    </span>
                                                        </h4>
                                        
                                                        
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <!-- <div class="swiper-slide product-widget-wrap">
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-7.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Security Guard</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$320.00</ins>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget bb-no">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-8.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">Apple Super Notecom</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$243.30</ins><del
                                                                class="old-price">$253.50</del>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="product-default.html">
                                                            <img src="assets/images/demos/demo1/products/2-9.jpg"
                                                                alt="Product" width="105" height="118" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="product-default.html">HD Television</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">
                                                            <ins class="new-price">$450.68</ins><del
                                                                class="old-price">$500.00</del>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Deals Wrapper -->
            </div>

            <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">All Categories</h2>
                    <div class="swiper">
                        <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }">
                        
                            <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                            <?php       
                                $acquery = "select * from `main_category`";
                                $acresult = mysqli_query($conn, $acquery);
                                while ($acrow = mysqli_fetch_array($acresult)) {
                                         
                            ?>    
                                <div
                                    class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                                    <a href="maincatproduct.php?id=<?php echo $acrow['maincat_id']; ?>" class="category-media">
                                        <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($acrow['maincat_image']); ?>" alt="Category"
                                            width="130" height="130" style="opacity: 70%">
                                    </a>
                                    <div class="category-content">
                                        <h4 class="category-name"><?php echo $acrow['maincat_name']; ?></h4>
                                        <a href="maincatproduct.php?id=<?php echo $acrow['maincat_id']; ?>"
                                            class="btn btn-primary btn-link btn-underline" >Shop
                                            Now</a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End of .category-section top-category -->

            <div class="container">
                <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Products
                </h2>
                <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item mr-0 mb-2">
                            <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                        </li>
                    </ul>
                </div>
                
                <!-- End of Tab -->
                <div class="tab-content product-wrapper appear-animate">
                    
                    <div class="tab-pane active pt-4" id="tab1-4">
                        <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                        <?php
                        $featprodquery = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id join `pro_badge` pb on p.pro_badge=pb.badge_id join `pro_warrenty` pw on p.pro_warranty=pw.warren_id where p.pro_status = 'Active' AND p.pro_featured = 'Yes'";
                        $featprodresult = mysqli_query($conn, $featprodquery);
                        $count = mysqli_num_rows($featprodresult);
                        if($count >0 ){
                        while($featrow = mysqli_fetch_array($featprodresult)) {
                        ?>
                        
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="productdetails.php?id=<?php echo $featrow['pro_id']; ?>">
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($featrow['pro_img1']); ?>" alt="<?php echo $featrow['pro_name']; ?>"
                                                width="300" height="338" />
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($featrow['pro_img2']); ?>" alt="<?php echo $featrow['pro_name']; ?>"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <button class="btn-product-icon btn-cart w-icon-cart btncart"
                                                title="Add to cart" value="<?php echo $featrow['pro_id']; ?>"></button>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                            <a href="productdetails.php?id=<?php echo $featrow['pro_id']; ?>" class="btn-product-icon btn-quickview w-icon-search btnview"
                                                title="Quickview"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="productdetails.php?id=<?php echo $featrow['pro_id']; ?>"><?php echo $featrow['pro_name']; ?></a>
                                        </h4>
                                        <div class="ratings-container" >
                                        <?php
                                                    $produ_id = $featrow['pro_id'];
                                                    $queryra = "select * from `rating` WHERE `pro_id` = '$produ_id' ORDER BY `rating_id` DESC LIMIT 1";
                                                    $resultra = mysqli_query($conn, $queryra);
                                                    $countra = mysqli_num_rows($resultra);
                                                    $rafetch = mysqli_fetch_assoc($resultra);

                                                    $queryra2 = "select * from `rating` WHERE `pro_id` = '$produ_id'";
                                                    $resultra2 = mysqli_query($conn, $queryra2);
                                                    $countra2 = mysqli_num_rows($resultra2);
                                                    if($countra > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a href="productdetails.php?id=<?php echo $aprorow['pro_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">$<?php echo $featrow['pro_price']; ?></ins>
                                            <del class="old-price">$<?php echo $featrow['pro_crossprice']; ?></del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php }
                                }else{
                                echo "<br/> No Products Available";
                                } ?>
                        
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                </div>
                <!-- End of Tab Content -->

                <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure style="border: solid ; border-width: thin ;border-color: #d9d9d9 ; border-radius: 5px;">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row3['banner3_image']); ?>" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs" >
                            <figure style="border: solid ; border-width: thin ;border-color: #d9d9d9 ; border-radius: 5px;">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row4['banner4_image']); ?>" alt="Category Banner" 
                                    width="610" height="200" style="background-color: #E5E5E5; " />
                            </figure>
                            
                        </div>
                    </div>
                </div>
                <!-- End of Category Cosmetic Lifestyle -->

               
                <div class="product-wrapper-1 appear-animate mb-5">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Wedding Furniture</h2>
                        <a href="weddingpackages.php" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row5['wbanner_image']); ?>); 
                                background-color: #ebeced;">
                                <div class="banner-content content-top">
                                    
                                    <a href="weddingpackages.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                
                                <?php       
                                $weddingfquery = "select * from `wedding_packages` where `wpack_status` = 'Active'";
                                $weddingfqueryresult = mysqli_query($conn, $weddingfquery);
                                while ($wfprow = mysqli_fetch_array($weddingfqueryresult)) {
                                         
                            ?>
                                    
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="wpackdetails.php?id=<?php echo $wfprow[0] ?>">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wfprow['wpack_img1']); ?>"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($wfprow['wpack_img3']); ?>"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <button href="#" class="btn-product-icon btn-cart w-icon-cart btncart"
                                                        title="Add to cart" value="<?php echo $wfprow['wpack_id']; ?>"></button>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="wpackdetails.php?id=<?php echo $wfprow['wpack_id']; ?>" class="btn-product-icon btn-quickview w-icon-search btnview"
                                                        title="Quickview"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="wpackdetails.php?id=<?php echo $wfprow[0] ?>"><?php echo $wfprow['wpack_name']; ?></a>
                                                </h4>
                                                <div class="ratings-container" >
                                        <?php
                                                    $produ_id = $wfprow['wpack_id'];
                                                    $queryra = "select * from `wedding_rating` WHERE `wpack_id` = '$produ_id' ORDER BY `wrating_id` DESC LIMIT 1";
                                                    $resultra = mysqli_query($conn, $queryra);
                                                    $countra = mysqli_num_rows($resultra);
                                                    $rafetch = mysqli_fetch_assoc($resultra);

                                                    $queryra2 = "select * from `wedding_rating` WHERE `wpack_id` = '$produ_id'";
                                                    $resultra2 = mysqli_query($conn, $queryra2);
                                                    $countra2 = mysqli_num_rows($resultra2);
                                                    if($countra > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch['wrating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch['wrating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['wrating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch['wrating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a href="wpackdetails.php?id=<?php echo $wfprow['wpack_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            
                                        </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$<?php echo $wfprow['wpack_price']; ?></ins><del
                                                        class="old-price">$<?php echo $wfprow['wpack_cross_price']; ?></del>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                    <?php } ?>
                                    
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <div class="product-wrapper-1 appear-animate mb-8">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Office Furniture</h2>
                        <a href="allproducts.php" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row6['obanner_image']); ?>); 
                            background-color: #252525;">
                                <div class="banner-content content-top">
                                    
                                    <a href="allproducts.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                <?php       
                                $ofurquery = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id where p.pro_status='Active' AND mc.maincat_name = 'Office Furniture' ";
                                $ofurqueryresult = mysqli_query($conn, $ofurquery);
                                while ($ofurrow = mysqli_fetch_array($ofurqueryresult)) {
                            ?>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="productdetails.php?id=<?php echo $ofurrow[0] ?>">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ofurrow['pro_img1']); ?>"
                                                        alt="Product" width="216" height="243" />
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($ofurrow['pro_img3']); ?>"
                                                        alt="Product" width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <button href="#" class="btn-product-icon btn-cart w-icon-cart btncart"
                                                        title="Add to cart" value="<?php echo $ofurrow['pro_id']; ?>"></button>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="productdetails.php?id=<?php echo $ofurrow['pro_id']; ?>" class="btn-product-icon btn-quickview w-icon-search btnview"
                                                        title="Quickview"></a>
                                                </div>
                                                
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="productdetails.php?id=<?php echo $ofurrow[0] ?>"><?php echo $ofurrow['pro_name']; ?></a></h4>
                                                <div class="ratings-container" >
                                        <?php
                                                    $produ_id = $ofurrow['pro_id'];
                                                    $queryra = "select * from `rating` WHERE `pro_id` = '$produ_id' ORDER BY `rating_id` DESC LIMIT 1";
                                                    $resultra = mysqli_query($conn, $queryra);
                                                    $countra = mysqli_num_rows($resultra);
                                                    $rafetch = mysqli_fetch_assoc($resultra);

                                                    $queryra2 = "select * from `rating` WHERE `pro_id` = '$produ_id'";
                                                    $resultra2 = mysqli_query($conn, $queryra2);
                                                    $countra2 = mysqli_num_rows($resultra2);
                                                    if($countra > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a href="productdetails.php?id=<?php echo $ofurrow['pro_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            
                                        </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$<?php echo $ofurrow['pro_price']; ?></ins><del
                                                        class="old-price">$<?php echo $ofurrow['pro_crossprice']; ?></del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
                    background-color: #383839;">
                    <div class="banner-content align-items-center">
                        <div class="content-left d-flex align-items-center mb-3">
                            <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                                25
                                <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                            </div>
                            <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                        </div>
                        <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                            <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                                <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                                    Fashion</h3>
                                <p class="text-white mb-0">Use code
                                    <span
                                        class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                        <strong>12345</strong></span> to get best offer.</p>
                            </div>
                            <a href="allproducts.php"
                                class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End of Banner Fashion -->

                <div class="product-wrapper-1 appear-animate mb-7">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">Restaurant Furniture</h2>
                        <a href="allproducts.php" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row7['rbanner_image']); ?>); 
                            background-color: #EAEFF3;">
                                <div class="banner-content content-top">
                                    
                                    <a href="alproducts.php"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Banner -->
                        <div class="col-lg-9 col-sm-8">
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                                <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                                <?php       
                                $rfurquery = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id where p.pro_status='Active' AND mc.maincat_name = 'Restaurant Furniture' ";
                                $rfurqueryresult = mysqli_query($conn, $rfurquery);
                                while ($rfurrow = mysqli_fetch_array($rfurqueryresult)) {
                                         
                            ?>
                                    <div class="swiper-slide product-col">
                                        <div class="product-wrap product text-center">
                                            <figure class="product-media">
                                                <a href="productdetails.php?id=<?php echo $rfurrow[0] ?>">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rfurrow['pro_img1']); ?>" alt="Product"
                                                        width="216" height="243" />
                                                </a>
                                                <div class="product-action-vertical">
                                                    <button href="#" class="btn-product-icon btn-cart w-icon-cart btncart"
                                                        title="Add to cart" value="<?php echo $rfurrow['pro_id']; ?>"></button>
                                                    <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                        title="Add to wishlist"></a>
                                                    <a href="productdetails.php?id=<?php echo $rfurrow[0] ?>" class="btn-product-icon btn-quickview w-icon-search btnview"
                                                        title="Quickview"></a>
                                                </div>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name"><a href="productdetails.php?id=<?php echo $rfurrow[0] ?>"><?php echo $rfurrow['pro_name']; ?></a>
                                                </h4>
                                                <div class="ratings-container" >
                                        <?php
                                                    $produ_id = $rfurrow['pro_id'];
                                                    $queryra = "select * from `rating` WHERE `pro_id` = '$produ_id' ORDER BY `rating_id` DESC LIMIT 1";
                                                    $resultra = mysqli_query($conn, $queryra);
                                                    $countra = mysqli_num_rows($resultra);
                                                    $rafetch = mysqli_fetch_assoc($resultra);

                                                    $queryra2 = "select * from `rating` WHERE `pro_id` = '$produ_id'";
                                                    $resultra2 = mysqli_query($conn, $queryra2);
                                                    $countra2 = mysqli_num_rows($resultra2);
                                                    if($countra > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a href="productdetails.php?id=<?php echo $rfurrow['pro_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            
                                        </div>
                                                <div class="product-price">
                                                    <ins class="new-price">$<?php echo $rfurrow['pro_price']; ?></ins><del
                                                        class="old-price">$<?php echo $rfurrow['pro_crossprice']; ?></del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                <style>

                                        /* Rating Get Styling */

                                        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);


                                        /* Ratings widget */
                                        .rate {
                                            display: inline-block;
                                            border: 0;
                                        }

                                        /* Hide radio */
                                        .rate>.getinput {
                                            display: none;
                                        }

                                        /* Order correctly by floating highest to the right */
                                        .rate>.s1 {
                                            float: right;
                                        }

                                        /* The star of the show */
                                        .rate>.s1:before {
                                            display: inline-block;
                                            font-size: 1.5rem;
                                            padding: .3rem .2rem;
                                            margin: 0;
                                            cursor: pointer;
                                            font-family: FontAwesome;
                                            content: "\f005 ";
                                            /* full star */
                                        }

                                        /* Zero stars rating */
                                        .rate>.s1:last-child:before {
                                            content: "\f006 ";
                                            /* empty star outline */
                                        }

                                        /* Half star trick */
                                        .rate .half:before {
                                            content: "\f089 ";
                                            /* half star no outline */
                                            position: absolute;
                                            padding-right: 0;
                                        }

                                        /* Click + hover color */
                                        .getinput:checked~.s1,
                                        /* color current and previous stars on checked */
                                        .s1:hover,
                                        .s1:hover~.s1 {
                                            color: #ff8800;
                                        }

                                        /* color previous stars on hover */

                                        /* Hover highlights */
                                        .getinput:checked+.s1:hover,
                                        .getinput:checked~.s1:hover,
                                        /* highlight current and previous stars */
                                        .getinput:checked~.s1:hover~.s1,
                                        /* highlight previous selected stars for new rating */
                                        .s1:hover~.getinput:checked~.s1

                                        /* highlight previous selected stars */
                                            {
                                            color: #ff8800;
                                        }


                                        /* Rating Print Styling */


                                        /* Ratings widget */
                                        .rate2 {
                                            display: inline-block;
                                            border: 0;
                                        }

                                        /* Hide radio */
                                        .rate2>.getinput2 {
                                            display: none;
                                        }

                                        /* Order correctly by floating highest to the right */
                                        .rate2>.s12 {
                                            float: right;
                                        }

                                        /* The star of the show */
                                        .rate2>.s12:before {
                                            display: inline-block;
                                            font-size: 1.5rem;
                                            padding: .3rem .2rem;
                                            margin: 0;
                                            cursor: pointer;
                                            font-family: FontAwesome;
                                            content: "\f005 ";
                                            /* full star */
                                        }

                                        /* Zero stars rating */
                                        .rate2>.s12:last-child:before {
                                            content: "\f006 ";
                                            /* empty star outline */
                                        }

                                        /* Half star trick */
                                        .rate2 .half2:before {
                                            content: "\f089 ";
                                            /* half star no outline */
                                            position: absolute;
                                            padding-right: 0;
                                        }

                                        /* Click + hover color */
                                        .getinput2:checked~.s12,
                                                                                
                                        /* highlight previous selected stars for new rating */
                                        .s12:hover~.getinput2:checked~.s12

                                        /* highlight previous selected stars */
                                            {
                                            color: #ff8800;
                                        }


                                        </style>

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Our Brands</h2>
                <div class="swiper-container swiper-theme brands-wrapper mb-9 appear-animate" data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 4
                        },
                        '992': {
                            'slidesPerView': 5
                        },
                        '1200': {
                            'slidesPerView': 6
                        }
                    }
                }">
                    <div class="swiper-wrapper row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                    
                        <?php 
                        $brandquery = "select * from `our_brands`";
                        $brandresult = mysqli_query($conn, $brandquery);
                        while($brandrow = mysqli_fetch_array($brandresult)){
                        ?>
                        <div class="swiper-slide brand-col">
                            <figure class="brand-wrapper">
                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($brandrow['brand_image']); ?>" alt="Brand" width="410"
                                    height="186" />
                            </figure>
                            </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <!-- End of Brands Wrapper -->

            </div>
            <!--End of Catainer -->
        </main>
        <!-- End of Main -->

        <script>
            $(document).ready(function(){
        $(document).on('click', '.btncart', function() {
        var id = $(this).val();
        $.ajax({
          url: 'ajaxconfig.php',
          type: 'POST',
          data: {
            cart: 1,
            p_id: id,
          },
          success: function(response) {
            if (response) {
              if (response == "noadd") {
                window.location = "signin.php";
              } else {
                location.reload();
              }

            } else {
              alert("Failed Please Try Again");
            }
          },
          error: function(err) {
            alert("Api Call Failed");
          },
        });
      });



      $(document).on('click','.btnview',function(){
        var row=$(this).val();
        $('#proid').val(row);
        
    });
    
    });
    </script>
        
<?php include 'footer.php'; ?>