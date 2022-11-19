<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolmart - Furniture Store</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>

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

                <br />
                <div id="message" style="text-align: center ; color: red"></div>
                <div class="tab-pane active" id="sign-in">

                    <div class="form-group">
                        <label>Email Address *</label>
                        <input type="text" class="form-control" name="emaill" id="emaill">
                        <span style="color: red;" class="error" id="email_err"> </span>
                    </div>
                    <div class="form-group mb-0">
                        <label>Password *</label>
                        <input type="password" class="form-control" name="passl" id="passl">

                    </div>
                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                        <label for="remember">Remember me</label>
                    </div>

                    <button class="btn btn-primary" id="btnsignin">Sign In</button> <br /> <span
                        style="color: #336699 ;" id="msgdisplayl"></span>
                    <script>
                    $(document).ready(function() {

                        $('#emaill').on('input', function() {
                            checkemail();
                        });
                        $('#passl').on('input', function() {
                            checkpass();
                        });


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
                                                $("#message").html(
                                                    `<div class="alert alert-warning">Invalid Credential!</div>`
                                                    );
                                            }

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




                    });
                    </script>

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

                    <button class="btn btn-primary" name="btnsignup" id="btnsignup">Sign Up</button> <br /><span
                        style="color: #336699 ;" id="msgdisplay"></span>

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
                                $("#messages").html(
                                    `<div class="alert alert-warning">Please fill all required field</div>`
                                    );
                            } else if (!checkname() || !checkemail() || !checkpass() || !checkphone()) {
                                $("#messages").html(
                                    `<div class="alert alert-warning">Please fill all required field</div>`
                                    );
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
                                            document.getElementById("msgdisplay")
                                                .innerHTML = errr;
                                        } else {
                                            alert(
                                                'Your Account Already Exists With This Email.'
                                            );
                                            // var errr="You Account Has Not Been Registered. Try Again!";
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
                                $('#pass_errr').html(
                                    'Minimum 5 and upto 15 characters, at least one uppercase letter, one lowercase letter, one number and one special character:'
                                    );
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

                </div>

            </div>
        </div>
    </div>




</body>

</html>