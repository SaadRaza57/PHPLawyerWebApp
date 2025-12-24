<?php
    include("connection.php");
    $id = $_GET['cityid'];
    $query = "DELETE FROM tbl_cities WHERE city_id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('City Deleted');
            window.location.href='fetch-cities.php';
        </script>";
    }

?>