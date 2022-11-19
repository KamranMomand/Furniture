<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:33:35 GMT -->
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

    <!--AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Popup -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>

<body>
<?php include 'header.php' ?>

<!-- Start of Main -->
<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">Filter By Budget</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>Filter By Budget</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <div class="page-content contact-us">
                <div class="container">
                <section class="contact-section">
                        <div class="row gutter-lg pb-3">
                            
                            
                            <div class="col-lg-6 mb-8">
                                
                                <h4 class="title mb-3">Product Searching By Your Own Budget</h4><br/>
                                <form method="POST">
                                <div class="contact-us-form">
                                    <div class="form-group">
                                        <label for="username">Which product do you want to buy?</label>
                                        <input type="text" id="txtpname" name="txtpname" class="form-control" placeholder="Couch" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">How Much Is Your Starting Budget?</label>
                                        <input type="text" id="txtsprice" name="txtsprice" class="form-control" placeholder="100" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_1">How Much Is Your Ending Budget?</label>
                                        <input type="text" id="txteprice" name="txteprice" class="form-control" placeholder="400" required>
                                    </div>
                                    <br/>
                                    <button type="submit" name="btnsearch" class="btn btn-dark btn-rounded">Search Now</button> 
                                </div>
                                </form>
                            </div>

                            <div class="col-lg-6 mb-8">
                                <div class="accordion accordion-bg accordion-gutter-md accordion-border">
                                    <div class="card">
                                        <img src="assets/images/filter2.png" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                
            

                <?php
                    if(isset($_POST['btnsearch'])){
                        $proname=$_POST['txtpname'];
                        $sprice=$_POST['txtsprice'];
                        $eprice=$_POST['txteprice'];
                    
                ?>

                <div class="shop-content toolbox-horizontal">
                        
                        <!-- Start of Product Wrapper -->
                        <div class="product-wrapper row cols-lg-5 cols-md-3 cols-sm-2 cols-2">

                        <?php
                            $aproquery = "select * from `product` p join `sub_category` sc on p.pro_subcat=sc.subcat_id join `category` c on sc.category=c.cat_id join `main_category` mc on c.main_category=mc.maincat_id join `pro_badge` pb on p.pro_badge=pb.badge_id join `pro_warrenty` pw on p.pro_warranty=pw.warren_id where p.pro_price > '$sprice' AND p.pro_price < '$eprice' AND p.pro_name LIKE '%$proname%' AND `pro_status` = 'Active'";
                            $aproresult = mysqli_query($conn, $aproquery);
                            $count = mysqli_num_rows($aproresult);
                            
                            if($count > 0){

                            while ($aprorow = mysqli_fetch_array($aproresult)) {
                        ?>
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="productdetails.php?id=<?php echo $aprorow['pro_id']; ?>">
                                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($aprorow['pro_img1']); ?>" alt="<?php echo $aprorow['pro_name']; ?>" width="300"
                                                height="338" />
                                        </a>
                                        <div class="product-action-horizontal">
                                            <button class="btn-product-icon btn-cart w-icon-cart btncart"
                                                title="Add to cart" value="<?php echo $aprorow['pro_id']; ?>"></button>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart "
                                                title="Wishlist"></a>
                                            
                                            <a href="productdetails.php?id=<?php echo $aprorow['pro_id']; ?>" class="btn-product-icon btn-quickview w-icon-search btnview"
                                                title="Quick View"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">
                                            <a><?php echo $aprorow['maincat_name']; ?> / <?php echo $aprorow['cat_name']; ?> / <?php echo $aprorow['subcat_name']; ?></a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="productdetails.php?id=<?php echo $aprorow['pro_id']; ?>"><?php echo $aprorow['pro_name']; ?></a>
                                        </h3>
                                        <div class="ratings-container" >
                                        <?php
                                                    $produ_id = $aprorow['pro_id'];
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
                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                $<?php echo $aprorow['pro_price']; ?> - <del>$<?php echo $aprorow['pro_crossprice']; ?></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                                }}
                            else{ ?>
                            

                            <span>No Products in Range</span>
                            <br/> <br/>
                                <?php
                            }
                            ?>
                            
                        </div>
                        <!-- End of Product Wrapper -->

                        <!-- Start of Pagination -->
                        <div class="toolbox toolbox-pagination justify-content-between">
                            <p class="showing-info mb-2 mb-sm-0">
                                Showing<span><?php echo $count ?> of <?php echo $count ?></span>Products
                            </p>
                        </div>
                        <!-- End of Pagination -->
                    </div>
<?php } ?>

            
            </div>


            </div>


            </main>
       
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

<?php include 'footer.php'; ?>