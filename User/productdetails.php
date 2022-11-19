<?php 
if (isset($_GET['id'])) {
    include 'config.php';
    $id = $_GET['id'];
    $pdetquery = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id join `pro_badge` pb on p.pro_badge=pb.badge_id join `pro_warrenty` pw on p.pro_warranty=pw.warren_id where p.pro_id='$id'";
    $pdetresult = mysqli_query($conn, $pdetquery);
    $pdetrow = mysqli_fetch_array($pdetresult);

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/product-featured.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:34:35 GMT -->

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
        google: {
            families: ['Poppins:400,500,600,700']
        }
    };
    (function(d) {
        var wf = d.createElement('script'),
            s = d.scripts[0];
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
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

    <?php include 'header.php'; ?>

    <!-- Start of Main -->
    <main class="main mb-10 pb-1">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav container">
            <ul class="breadcrumb bb-no">
                <li><a href="index.php">Home</a></li>
                <li>Products</li>
            </ul>
            <ul class="product-nav list-style-none">
                <li class="product-nav-prev">
                    <a href="#">
                        <i class="w-icon-angle-left"></i>
                    </a>
                    <span class="product-nav-popup">
                        <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110" height="110" />
                        <span class="product-name">Soft Sound Maker</span>
                    </span>
                </li>
                <li class="product-nav-next">
                    <a href="#">
                        <i class="w-icon-angle-right"></i>
                    </a>
                    <span class="product-nav-popup">
                        <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110" height="110" />
                        <span class="product-name">Fabulous Sound Speaker</span>
                    </span>
                </li>
            </ul>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row gutter-lg">
                    <div class="main-content">
                        <div class="product product-single row mb-2">
                            <div class="col-md-6 mb-6">
                                <div class="product-gallery product-gallery-sticky">
                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                        data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="swiper-wrapper row cols-1 gutter-no">
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img1']); ?>"
                                                        data-zoom-image="assets/images/products/featured/1-800x900.jpg"
                                                        alt="Alarm Clock With Lamp" width="800" height="900">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img1']); ?>"
                                                        data-zoom-image="assets/images/products/featured/2-800x900.jpg"
                                                        alt="Alarm Clock With Lamp" width="488" height="549">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img2']); ?>"
                                                        data-zoom-image="assets/images/products/featured/3-800x900.jpg"
                                                        alt="Alarm Clock With Lamp" width="800" height="900">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img3']); ?>"
                                                        data-zoom-image="assets/images/products/featured/4-800x900.jpg"
                                                        alt="Alarm Clock With Lamp" width="800" height="900">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img1']); ?>"
                                                        data-zoom-image="assets/images/products/featured/5-800x900.jpg"
                                                        alt="Alarm Clock With Lamp" width="800" height="900">
                                                </figure>
                                            </div>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img2']); ?>"
                                                        data-zoom-image="assets/images/products/featured/6-800x900.jpg"
                                                        alt="Alarm Clock With Lamp" width="800" height="900">
                                                </figure>
                                            </div>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                        <a href="#" class="product-gallery-btn product-image-full"><i
                                                class="w-icon-zoom"></i></a>
                                        <div class="product-label-group">
                                            <label
                                                class="product-label label-hot"><?php echo $pdetrow['badge_name']; ?></label>
                                        </div>
                                    </div>
                                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">

                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                            <div class="product-thumb swiper-slide">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img1']); ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                            <div class="product-thumb swiper-slide">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img1']); ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                            <div class="product-thumb swiper-slide">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img2']); ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                            <div class="product-thumb swiper-slide">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img3']); ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                            <div class="product-thumb swiper-slide">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img1']); ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                            <div class="product-thumb swiper-slide">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($pdetrow['pro_img2']); ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-6">
                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                    <h1 class="product-title"><?php echo $pdetrow['pro_name']; ?></h1>
                                    <div class="product-bm-wrapper">

                                        <div class="product-meta">
                                            <div class="product-categories">
                                                Category:
                                                <span class="product-category"><span><?php echo $pdetrow['maincat_name']; ?>
                                                        / <?php echo $pdetrow['cat_name']; ?> /
                                                        <?php echo $pdetrow['subcat_name']; ?></span></span>
                                            </div>
                                            <div class="product-categories">
                                                Warrenty:
                                                <span
                                                    class="product-category"><span><?php echo $pdetrow['warren_duration']; ?></span></span>
                                            </div>
                                            <div class="product-sku">
                                                SKU: <span><?php echo $pdetrow['pro_code']; ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="product-price">
                                        <ins class="new-price">$<?php echo $pdetrow['pro_price']; ?></ins><del
                                            class="old-price">$<?php echo $pdetrow['pro_crossprice']; ?></del>
                                    </div>

                                    <div class="product-countdown-container">
                                            <label class="mr-2">Stock Count:</label>
                                            <div>
                                                <?php echo $pdetrow['pro_quantity']; ?></div>
                                        </div>

                                    <div class="ratings-container" >
                                                    <?php
                                                    $queryra3 = "select * from `rating` WHERE `pro_id` = '$id' ORDER BY `rating_id` DESC LIMIT 1";
                                                    $resultra3 = mysqli_query($conn, $queryra3);
                                                    $countra3 = mysqli_num_rows($resultra3);
                                                    $rafetch3 = mysqli_fetch_assoc($resultra3);

                                                    $queryra4 = "select * from `rating` WHERE `pro_id` = '$id'";
                                                    $resultra4 = mysqli_query($conn, $queryra4);
                                                    $countra4 = mysqli_num_rows($resultra4);
                                                    if($countra4 > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch3['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch3['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch3['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch3['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a class="rating-reviews">(<?php echo $countra4 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <!-- <a class="rating-reviews">No Any Ratings.</a> -->

                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                             disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                             disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                             disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                          disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2" disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a class="rating-reviews">(<?php echo $countra4 ?> reviews)</a>

                                                                        <?php } ?>
                                            
                                        </div>
                                    
                                    <div class="product-short-desc">
                                        <ul class="list-type-check list-style-none">

                                            <?php 
                                                $data = $pdetrow['pro_description'];
                                                $descript = substr($data,0,300); ?>
                                            <li><?php echo $descript ?></li>
                                        </ul>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container">
                                            <div class="product-qty-form">
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1"
                                                        max="10000000">
                                                    <button class="quantity-plus w-icon-plus"></button>
                                                    <button class="quantity-minus w-icon-minus"></button>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-cart btncart"
                                                value="<?php echo $pdetrow['pro_id']; ?>">
                                                <i class="w-icon-cart"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="social-links-wrapper">
                                        <div class="social-links">
                                            <div class="social-icons social-no-color border-thin">
                                                <a href="https://www.facebook.com/" target="_blank" class="social-icon social-facebook w-icon-facebook"></a>
                                                <a href="https://www.twitter.com/" target="_blank" class="social-icon social-twitter w-icon-twitter"></a>
                                                <a href="https://www.pinterest.com/" target="_blank" class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                <a href="https://web.whatsapp.com/" target="_blank" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                <a href="https://www.linkedin.com/" target="_blank" class="social-icon social-youtube fab fa-linkedin-in"></a>
                                            </div>
                                        </div>
                                        <span class="divider d-xs-show"></span>
                                        <div class="product-link-wrapper d-flex">
                                            <a href="myaccount.php"
                                                class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#product-tab-description" class="nav-link active">Description</a>
                                </li>
                                <!-- <li class="nav-item">
                                        <a href="#product-tab-vendor" class="nav-link">Vendor Info</a>
                                    </li> -->
                                    <?php
                                        $prod_idddd = $_GET['id'];
                                        $queryfc = "select * from `rating` WHERE pro_id='$prod_idddd'";
                                        $resultfc = mysqli_query($conn, $queryfc);
                                        $countfc = mysqli_num_rows($resultfc);
                                    ?>
                                <li class="nav-item">
                                    <a href="#product-tab-reviews" class="nav-link">Customer Reviews (<?php echo $countfc; ?>)</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="product-tab-description">
                                    <div class="row mb-4">
                                        <div class="col-lg-12 mb-5" style="text-align: justify ;">
                                            <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>

                                            <ul class="list-type-check">
                                                <li><?php echo $pdetrow['pro_description']; ?>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                    <div class="row cols-md-3">
                                        <div class="mb-3">
                                            <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free
                                                Shipping &amp; Return</h5>
                                            <p class="detail pl-5">We offer free shipping for products on orders
                                                above 50$ and offer free delivery for all orders in US.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy
                                                Returns</h5>
                                            <p class="detail pl-5">We guarantee our products and you could get back
                                                all of your money anytime you want in 30 days.</p>
                                        </div>
                                        <div class="mb-3">
                                            <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing
                                            </h5>
                                            <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or
                                                over 250$ for a year with our special credit card.</p>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                    $queryra5 = "select * from `rating` WHERE `pro_id` = '$id'";
                                    $resultra5 = mysqli_query($conn, $queryra5);
                                    $countra5 = mysqli_num_rows($resultra5);
                                    
                                    if($countra5 > 0){

                                    
                                    $ratingtotal = 0;
                                    while($rat5row = mysqli_fetch_assoc($resultra5)){
                                        
                                        $ratingtotal += $rat5row['rating'];

                                    }
                                    $rataverage = $ratingtotal / $countra5;
                                    $average_number = number_format($rataverage, 2);
                                }else{
                                    $average_number = "0.00";
                                }
                                ?>

                                <div class="tab-pane" id="product-tab-reviews">
                                    <div class="row mb-4">
                                        <div class="col-xl-4 col-lg-5 mb-4">
                                            <div class="ratings-wrapper">
                                                <div class="avg-rating-container">
                                                    <h4 class="avg-mark font-weight-bolder ls-50"><?php echo $average_number; ?></h4>
                                                    <div class="avg-rating">
                                                        <p class="text-dark mb-1">Average Rating</p>
                                                        <!-- <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                        </div> -->

                                                    </div>
                                                </div>
                                                <!-- <div class="ratings-value d-flex align-items-center text-dark ls-25">
                                                    <span
                                                        class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                        class="count">(2 of 3)</span>
                                                </div> -->
                                                <!-- <div class="ratings-list">
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 100%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>70%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 80%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>30%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 60%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>40%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 40%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>0%</mark>
                                                        </div>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width: 20%;"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <div class="progress-bar progress-bar-sm ">
                                                            <span></span>
                                                        </div>
                                                        <div class="progress-value">
                                                            <mark>0%</mark>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        
                                        <div class="col-xl-8 col-lg-7 mb-4">
                                            <div class="review-form-wrapper">
                                                <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                    Review</h3>
                                                <?php
                                                if(isset($_SESSION['user_id'])){
                                                ?>
                                                <p class="mb-3">Your email address will not be published. Required
                                                    fields are marked *</p>
                                                <div class="review-form">
                                                    <div class="rating-form">
                                                        <label for="ratings">Your Rating Of This Product :</label>
                                                        <fieldset class="rate">
                                                            <input type="radio" id="rating10" name="rating" class="getinput"
                                                                value="5" />
                                                            <label class="s1" for="rating10"
                                                                title="5 stars"></label>

                                                            <input type="radio" id="rating9" name="rating" class="getinput"
                                                                value="4.5" />
                                                            <label class="half s1" for="rating9"
                                                                title="4 1/2 stars"></label>

                                                            <input type="radio" id="rating8" name="rating" class="getinput"
                                                                value="4" />
                                                            <label class="s1" for="rating8"
                                                                title="4 stars"></label>

                                                            <input type="radio" id="rating7" name="rating" class="getinput"
                                                                value="3.5" />
                                                            <label class="half s1" for="rating7"
                                                                title="3 1/2 stars"></label>

                                                            <input type="radio" id="rating6" name="rating" class="getinput"
                                                                value="3" />
                                                            <label class="s1" for="rating6"
                                                                title="3 stars"></label>

                                                            <input type="radio" id="rating5" name="rating" class="getinput"
                                                                value="2.5" />
                                                            <label class="half s1" for="rating5"
                                                                title="2 1/2 stars"></label>

                                                            <input type="radio" id="rating4" name="rating" class="getinput"
                                                                value="2" />
                                                            <label class="s1" for="rating4"
                                                                title="2 stars"></label>

                                                            <input type="radio" id="rating3" name="rating" class="getinput"
                                                                value="1.5" />
                                                            <label class="half s1" for="rating3"
                                                                title="1 1/2 stars"></label>

                                                            <input type="radio" id="rating2" name="rating" class="getinput"
                                                                value="1" />
                                                            <label class="s1" for="rating2" title="1 star"></label>

                                                            <input type="radio" id="rating1" name="rating" class="getinput"
                                                                value="0.5" />
                                                            <label class="half s1" for="rating1"
                                                                title="1/2 star"></label>

                                                            <input type="radio" id="rating0" name="rating" class="getinput"
                                                                value="0" />
                                                            <label class="s1" for="rating0"
                                                                title="No star"></label>

                                                        </fieldset>
                                                    </div>
                                                    <!-- <div class="rating-form">
                                                            <label for="rating">Your Rating Of This Product :</label>
                                                            <span class="rating-stars">
                                                                <input type="radio" class="star-1" />
                                                                <a class="star-2" href="#">2</a>
                                                                <a class="star-3" href="#">3</a>
                                                                <a class="star-4" href="#">4</a>
                                                                <a class="star-5" href="#">5</a>
                                                            </span>
                                                            <select name="rating" id="rating" required=""
                                                                style="display: none;">
                                                                <option value="">Rate…</option>
                                                                <option value="5">Perfect</option>
                                                                <option value="4">Good</option>
                                                                <option value="3">Average</option>
                                                                <option value="2">Not that bad</option>
                                                                <option value="1">Very poor</option>
                                                            </select>
                                                        </div> -->
                                                    <textarea cols="30" rows="6" placeholder="Write Your Review Here..."
                                                        class="form-control" id="reviewwrite" required></textarea>
                                                    <div class="row gutter-md">
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="Your Name" id="author" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control"
                                                                placeholder="Your Email" id="email_1" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="checkbox" class="custom-checkbox"
                                                            id="save-checkbox">
                                                        <label for="save-checkbox">Save my name, email, and website
                                                            in this browser for the next time I comment.</label>
                                                    </div>
                                                    <button type="submit" id="btnsubmitreview"
                                                        class="btn btn-dark">Submit
                                                        Review</button>
                                                    <span style="color: red ;" id="errortext"></span>
                                                </div>
                                                <?php }else{ ?>
                                                <p class="mb-3"><a href="signin.php">Login</a> or <a
                                                        href="signin.php">Register </a> to Publish the Customer Reviews.
                                                </p>
                                                <?php
                                                } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a href="#show-all" class="nav-link active">Show All</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#highest-rating" class="nav-link">Possitive Rating</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#lowest-rating" class="nav-link">Negative Rating</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="show-all">
                                                <ul class="comments list-style-none">

                                                    <?php
                                                    $prod_iddd = $_GET['id'];
                                                    $queryf = "select * from `rating` r join `product` p on r.pro_id=p.pro_id join `user` u on r.user_id=u.user_id WHERE r.pro_id='$prod_iddd'";
                                                    $resultf = mysqli_query($conn, $queryf);
                                                    $countf = mysqli_num_rows($resultf);
                                                    $nofeedback = NULL;
                                                    if ($countf > 0) {
                                                        while ($rowf = mysqli_fetch_array($resultf)) {
                                                    ?>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="assets/images/profile.png"
                                                                    alt="Commenter Avatar" width="80" height="80">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#"><?php echo $rowf['your_name'] ?></a>
                                                                    <span
                                                                        class="comment-date"><?php echo $rowf['rating_date'] ?>
                                                                        at
                                                                        <?php echo $rowf['rating_time'] ?></span>
                                                                </h4>

                                                                <div class="ratings-container comment-rating">
                                                                    <fieldset class="rate2">
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rowf['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rowf['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rowf['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>
                                                                </div>
                                                                <!-- <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        
                                                                        <span class="ratings"
                                                                            style="width: 3%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div> -->
                                                                <p><?php echo $rowf['review'] ?></p>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php 
                                                    }
                                                    }else {
                                                        $nofeedback = "No Any Reviews!"; ?>
                                                        <br/>
                                                                <h4 class="comment-author" style="color: #336699;">
                                                                    <?php echo $nofeedback; ?>
                                                                </h4>
                                                        <?php
                                                        
                                                    } ?>
                                                </ul>
                                            </div>
                                            
                                            <div class="tab-pane" id="highest-rating">
                                                <ul class="comments list-style-none">
                                                <?php
                                                    $prod_iddd = $_GET['id'];
                                                    $queryf = "select * from `rating` r join `product` p on r.pro_id=p.pro_id join `user` u on r.user_id=u.user_id WHERE r.pro_id='$prod_iddd' AND r.rating >= '4'";
                                                    $resultf = mysqli_query($conn, $queryf);
                                                    $countf = mysqli_num_rows($resultf);
                                                    $nofeedback = NULL;
                                                    if ($countf > 0) {
                                                        while ($rowf = mysqli_fetch_array($resultf)) {
                                                    ?>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="assets/images/profile.png"
                                                                    alt="Commenter Avatar" width="80" height="80">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#"><?php echo $rowf['your_name'] ?></a>
                                                                    <span
                                                                        class="comment-date"><?php echo $rowf['rating_date'] ?>
                                                                        at
                                                                        <?php echo $rowf['rating_time'] ?></span>
                                                                </h4>

                                                                <div class="ratings-container comment-rating">
                                                                    <fieldset class="rate2">
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rowf['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rowf['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rowf['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>
                                                                </div>
                                                                <!-- <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        
                                                                        <span class="ratings"
                                                                            style="width: 3%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div> -->
                                                                <p><?php echo $rowf['review'] ?></p>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php 
                                                    }
                                                    }else {
                                                        $nofeedback = "No Any Reviews!"; ?>
                                                        <br/>
                                                                <h4 class="comment-author" style="color: #336699;">
                                                                    <?php echo $nofeedback; ?>
                                                                </h4>
                                                        <?php
                                                        
                                                    } ?>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="lowest-rating">
                                                <ul class="comments list-style-none">
                                                <?php
                                                    $prod_iddd = $_GET['id'];
                                                    $queryf = "select * from `rating` r join `product` p on r.pro_id=p.pro_id join `user` u on r.user_id=u.user_id WHERE r.pro_id='$prod_iddd' AND r.rating <= '3'";
                                                    $resultf = mysqli_query($conn, $queryf);
                                                    $countf = mysqli_num_rows($resultf);
                                                    $nofeedback = NULL;
                                                    if ($countf > 0) {
                                                        while ($rowf = mysqli_fetch_array($resultf)) {
                                                    ?>
                                                    <li class="comment">
                                                        <div class="comment-body">
                                                            <figure class="comment-avatar">
                                                                <img src="assets/images/profile.png"
                                                                    alt="Commenter Avatar" width="80" height="80">
                                                            </figure>
                                                            <div class="comment-content">
                                                                <h4 class="comment-author">
                                                                    <a href="#"><?php echo $rowf['your_name'] ?></a>
                                                                    <span
                                                                        class="comment-date"><?php echo $rowf['rating_date'] ?>
                                                                        at
                                                                        <?php echo $rowf['rating_time'] ?></span>
                                                                </h4>

                                                                <div class="ratings-container comment-rating">
                                                                    <fieldset class="rate2">
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rowf['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rowf['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rowf['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rowf['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>
                                                                </div>
                                                                <!-- <div class="ratings-container comment-rating">
                                                                    <div class="ratings-full">
                                                                        
                                                                        <span class="ratings"
                                                                            style="width: 3%;"></span>
                                                                        <span class="tooltiptext tooltip-top"></span>
                                                                    </div>
                                                                </div> -->
                                                                <p><?php echo $rowf['review'] ?></p>

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php 
                                                    }
                                                    }else {
                                                        $nofeedback = "No Any Reviews!"; ?>
                                                        <br/>
                                                                <h4 class="comment-author" style="color: #336699;">
                                                                    <?php echo $nofeedback; ?>
                                                                </h4>
                                                        <?php
                                                        
                                                    } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="related-product-section">
                            <div class="title-link-wrapper mb-4">
                                <h4 class="title">Related Products</h4>
                                <a href="allproducts.php"
                                    class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                    Products<i class="w-icon-long-arrow-right"></i></a>
                            </div>
                            <div class="swiper-container swiper-theme" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 2,
                                    'breakpoints': {
                                        '576': {
                                            'slidesPerView': 3
                                        },
                                        '768': {
                                            'slidesPerView': 4
                                        },
                                        '992': {
                                            'slidesPerView': 3
                                        }
                                    }
                                }">
                                <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                                    <?php
                            $rpquery = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id join `pro_badge` pb on p.pro_badge=pb.badge_id join `pro_warrenty` pw on p.pro_warranty=pw.warren_id where p.pro_subcat=".$pdetrow['subcat_id'];
                            $rpresult = mysqli_query($conn, $rpquery);

                            while ($rprow = mysqli_fetch_array($rpresult)) {
                        ?>


                                    <div class="swiper-slide product">
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($rprow['pro_img1']); ?>"
                                                    alt="Product" width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <button class="btn-product-icon btn-cart w-icon-cart btncart"
                                                    title="Add to cart" value="<?php echo $rprow['pro_id']; ?>"></button>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>

                                            </div>
                                            <div class="product-action">
                                                <a href="productdetails.php?id=<?php echo $rprow['pro_id']; ?>"
                                                    class="btn-product " title="Quick View">Quick
                                                    View</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a
                                                    href="product-default.html"><?php echo $rprow['pro_name']; ?></a>
                                            </h4>
                                            <div class="ratings-container" >
                                                    <?php
                                                    $produ_id = $rprow['pro_id'];
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

                                                                    <a href="productdetails.php?id=<?php echo $rprow['pro_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            
                                        </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">$<?php echo $rprow['pro_price']; ?></div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }
                            ?>
                                </div>

                            </div>
                        </section>
                    </div>
                    <!-- End of Main Content -->
                    <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                        <div class="sidebar-overlay"></div>
                        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                        <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                        <div class="sidebar-content scrollable">
                            <div class="sticky-sidebar">
                                <div class="widget widget-icon-box mb-6">
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="w-icon-truck"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                            <p>For all orders over $99</p>
                                        </div>
                                    </div>
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="w-icon-bag"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">Secure Payment</h4>
                                            <p>We ensure secure payment</p>
                                        </div>
                                    </div>
                                    <div class="icon-box icon-box-side">
                                        <span class="icon-box-icon text-dark">
                                            <i class="w-icon-money"></i>
                                        </span>
                                        <div class="icon-box-content">
                                            <h4 class="icon-box-title">Money Back Guarantee</h4>
                                            <p>Any back within 30 days</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Widget Icon Box -->

                                <div class="widget widget-banner mb-9">
                                    <div class="banner banner-fixed br-sm">
                                        <figure>
                                            <img src="assets/images/shop/banner3.jpg" alt="Banner" width="266"
                                                height="220" style="background-color: #1D2D44;" />
                                        </figure>
                                        <div class="banner-content">
                                            <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                                40<sup class="font-weight-bold">%</sup><sub
                                                    class="font-weight-bold text-uppercase ls-25">Off</sub>
                                            </div>
                                            <h4
                                                class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                                Ultimate Sale</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Widget Banner -->

                                <div class="widget widget-products">
                                    <div class="title-link-wrapper mb-2">
                                        <h4 class="title title-link font-weight-bold">More Products</h4>
                                    </div>

                                    <div class="swiper nav-top">
                                        <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                                'slidesPerView': 1,
                                                'spaceBetween': 20,
                                                'navigation': {
                                                    'prevEl': '.swiper-button-prev',
                                                    'nextEl': '.swiper-button-next'
                                                }
                                            }">
                                            <div class="swiper-wrapper">
                                                <div class="widget-col swiper-slide">
                                                    <?php 
                                                        $morepquery = "SELECT * FROM `wedding_packages` WHERE `wpack_status` = 'Active' ORDER BY wpack_id DESC LIMIT 3";
                                                        $morepresult = mysqli_query($conn, $morepquery);
                            
                                                        while ($moreprows = mysqli_fetch_array($morepresult)) {
                                                    ?>

                                                    <div class="product product-widget">
                                                        <figure class="product-media">
                                                            <a
                                                                href="wpackdetails.php?id=<?php echo $moreprows['wpack_id']; ?>">
                                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($moreprows['wpack_img1']); ?>"
                                                                    alt="Product" width="100" height="113" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h4 class="product-name">
                                                                <a
                                                                    href="wpackdetails.php?id=<?php echo $moreprows['wpack_id']; ?>"><?php echo $moreprows['wpack_name'] ?></a>
                                                                    
                                                            </h4>
                                                            
                                                            <!-- <div class="ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width: 100%;"></span>
                                                                    <span class="tooltiptext tooltip-top"></span>
                                                                </div>
                                                            </div> -->

                                                            <div class="ratings-container" >
                                                    
                                                            <?php
                                                    $queryra6 = "select * from `rating` WHERE `pro_id` = '$id' ORDER BY `rating_id` DESC LIMIT 1";
                                                    $resultra6 = mysqli_query($conn, $queryra6);
                                                    $countra6 = mysqli_num_rows($resultra6);
                                                    $rafetch6 = mysqli_fetch_assoc($resultra6);

                                                    if($countra4 > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch6['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch6['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch6['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch6['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a class="rating-reviews">(<?php echo $countra6 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <!-- <a class="rating-reviews">No Any Ratings.</a> -->

                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                             disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                             disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                             disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                          disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2" disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                        <?php } ?>
                                        </div>

                                                            <div class="product-price">
                                                                $<?php echo $moreprows['wpack_price'] ?></div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>

                                                </div>
                                                <div class="widget-col swiper-slide">
                                                    <?php 
                                                        $morepquery2 = "SELECT * FROM `product` WHERE `pro_status` = 'Active' ORDER BY pro_id DESC LIMIT 3";
                                                        $morepresult2 = mysqli_query($conn, $morepquery2);
                            
                                                        while ($moreprows2 = mysqli_fetch_array($morepresult2)) {
                                                    ?>
                                                    <div class="product product-widget">
                                                        <figure class="product-media">
                                                            <a
                                                                href="productdetails.php?id=<?php echo $moreprows2['pro_id']; ?>">
                                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($moreprows2['pro_img1']); ?>"
                                                                    alt="<?php echo $moreprows2['pro_name'] ?>"
                                                                    width="100" height="113" />
                                                            </a>
                                                        </figure>
                                                        <div class="product-details">
                                                            <h4 class="product-name">
                                                                <a
                                                                    href="productdetails.php?id=<?php echo $moreprows2['pro_id']; ?>"><?php echo $moreprows2['pro_name'] ?></a>
                                                            </h4>
                                                            <div class="ratings-container" >
                                                    
                                                            <?php
                                                    $queryra7 = "select * from `rating` WHERE `pro_id` = '$id' ORDER BY `rating_id` DESC LIMIT 1";
                                                    $resultra7 = mysqli_query($conn, $queryra7);
                                                    $countra7 = mysqli_num_rows($resultra7);
                                                    $rafetch7 = mysqli_fetch_assoc($resultra7);

                                                    if($countra7 > 0){
                                                    ?>
                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                            <?php if($rafetch7['rating'] == "5"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                            <?php if($rafetch7['rating'] == "4.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "4"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "3.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "3"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "2.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "2"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "1.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "1"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                            <?php if($rafetch7['rating'] == "0.5"){ ?>
                                                                            checked <?php } ?> disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            <?php if($rafetch7['rating'] == "0"){ ?> checked
                                                                            <?php } ?> disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                    <a class="rating-reviews">(<?php echo $countra7 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <!-- <a class="rating-reviews">No Any Ratings.</a> -->

                                                                    <fieldset class="rate2" >
                                                                        <input type="radio" class="getinput2" 
                                                                             disabled />
                                                                        <label class="s12" for="rating101"
                                                                            title="5 stars"></label>

                                                                        <input type="radio" class="getinput2" 
                                                                            
                                                                             disabled />
                                                                        <label class="half2 s12" for="rating91"
                                                                            title="4 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                            
                                                                             disabled />
                                                                        <label class="s12" for="rating81"
                                                                            title="4 stars"></label>

                                                                        <input type="radio" class="getinput2"
                                                                          disabled />
                                                                        <label class="half2 s12" for="rating71"
                                                                            title="3 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating61"
                                                                            title="3 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating51"
                                                                            title="2 1/2 stars"></label>

                                                                        <input type="radio"  class="getinput2" disabled />
                                                                        <label class="s12" for="rating41"
                                                                            title="2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating31"
                                                                            title="1 1/2 stars"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating21"
                                                                            title="1 star"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="half2 s12" for="rating11"
                                                                            title="1/2 star"></label>

                                                                        <input type="radio" class="getinput2" disabled />
                                                                        <label class="s12" for="rating10"
                                                                            title="No star"></label>

                                                                    </fieldset>

                                                                        <?php } ?>
                                        </div>
                                                            <div class="product-price">
                                                                $<?php echo $moreprows2['pro_price'] ?></div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <button class="swiper-button-next"></button>
                                            <button class="swiper-button-prev"></button>
                                        </div>
                                        <input type="hidden" id="product_idd" value="<?php echo $_GET['id']; ?>" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- End of Sidebar -->
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->
    <script>
    $(document).ready(function() {
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


        $('#btnsubmitreview').click(function() {

            var ratingradio = $("input[name='rating']:checked").val();

            var rating = "";
            if (ratingradio == "5") {
                rating = "5";
            }
            if (ratingradio == "4.5") {
                rating = "4.5";
            }
            if (ratingradio == "4") {
                rating = "4";
            }
            if (ratingradio == "3.5") {
                rating = "3.5";
            }
            if (ratingradio == "3") {
                rating = "3";
            }
            if (ratingradio == "2.5") {
                rating = "2.5";
            }
            if (ratingradio == "2") {
                rating = "2";
            }
            if (ratingradio == "1.5") {
                rating = "1.5";
            }
            if (ratingradio == "1") {
                rating = "1";
            }
            if (ratingradio == "0.5") {
                rating = "0.5";
            }
            if (ratingradio == "0") {
                rating = "0";
            }


            var review = $('#reviewwrite').val();
            var email = $('#email_1').val();
            var name = $('#author').val();
            var pid = $('#product_idd').val();

            if (rating != "") {
                $.ajax({
                    url: 'ajaxconfig.php',
                    type: 'POST',
                    data: {
                        feedback: 1,
                        f_comment: review,
                        f_email: email,
                        f_name: name,
                        f_pid: pid,
                        f_rating: rating,
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

            } else {
                $('#errortext').text(" (Rating Required! Please Select the Rating Stars.) ");
            }
        });


    });
    </script>

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
    <?php include 'footer.php';
        
    } else {
        header('location:allproducts.php');
    }
    ?>