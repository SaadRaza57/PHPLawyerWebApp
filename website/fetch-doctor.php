<?php
    include("connection.php");
    $sid = $_POST['sp_id'];
    $result = mysqli_query($connection,"SELECT * FROM tbl_lawyer WHERE specialization=$sid");
    $record = "";
    foreach($result as $row)
    {
        $record .= "<option value='$row[d_id]'>$row[d_name]</option>";
    }
    echo $record;
?>