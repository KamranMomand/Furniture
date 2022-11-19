<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/shop-off-canvas.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:34:06 GMT -->
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
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/nouislider/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'header.php' ?>

<main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="allproducts.php">Shop</a></li>
                        <li>Deals Hot Of The Day</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10">
            <div class="page-header" style="height: 250px; ">
            
                <div class="container" >
                <h2 class="page-title mb-0" > <i class="w-icon-sale fa-1x"></i> &nbsp; Deals Hot Of The Day</h2>
                </div>
            </div><br/><br/>
                <!-- End of Shop Banner -->
                <div class="container-fluid">
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <!-- <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left"><i class="w-icon-category"></i><span>Filters</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Sort By :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="default" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price-low">Sort by pric: low to high</option>
                                            <option value="price-high">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </nav> -->
                            <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                            <?php 
                                $dailyoffer = "select * from `daily_offers` do join `product` p on do.product_id=p.pro_id join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id where do.offer_status = 'Active'";
                                $dailyofferresult = mysqli_query($conn,$dailyoffer);
                                $dailycount = mysqli_num_rows($dailyofferresult);

                                while($dailyrows = mysqli_fetch_assoc($dailyofferresult)){                                    
                                    ?>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="productdetails.php?id=<?php echo $dailyrows['pro_id']; ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($dailyrows['pro_img1']); ?>" alt="Product" width="300"
                                                    height="338" />
                                            </a>
                                            
                                            <div class="product-action-horizontal">
                                                <button class="btn-product-icon btn-cart w-icon-cart btncart"
                                                    title="Add to cart" value="<?php echo $dailyrows['pro_id']; ?>"></button>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="productdetails.php?id=<?php echo $dailyrows['pro_id']; ?>" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>
                                            <div class="product-label-group">
                                            <label class="product-label label-discount"><?php echo $dailyrows['discount'] ?>% Off</label>
                                        </div>

                                        <div class="product-countdown-container">
                                                
                                            <label class="mr-2 " style="color: white ; font-size: 16px;">Offer End In:</label><br/>
                                            <!-- <div class="product-countdown countdown-compact"
                                                data-until="2022, 12, 31" data-compact="true"> -->
                                                <span  style="color: white ; font-weight: 700; font-size: 20px;" ><?php echo $dailyrows['end_date'] ?>,  &nbsp; <?php echo $dailyrows['end_time'] ?></span>
                                            <!-- </div> -->
                                            
                                            </h2>
                                            
                                        </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a><?php echo $dailyrows['maincat_name']; ?> / <?php echo $dailyrows['cat_name']; ?> / <?php echo $dailyrows['subcat_name']; ?></a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="productdetails.php?id=<?php echo $dailyrows['pro_id']; ?>"><?php echo $dailyrows['pro_name']; ?></a>
                                            </h3>
                                            <div class="ratings-container">
                                            <?php
                                                    $produ_id = $dailyrows['pro_id'];
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

                                                                    <a href="productdetails.php?id=<?php echo $dailyrows['pro_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            </div>
                                            <div class="product-price">
                                                $<?php echo $dailyrows['pro_price']; ?> - <del>$<?php echo $dailyrows['pro_crossprice']; ?></del><br/>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>

                                
                                <?php
                            
                            } ?>
                                
                            </div>


                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="showing-info mb-2 mb-sm-0">
                                Showing<span><?php echo $dailycount ?> of <?php echo $dailycount ?></span>Products
                                </p>
                                
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->

                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar left-sidebar sticky-sidebar-wrapper">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <div class="filter-actions">
                                    <label>Filter :</label>
                                    <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                </div>
                                <!-- Start of Collapsible widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Babies</a></li>
                                        <li><a href="#">Beauty</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Price</span></h3>
                                    <div class="widget-body">
                                        <ul class="filter-items search-ul">
                                            <li><a href="#">$0.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $200.00</a></li>
                                            <li><a href="#">$200.00 - $300.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00+</a></li>
                                        </ul>
                                        <form class="price-range">
                                            <input type="number" name="min_price" class="min_price text-center"
                                                placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                name="max_price" class="max_price text-center" placeholder="$max"><a
                                                href="#" class="btn btn-primary btn-rounded">Go</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Size</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Extra Large</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Brand</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Elegant Auto Group</a></li>
                                        <li><a href="#">Green Grass</a></li>
                                        <li><a href="#">Node Js</a></li>
                                        <li><a href="#">NS8</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Skysuite Tech</a></li>
                                        <li><a href="#">Sterling</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Color</span></h3>
                                    <ul class="widget-body filter-items item-check">
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Orange</a></li>
                                        <li><a href="#">Yellow</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

<?php include 'footer.php' ?>