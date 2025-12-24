<?php 
   include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">


<!-- register24:03-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Lawyer</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/login-css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login-css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/login-css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login-css/register.css">

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<style>
    body
    {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-image:url(./img/lawyerlogo/background.jpg);
    }
    .account-btn {
        background-color: #8e764c !important;
    }
    .account-btn:hover{
        background-color: white !important;
        color: #8e764c !important;
        border-color: #8e764c !important;
    }
    a {
        color: black !important;
    }
    a:hover{
        color: #8e764c !important;
    }
</style>


<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="POST" autocomplete="off"  class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="img/lawyerlogo/logo-dark.png" alt=""></a>
                            <h2>Register Customer</h2>
                        </div>
                        <div class="form-group">
                            <!-- <label>Name</label> -->
                            <input type="text" name="txtname" class="form-control" placeholder="Enter Full Name" >
                        </div>
                        <div class="form-group">
                            <!-- <label>Email</label> -->
                            <input type="text" name="txtemail" class="form-control"  placeholder="Enter Email ">
                        </div>
                        <div class="form-group">
                            <!-- <label>Contact</label> -->
                            <input type="text" name="txtphone" class="form-control"  placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <!-- <label>Address</label> -->
                            <input type="text" name="txtaddress" class="form-control"  placeholder="Enter Your Address">
                        </div>
                        <div class="form-group">
                            <!-- <label>Username</label> -->
                            <input type="text" name="txtusername" class="form-control"  placeholder="Enter Username">
                        </div>
                        <div class="form-group">
                            <!-- <label>Password</label> -->
                            <input type="password" name="txtpassword" class="form-control"  placeholder="Enter Password">
                        </div>
                        
                        <!-- <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div> -->
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" name="btninsert" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.php">Login</a>
                        </div>
                    </form>
                    <?php
                        if(isset($_POST['btninsert']))
                        {
                            $Name = $_POST['txtname'];
                            $Email = $_POST['txtemail'];
                            $contact = $_POST['txtphone'];
                            $address= $_POST['txtaddress'];
                            $username = $_POST['txtusername'];
                            $password = $_POST['txtpassword'];
                            $query = "INSERT INTO tbl_customer(p_name,p_email,p_phone,p_address,p_username,p_password)
                            VALUES ('$Name','$Email','$contact','$address','$username','$password')";
                            $result = mysqli_query($connection,$query);
                            if($result)
                            {
                                echo "
                                <script>
                                alert('You Have Been Registered');
                                window.location.href='login.php';
                                </script>";
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
    <script src="js/jQuery.min.js"></script>
</body>


<!-- register24:03-->
</html>