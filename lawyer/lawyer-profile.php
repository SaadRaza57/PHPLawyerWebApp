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
        <?php 
            include('header.php');
            include('sidebar.php');
            $id = $_SESSION['username'];
            $doctorName = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_lawyer WHERE d_id=$id"));
            $specalization_id = mysqli_fetch_array(mysqli_query($connection,"SELECT specialization FROM tbl_lawyer WHERE d_id=$id"));
            $specalization_name = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_specialization WHERE sp_id=$specalization_id[specialization]"));
            $city_id = mysqli_fetch_array(mysqli_query($connection,"SELECT city_id FROM tbl_lawyer WHERE d_id=$id"));
        ?>
        <div class="page-wrapper">
            <div class="content">
                <h2 style="text-align: center;">Lawyer Profile</h2> <br><br>
                <?php
                    $fetch_doctor = "select * from tbl_lawyer INNER join tbl_specialization on tbl_lawyer.specialization=tbl_specialization.sp_id JOIN tbl_cities ON tbl_lawyer.city_id=tbl_cities.city_id";
                    $result = mysqli_query($connection,$fetch_doctor);
                    $row = mysqli_fetch_array($result);
                ?>
                <form method="post" id="form" enctype="multipart/form-data">
                    <input type="text" value="<?php echo $row['d_name']?>" name="txtname"> <br><br>
                    <input type="text" value="<?php echo $row['d_email']?>" name="txtemail"> <br><br>
                    <input type="text" value="<?php echo $row['d_phone']?>" name="txtphone"> <br><br>
                    <input type="text" value="<?php echo $row['d_username']?>" name="txtusername"> <br><br>
                    <input type="text" value="<?php echo $row['d_password']?>" name="txtpassword"> <br><br>
                    <input type="text" value="<?php echo $row['consult_charges']?>" name="txtcharges"> <br><br>
                    <input type="file" name="txtimage"> <br><br>
                    <select name="txtspecialization">
                        <option value="" hidden>Select Specialization</option>
                        <?php
                            $fetchSpecialization = "SELECT * FROM tbl_specialization";
                            $result = mysqli_query($connection,$fetchSpecialization);
                            foreach($result as $row)
                            {
                                echo "<option value='$row[sp_id]' selected>$row[specialization_name]</option>";
                            }
                        ?>
                    </select> <br><br>
                    
                    <select name="txtcity">
                        <option value="" hidden>Select City</option> 
                        <?php
                            $fetchcity = "SELECT * FROM tbl_cities";
                            $result = mysqli_query($connection,$fetchcity);
                            foreach($result as $row)
                            {
                                echo "<option value='$row[city_id]'>$row[city_name]</option>";
                            }
                        ?>
                    </select> <br><br> 
                    <input type="submit" value="Update Details" name="updatebtn" class="update">
                </form>
                <?php
                    if(isset($_POST['updatebtn']))
                    {
                        $dname = $_POST['txtname'];
                        $demail = $_POST['txtemail'];
                        $dphone = $_POST['txtphone'];
                        $dusername = $_POST['txtusername'];
                        $dpassword = $_POST['txtpassword'];
                        $dcharges = $_POST['txtcharges'];



                        $imagename = $_FILES['txtimage']['name'];
                        $tmpname = $_FILES['txtimage']['tmp_name'];

                        
                        
                        $imagepath = "img/profilepic/".$imagename;

                        
                        move_uploaded_file($tmpname,$imagepath);



                            $dspecialization = $_POST['txtspecialization'];
                            $cityid = $_POST['txtcity'];
                            $update_query = "UPDATE tbl_lawyer set d_name='$dname',d_email='$demail',d_phone='$dphone',d_username='$dusername',d_password='$dpassword',consult_charges='$dcharges',d_image='$imagepath',specialization='$dspecialization',city_id='$cityid' WHERE d_id=$id";
                        if(mysqli_query($connection,$update_query))
                        {
                            echo "
                            <script>
                                alert('Lawyer Updated');
                                window.location.href='lawyer-profile.php';
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