<?php
session_start();
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Lawyer</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<style>
    body {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-image: url(./img/lawyerlogo/background.jpg);
    }

    .account-btn {
        background-color: #8e764c !important;
    }

    .account-btn:hover {
        background-color: white !important;
        color: #8e764c !important;
        border-color: #8e764c !important;
    }
</style>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method='POST' autocomplete="off" class="form-signin">
                        <div class="account-logo">
                            <a href="index-2.html"><img src="img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="txtusername" placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="txtpassword" placeholder="Enter Password">
                        </div>
                        <div class="field">
                            <label hidden>hidden label</label>
                            <label style="margin-left: 40px;" class="form-check-label"><input type="checkbox" class="form-check-input" name="txtremember"> Remember Me</label>
                        </div>
                        <!-- <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div> -->
                        <div class="form-group text-center">
                            <button type="submit" style="background-color: #8e764c;" class="btn btn-primary account-btn" name="btnsubmit">Login</button>
                        </div>
                    </form>
                    <?php

                    if (isset($_POST['btnsubmit'])) {
                        $username = $_POST['txtusername'];
                        $password = $_POST['txtpassword'];

                        // if (isset($_POST['txtremember'])) {
                        //     setcookie("username", $username, time() + 86400 * 30);
                        //     setcookie("password", $password, time() + 86400 * 30);
                        // } else {
                        //     setcookie("username", "");
                        //     setcookie("password", "");
                        // }


                        $query = "SELECT * FROM tbl_admin WHERE
                            username='$username' and password='$password'";

                        $result = mysqli_query($connection, $query);


                        
                        if (mysqli_num_rows($result)) {
                            $_SESSION['username'] = $username;
                            header("location:index.php");
                        } else {
                            echo "<script>alert('Incorrect Username Or Password')</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</body>


<!-- login23:12-->

</html>