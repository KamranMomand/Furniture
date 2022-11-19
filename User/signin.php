<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from portotheme.com/html/wolmart/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Jun 2022 22:36:20 GMT -->

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
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'header.php' ?>

    <script>
    $(document).ready(function() {

        $('#emaill').on('input', function() {
            checkemail();
        });
        // $('#passl').on('input', function() {
        //     checkpass();
        // });

        $('#btnsignin').click(function() {

            if (!checkemail()) {
                console.log("er1");
                $("#message").html(
                    `<div class="alert alert-warning">Please fill all required field</div>`
                );
            } else if (!checkemail()) {
                $("#message").html(
                    `<div class="alert alert-warning">Please fill all required field</div>`
                );
                console.log("er");
            } else {


                var emaill = $('#emaill').val();
                var passl = $('#passl').val();
                $.ajax({

                    url: 'ajaxconfig.php',
                    type: 'POST',
                    data: {
                        Login: 1,
                        l_email: emaill,
                        l_pass: passl,
                    },
                    success: function(response) {
                        if (response) {
                            if (response == 1) {
                                window.location = "index.php";
                            } else {
                                $("#message").html(`<div class="alert alert-warning">Invalid Credential!</div>`);
                                // msg = "Invalid Account!";
                            }
                            // document.getElementById("#message").innerHTML = msg;
                        }
                    },
                    error: function(err) {
                        alert("Api Call Failed");
                    },

                });
            }
        });


        function checkemail() {
            var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $('#emaill').val();
            var validemail = pattern1.test(email);
            if (email == "") {
                $('#email_err').html('required field');
                return false;
            } else if (!validemail) {
                $('#email_err').html('invalid email');
                return false;
            } else {
                $('#email_err').html('');
                return true;
            }
        }

        // function checkpass() {
        //     console.log("sass");
        //     var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        //     var pass = $('#passl').val();
        //     var validpass = pattern2.test(pass);

        //     if (pass == "") {
        //         $('#pass_err').html('password can not be empty');
        //         return false;
        //     } else if (!validpass) {
        //         $('#pass_err').html(
        //             'Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:'
        //         );
        //         return false;

        //     } else {
        //         $('#pass_err').html("");
        //         return true;
        //     }
        // }


    });
    </script>

    <!-- Start of Main -->
    <main class="main login-page">
        <!-- Start of Page Header -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0">My Account</h1>
            </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="demo1.html">Home</a></li>
                    <li>My account</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <div class="page-content">
            <div class="container">
                <div class="login-popup">
                    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                        <ul class="nav nav-tabs text-uppercase" role="tablist">
                            <li class="nav-item">
                                <a href="#sign-in" class="nav-link active">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sign-up" class="nav-link">Sign Up</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                        <br/>

<div id="message"></div>
                            <div class="tab-pane active" id="sign-in">
                                <div class="form-group">
                                    <label>Email Address *</label>
                                    <input type="text" class="form-control" name="emaill" id="emaill">
                                    <span style="color: red;" class="error" id="email_err"> </span>
                                </div>
                                <div class="form-group mb-0">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="passl" id="passl">
                                    <!-- <span style="color: red;" class="error" id="pass_err"> </span> -->
                                </div>
                                <div class="form-checkbox d-flex align-items-center justify-content-between">
                                    <input type="checkbox" class="custom-checkbox" id="remember" name="remember"
                                        required="">
                                    <label for="remember">Remember me</label>
                                </div>
                                <button class="btn btn-primary" id="btnsignin">Sign In</button> <br /> <span
                                    style="color: #336699 ;" id="msgdisplayl"></span>
                            </div>



                            <div id="messages"></div>
                            <div class="tab-pane" id="sign-up">
                                <div class="form-group mb-5">
                                    <label>Full Name *</label>
                                    <input type="text" class="form-control" name="fname" id="fname">
                                    <span style="color: red;" class="error" id="name_errr"> </span>
                                </div>
                                <div class="form-group">
                                    <label>Email address *</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                    <span style="color: red;" class="error" id="email_errr"> </span>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Phone Number *</label>
                                    <input type="tel" class="form-control" name="phone" id="phone">
                                    <span style="color: red;" class="error" id="phone_errr"> </span>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Password *</label>
                                    <input type="password" class="form-control" name="pass" id="pass">
                                    <span style="color: red;" class="error" id="pass_errr"> </span>
                                </div>
                                <div class="form-group mb-5">
                                    <label>Country *</label>
                                    <select class="form-control" name="ddlcountry" id="ddlcountry">
                                        <option selected>Select Country..</option>
                                        <option>Pakistan</option>
                                        <option>India</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" name="password_1" id="password_1" required> -->
                                </div>
                                <p>Your personal data will be used to support your experience
                                    throughout this website, to manage access to your account.</p>
                                
                                <button class="btn btn-primary" name="btnsignup" id="btnsignup">Sign Up</button>
                                <br /><span style="color: #336699 ;" id="msgdisplay"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End of Main -->
    <script>
    $(document).ready(function() {

        $('#fname').on('input', function() {
            checkname();
        });
        $('#email').on('input', function() {
            checkemail();
        });
        $('#pass').on('input', function() {
            checkpass();
        });
        $('#phone').on('input', function() {
            checkphone();
        });

        $('#btnsignup').click(function() {

            if (!checkname() && !checkemail() && !checkpass() && !checkphone()) {
                console.log("er1");
                $("#messages").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            } else if (!checkname() || !checkemail() || !checkpass() || !checkphone()) {
                $("#messages").html(`<div class="alert alert-warning">Please fill all required field</div>`);
                console.log("er");
            } else {

            var fname = $('#fname').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var pass = $('#pass').val();
            var country = $('#ddlcountry').val();
            $.ajax({

                url: 'ajaxconfig.php',
                type: 'POST',
                data: {
                    Signup: 1,
                    f_name: fname,
                    s_email: email,
                    s_phone: phone,
                    s_pass: pass,
                    s_country: country,
                },
                success: function(response) {
                    if (response != 1) {
                        blankfield();
                        var errr = "You Account Has Been Registered";
                        document.getElementById("msgdisplay").innerHTML = errr;
                        $('#messages').hide();
                    } else {
                        alert('Your Account Already Exists With This Email.');
                    }

                },
                error: function(err) {
                    alert("Api Call Failed");
                },

            });
        
            function blankfield() {
            $('#fname').val("");
            $('#email').val("");
            $('#phone').val("");
            $('#pass').val("");
            $('#ddlcountry').val("");
        }
        
            }
        });
    

        function checkname() {
        var pattern = /^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/gm;
        var user = $('#fname').val();
        var validuser = pattern.test(user);
        if ($('#fname').val().length < 4) {
            $('#name_errr').html('Name length is too short');
            return false;
        } else if (!validuser) {
            $('#name_errr').html('Name should be a-z ,A-Z only');
            return false;
        } else {
            $('#name_errr').html('');
            return true;
        }
    }

    function checkemail() {
        var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var email = $('#email').val();
        var validemail = pattern1.test(email);
        if (email == "") {
            $('#email_errr').html('required field');
            return false;
        } else if (!validemail) {
            $('#email_errr').html('invalid email');
            return false;
        } else {
            $('#email_errr').html('');
            return true;
        }
    }

    function checkpass() {
        console.log("sass");
        var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        var pass = $('#pass').val();
        var validpass = pattern2.test(pass);

        if (pass == "") {
            $('#pass_errr').html('password can not be empty');
            return false;
        } else if (!validpass) {
            $('#pass_errr').html('Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:');
            return false;

        } else {
            $('#pass_errr').html("");
            return true;
        }
    }

    
    function checkphone() {
        if (!$.isNumeric($("#phone").val())) {
            $("#phone_errr").html("only number is allowed");
            return false;
        } else if ($("#phone").val().length != 11) {
            $("#phone_errr").html("11 digit required");
            return false;
        } else {
            $("#phone_errr").html("");
            return true;
        }
    }



    });
    </script>

    <?php include 'footer.php'; ?>