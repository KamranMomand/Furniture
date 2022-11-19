<?php
    if(session_id()==null) 
    { 
        session_start(); 
    } 
    include_once 'config.php';
    ?>

    <div class="page-wrapper">
        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Wolmart Furniture Store !</p>
                    </div>
                    
                    <div class="header-right">
                        <span class="divider d-lg-show"></span>
                        <a href="contact.php" class="d-lg-show">Contact Us</a>
                        <a href="myaccount.php" class="d-lg-show">My Account</a>
                        <?php
                        if(isset($_SESSION['user_id']))
                        {
                        ?>
                        <a class="d-lg-show" style="color: #336699 ;"><?php echo $_SESSION['user_name'] ?></a><span class="divider d-lg-show"></span>
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
                        <form method="get" action="#" class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                <option value="">All Categories</option>
                                    <?php while($allcatrow = mysqli_fetch_array($allcatdropresult)) { ?>
                                    <option value="<?php echo $allcatrow['maincat_id'] ?>"><?php echo $allcatrow['maincat_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="search" id="search"
                                placeholder="Search in..." required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
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
                                <?php if (isset($_SESSION['user_id'])) { ?><span class="cart-count"><?php echo $cartcount; ?></span><?php } ?>
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
                                  $acartuser = $_SESSION['user_id'];
                                
                                  $acartquery = "select * from `cart` join `product` p on cart.pro_id=p.pro_id where cart.user_id = '$acartuser' ";
                                  $acartresult = mysqli_query($conn, $acartquery);
                                  $carttotal = 0;
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
                                    $carttotal += $acartrow['cart_pro_qty'] * $acartrow['pro_price'];
                                  }
                                        
                                    ?>
                                    
                              
                                    <?php
                                        $acartcheck = mysqli_num_rows($acartresult) > 0;
                                        if ($acartcheck <= 0) { ?>
                                        <br/>
                                        <h5> No Product in cart</h5>
                                        <br/>
                                        <div class="cart-action">
                                        <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                        <a href="allproducts.php" class="btn btn-dark btn-outline btn-rounded">Shop</a>
                                        </div>
                                    <?php
                                        } else {
                                    ?>
                                        <div class="cart-total">
                                        <label>Subtotal:</label>
                                        <span class="price">$<?php echo $carttotal ?></span>
                                        </div>
                                        <div class="cart-action">
                                            <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                            <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                                        </div>
                                    <?php 
                                        }
                                          }else{ ?>

                                            <br/>
                                            <h5> No Product in cart</h5>
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

            <div class="header-bottom sticky-content fix-top sticky-header">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle" role="button" data-toggle="dropdown"
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
