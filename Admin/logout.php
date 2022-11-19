
<?php
session_start();

session_destroy();

header('location:login.php');

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/page-logout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 14:24:14 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Log out </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- App css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

</head>

<body class="authentication-bg bg-primary authentication-bg-pattern d-flex align-items-center pb-0 vh-100">

    <div class="home-btn d-none d-sm-block">
        <a href="index.php"><i class="fas fa-home h2 text-white"></i></a>
    </div>

    <div class="account-pages w-100 mt-5 mb-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mb-0">

                        <div class="card-body p-4">

                            <div class="text-center account-box">
                                <div class="account-logo-box">
                                    <div class="text-center">
                                        <a href="index.html">
                                            <img src="images/logo-dark.png" alt="" height="30">
                                        </a>
                                    </div>
                                </div>

                                <div class="my-4">
                                    <div class="checkmark">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 161.2 161.2" enable-background="new 0 0 161.2 161.2" xml:space="preserve">
                                            <path class="path" fill="none" stroke="#32c861" stroke-miterlimit="10" d="M425.9,52.1L425.9,52.1c-2.2-2.6-6-2.6-8.3-0.1l-42.7,46.2l-14.3-16.4
                                                c-2.3-2.7-6.2-2.7-8.6-0.1c-1.9,2.1-2,5.6-0.1,7.7l17.6,20.3c0.2,0.3,0.4,0.6,0.6,0.9c1.8,2,4.4,2.5,6.6,1.4c0.7-0.3,1.4-0.8,2-1.5
                                                c0.3-0.3,0.5-0.6,0.7-0.9l46.3-50.1C427.7,57.5,427.7,54.2,425.9,52.1z" />
                                            <circle class="path" fill="none" stroke="#32c861" stroke-width="4" stroke-miterlimit="10" cx="80.6" cy="80.6" r="62.1" />
                                            <polyline class="path" fill="none" stroke="#32c861" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="113,52.8
                                                74.1,108.4 48.2,86.4 " />

                                            <circle class="spin" fill="none" stroke="#32c861" stroke-width="4" stroke-miterlimit="10" stroke-dasharray="12.2175,12.2175" cx="80.6" cy="80.6" r="73.9" />

                                        </svg>

                                    </div>
                                </div>

                                <h3>See You Again !</h3>

                                <p class="text-muted font-13 mt-2 mb-0"> You are now successfully sign out. Back to <a href="login.php" class="text-primary mr-1"><b>Sign In</b></a></p>

                            </div>
                        </div>

                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="js/vendor.min.js"></script>

    <!-- App js -->
    <script src="js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/adminox/layouts/horizontal/page-logout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 14:24:14 GMT -->
</html>