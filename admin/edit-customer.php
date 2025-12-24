<?php
    include("connection.php");
    $id = $_GET['pid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Lawyer</title>
    <link rel="icon" href="img/logo.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<style>
     *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body
    {
        background-color: #fff6e6;
    }

    .page-wrapper
    {
        width: 100%;
        padding: 50px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        position: absolute;
        /* border: 2px solid black; */

    }
    .page-wrapper .content
    {
        width: 400px;
        padding: 50px;
        border-width: 5px;
        border-radius: 5px;
        text-align: center;
        background-color: #d3c1a1;
        position: relative;
        right: 15%;
    }
    .page-wrapper .content h2
    {
        margin: 10px 0px;
        color: #fff;
    }
    .page-wrapper .content input
    {
        border: 1px solid black;
        padding: 5px 15px;
        border-radius: 10px;
    }
    .page-wrapper .content .update
    {
        background-color: #8e764c;
        color: #fff;
        transition-duration: 0.4s;
        border-color: #fff;
        cursor: pointer;
    }
    .page-wrapper .content .update:hover
    {
        transform: scale(1.1);
    }
</style>

<body>
    <div class="main-wrapper">
    <?php 
            include('header.php');
            include('sidebar.php');
        ?>
        <div class="page-wrapper">
            <div class="content">
                <h2 style="text-align: center;">Edit / Update Customer</h2> <br><br>
                <?php
                    $fetch_patient = "SELECT * FROM tbl_customer where p_id=$id;";
                    $result = mysqli_query($connection,$fetch_patient);
                    $row = mysqli_fetch_array($result);
                ?>
                <form method="post" id="form">
                    <input type="text" value="<?php echo $row['p_name']?>" name="txtname"> <br><br>
                    <input type="text" value="<?php echo $row['p_email']?>" name="txtemail"> <br><br>
                    <input type="text" value="<?php echo $row['p_phone']?>" name="txtphone"> <br><br>
                    <input type="text" value="<?php echo $row['p_address']?>" name="txtaddress"> <br><br>
                    <input type="text" value="<?php echo $row['p_username']?>" name="txtusername"> <br><br>
                    <input type="text" value="<?php echo $row['p_password']?>" name="txtpassword"> <br><br>
                    <input type="submit" value="Update Customer" name="updatebtn" class="update">
                </form>
                <?php
                    if(isset($_POST['updatebtn']))
                    {
                        $pname = $_POST['txtname'];
                        $pemail = $_POST['txtemail'];
                        $pphone = $_POST['txtphone'];
                        $paddress = $_POST['txtaddress'];
                        $pusername = $_POST['txtusername'];
                        $ppassword = $_POST['txtpassword'];
                        $update_query = "UPDATE tbl_customer set p_name='$pname',p_email='$pemail',p_phone='$pphone',p_address='$paddress',p_username='$pusername',p_password='$ppassword' WHERE p_id=$id";
                        if(mysqli_query($connection,$update_query))
                        {
                            echo "
                            <script>
                                alert('Patient Updated');
                                window.location.href='fetch-patients.php';
                            </script>";
                        }
                       
                    }
                ?>  

				
           
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/Chart.bundle.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/app.js"></script>

</body>



</html>