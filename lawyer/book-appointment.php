<?php
    include("connection.php");
    $id = $_GET['id'];
    $query = "UPDATE tbl_appointment SET status='Book' WHERE app_id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Appointment Booked');
            window.location.href='fetch-appointment.php';
        </script>";
    }

?>