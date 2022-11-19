<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/shop-horizontal-filter.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:34:05 GMT -->
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

<!-- Start of Main -->
<main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="weddingpackages.php">Shop</a></li>
                        <li>All Products</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10">
                <div class="container">
                    <!-- Start of Shop Banner -->
                    <div class="shop-default-banner banner d-flex align-items-center mb-5 br-xs"
                        style="background-image: url(assets/images/shop/abc.jpg); background-color: #FFC74E;">
                        <div class="banner-content">
                            <h4 class="banner-subtitle font-weight-bold">Top Packages</h4>
                            <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-normal">Wedding 
                            Furniture's</h3>
                            <a href="weddingpackages.php" class="btn btn-dark btn-rounded btn-icon-right">Shop
                                Now<i class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End of Shop Banner -->

                    <!-- Start of Shop Category -->
                    <div class="shop-default-category category-ellipse-section mb-6">
                        <div class="swiper-container swiper-theme shadow-swiper"
                            data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 3
                                },
                                '576': {
                                    'slidesPerView': 4
                                },
                                '768': {
                                    'slidesPerView': 6
                                },
                                '992': {
                                    'slidesPerView': 7
                                },
                                '1200': {
                                    'slidesPerView': 8,
                                    'spaceBetween': 30
                                }
                            }
                        }">
                            <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">
                            <?php       
                                $acquery = "select * from `main_category`";
                                $acresult = mysqli_query($conn, $acquery);
                                while ($acrow = mysqli_fetch_array($acresult)) {
                                         
                            ?>
                                <div class="swiper-slide category-wrap">
                                    <div class="category category-ellipse">
                                        <figure class="category-media">
                                            <a href="maincatproduct.php?id=<?php echo $acrow[0] ?>">
                                                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($acrow['maincat_image']); ?>" alt="Categroy"
                                                    width="190" height="190" style="background-color: #5C92C0;" />
                                            </a>
                                        </figure>
                                        <div class="category-content">
                                            <h4 class="category-name">
                                                <a href="maincatproduct.php?id=<?php echo $acrow[0] ?>"><?php echo $acrow['maincat_name']; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                        }      
                                ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- End of Shop Category -->

                    <div class="shop-content toolbox-horizontal">
                    <style>

.price{
    border: thick;
    border-radius: 25px;
    border-color: rgb(255, 255, 0);
    background-color: #eef5fc;
}
.price:hover{
    background-color: #d9ebff;
}
.prtable{
    padding: 0px;
    margin-right: 0px;
}
</style>


  <table style="width: 90% ;">
    <tbody >
        <tr >
            <th style="font-size: 17px; color: black">Price:</th>
            <td > 
            <a href="wpackpricefilter.php?priceids=1&priceide=50" class="btn price">$0.00 - $50.00</a>
            </td>
            <td>
            <a href="wpackpricefilter.php?priceids=50&priceide=100" class="btn price">$50.00 - $100.00</a>
            </td>
            <td>
            <a href="wpackpricefilter.php?priceids=100&priceide=200" class="btn price">$100.00 - $200.00</a>
            </td>
            <td>
            <a href="wpackpricefilter.php?priceids=200&priceide=400" class="btn price">$200.00 - $400.00</a>
            </td>
            <td>
            <a href="wpackpricefilter.php?priceids=400&priceide=500" class="btn price">$400.00 - $500.00</a>
            </td>
            <td>
            <a href="wpackpricefilter.php?priceids=500&priceide=100000000000" class="btn price">$500.00+</a>
            </td>
        </tr>
    </tbody>
   </table> 
   <br/>

                        <!-- Start of Product Wrapper -->
                        <div class="product-wrapper row cols-lg-5 cols-md-3 cols-sm-2 cols-2">

                        <?php
                            $aproquery = "select * from `wedding_packages` wp join `pro_badge` pb on wp.pro_badge=pb.badge_id join `pro_warrenty` pw on wp.pro_warrenty=pw.warren_id where wp.wpack_status = 'Active'";
                            $aproresult = mysqli_query($conn, $aproquery);

                            while ($aprorow = mysqli_fetch_array($aproresult)) {
                        ?>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="wpackdetails.php?id=<?php echo $aprorow['wpack_id']; ?>">
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($aprorow['wpack_img1']); ?>" alt="<?php echo $aprorow['wpack_name']; ?>" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-horizontal">
                                            <button class="btn-product-icon btn-cart w-icon-cart btncart"
                                                title="Add to cart" value="<?php echo $aprorow['wpack_id']; ?>"></button>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart "
                                                title="Wishlist"></a>
                                            
                                            <a href="wpackdetails.php?id=<?php echo $aprorow['wpack_id']; ?>" class="btn-product-icon btn-quickview w-icon-search btnview"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a><?php echo $aprorow['wpack_code']; ?> / <?php echo $aprorow['wpack_quantity']; ?></a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="wpackdetails.php?id=<?php echo $aprorow['wpack_id']; ?>"><?php echo $aprorow['wpack_name']; ?></a>
                                        </h3>
                                        <div class="ratings-container" >
                                        <?php
                                                    $produ_id = $aprorow['wpack_id'];
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

                                                                    <a href="wpackdetails.php?id=<?php echo $aprorow['wpack_id']; ?>" class="rating-reviews">(<?php echo $countra2 ?> reviews)</a>
                                                                    <?php }else{ ?> 
                                                                    <a class="rating-reviews">No Any Ratings.</a>
                                                                        <?php } ?>
                                            
                                        </div>
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                $<?php echo $aprorow['wpack_price']; ?> - <del>$<?php echo $aprorow['wpack_cross_price']; ?></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                }
                            ?>

                            
                        </div>
                        <!-- End of Product Wrapper -->

                        <!-- Start of Pagination -->
                        <div class="toolbox toolbox-pagination justify-content-between">
                            <p class="showing-info mb-2 mb-sm-0">
                                Showing<span>1-12 of 60</span>Products
                            </p>
                            <ul class="pagination">
                                <li class="prev disabled">
                                    <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <i class="w-icon-long-arrow-left"></i>Prev
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="next">
                                    <a href="#" aria-label="Next">
                                        Next<i class="w-icon-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End of Pagination -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
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

<?php include 'footer.php' ?>