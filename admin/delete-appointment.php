<?php
    include("connection.php");
    $id = $_GET['id'];
    $query = "DELETE FROM tbl_appointment WHERE app_id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Appointment Deleted');
            window.location.href='fetch-appointment.php';
        </script>";
    }

?>