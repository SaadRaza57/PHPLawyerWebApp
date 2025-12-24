<?php
    include("connection.php");
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
        <!-- Header Start  -->
        <?php include('header.php');?>
        <!-- Header End  -->

       <!-- Sidebar Start  -->
            <?php include('sidebar.php');?>        
       <!-- Sidebar End  -->

        <div class="page-wrapper">
            <div class="content">
                <h2 style="text-align: center;">Admin Profile</h2> <br><br>
                <?php
                    $fetch_admin = "SELECT * FROM tbl_admin";
                    $result = mysqli_query($connection,$fetch_admin);
                    $row = mysqli_fetch_array($result);
                ?>
                <form method="post" id="form">
                    <input type="text" value="<?php echo $row['name']?>" name="txtname"> <br><br>
                    <input type="text" value="<?php echo $row['username']?>" name="txtusername"> <br><br>
                    <input type="text" value="<?php echo $row['password']?>" name="txtpassword"> <br><br>
                    <input type="submit" value="Update Details" name="btnupdate" class="update">
                </form>
                <?php
                    if(isset($_POST['btnupdate']))
                    {   
                        $name = $_POST['txtname'];
                        $username = $_POST['txtusername'];
                        $password = $_POST['txtpassword'];
                        $update_query = "UPDATE tbl_admin SET `name`='$name',`username`='$username',`password`='$password'";
                        if(mysqli_query($connection,$update_query))
                        {
                            echo "
                            <script>
                                alert('Record Updated');
                                window.location.href='admin-profile.php';
                            </script>";
                        }
                    }
                ?>
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