<?php
   session_start();
     if(!$_SESSION['username'])
     {
      header("location:login.php");
     }
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
    body
    {
        background-color: #fff6e6;
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
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <?php
                                $doctors_count = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM tbl_lawyer"));
                            ?>
							<div class="dash-widget-info text-right">
								<h3><?php echo $doctors_count?></h3>
								<span class="widget-title1">Lawyers <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user"></i></span>
                            <?php
                                $patient_count = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM tbl_customer"));
                            ?>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $patient_count?></h3>
                                <span class="widget-title2">Customers <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <?php
                                $appointment_count = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM tbl_appointment"));
                            ?>
                            <div class="dash-widget-info text-right">
                                <h3><?php echo $appointment_count?></h3>
                                <span class="widget-title3">Appointments <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>s
           
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