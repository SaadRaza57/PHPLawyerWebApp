<?php
    include("connection.php");
    $id = $_GET['did'];
    $query = "DELETE FROM tbl_lawyer WHERE d_id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Doctor Deleted');
            window.location.href='fetch-lawyer.php';
        </script>";
    }

?>