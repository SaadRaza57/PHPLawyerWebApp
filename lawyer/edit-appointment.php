<?php
    include("connection.php");
    $id = $_GET['id'];

    $select_appointment = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_appointment WHERE app_id=$id"));
    
    $patient_id = mysqli_fetch_array(mysqli_query($connection,"SELECT p_id from tbl_appointment where app_id=$id")); 
    $select_patient_id= $patient_id['p_id'];   
    $select_patient = mysqli_fetch_array(mysqli_query($connection,"SELECT tbl_appointment.*,tbl_customer.* from tbl_appointment inner join tbl_customer on tbl_appointment.p_id=tbl_customer.p_id WHERE tbl_appointment.p_id=$select_patient_id"));

    $doctor_id = mysqli_fetch_array(mysqli_query($connection,"SELECT d_id from tbl_appointment where app_id=$id")); 
    $select_doctor_id= $doctor_id['d_id'];   
    $select_doctor = mysqli_fetch_array(mysqli_query($connection,"SELECT tbl_appointment.*,tbl_lawyer.* from tbl_appointment inner join tbl_lawyer on tbl_appointment.d_id=tbl_lawyer.d_id WHERE tbl_appointment.d_id=$select_doctor_id"));
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
        <?php
            include('header.php');
            include('sidebar.php');
        ?>
        <div class="page-wrapper">
            <div class="content">
                <h2 style="text-align: center;">Edit / Update Appointment</h2> <br><br>
                <?php
                    $fetch_cities = "SELECT * FROM tbl_appointment where app_id=$id";
                    $result = mysqli_query($connection,$fetch_cities);
                    $row = mysqli_fetch_array($result); 
                ?>
                <form method="post" id="form">
                <input type="text" name="txtpatient" value="<?php echo $select_patient['p_name']?>" readonly> <br><br> 
                <input type="text" name="txtdoctor" value="<?php echo $select_doctor['d_name']?>" readonly> <br><br> 
                    <input type="date" name="txtdate" value="<?php echo $select_appointment['app_date']?>"> <br><br>
                    <select name="txttime">
                        <option value="" hidden><?php echo $select_appointment['app_time']?></option>
                        <option value="9-11">9-11</option>
                        <option value="11-1">11-1</option>
                        <option value="1-3">1-3</option>
                        <option value="3-5">3-5</option>
                    </select> <br><br>
                    <input type="submit" value="Updated Appointment" name="btninsert">
                </form>
                <?php
                    if(isset($_POST['btninsert']))
                    {
                        $date = $_POST['txtdate'];
                        $time = $_POST['txttime'];
                        $update_query = "UPDATE tbl_appointment SET app_date='$date',app_time='$time' WHERE app_id=$id";
                        if(mysqli_query($connection,$update_query))
                        {
                            echo "
                            <script>
                                alert('Appointment Updated');
                                window.location.href='fetch-appointment.php';
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