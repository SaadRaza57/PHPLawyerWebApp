<?php
    include("connection.php");
    $query = " SELECT * FROM tbl_cities ";
    $result = mysqli_query($connection,$query);
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
    .page-wrapper table
    {
        margin: 20px;
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
                    <h2 style="text-align: center;">View All Cities</h2>
                    <br><br>
                    <a href="add-new-cities.php" style="background-color: #8e764c; color: #fff; padding: 10px;">
                        Add New Cities
                    </a>
                    <br><br>
                    <table border="3" style="width: 100%; text-align:center">
                        <thead>
                            <tr>
                                <th>City Id</th>
                                <th>City Name</th>
                                <th>Remove</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($result as $row)
                                {
                                    echo "<tr>";
                                        echo "<td>$row[city_id]</td>";
                                        echo "<td>$row[city_name]</td>";
                                        echo 
                                        "<td>
                                        <a href='delete-cities.php?cityid=$row[city_id]' style='background-color: #8e764c; text-align:center; color: #fff; padding: 5px 2px; display: block;'>Delete</a>
                                        </td>";
                                        echo 
                                        "<td>
                                        <a href='edit-cities.php?cityid=$row[city_id]' style='background-color: #8e764c; text-align:center; color: #fff; padding: 5px 2px; display: block;'>Update</a>
                                        </td>";
                                        
                                }
                            ?>
                        </tbody>
                    </table>
				
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