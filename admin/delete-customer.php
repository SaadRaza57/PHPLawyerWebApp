<?php
    include("connection.php");
    $id = $_GET['pid'];
    $query = "DELETE FROM tbl_customer WHERE p_id=$id";
    if(mysqli_query($connection,$query))
    {
        echo "
        <script>
            alert('Doctor Deleted');
            window.location.href='fetch-customer.php';
        </script>";
    }

?>