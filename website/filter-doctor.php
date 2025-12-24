<?php
    $connection = mysqli_connect("localhost","root","","db_care");
    $name = $_POST['d_name'];
    $query = "SELECT tbl_lawyer.*, tbl_specialization.* FROM tbl_lawyer inner join tbl_specialization on tbl_lawyer.specialization=tbl_specialization.sp_id WHERE d_name like '$name%' ";
    $result = mysqli_query($connection,$query);
    $record = "";
    foreach($result as $row)
    {
        // $record .= "<option value='$row[d_id]'>$row[d_name]</option>";
        $record .= "<div  class='col-lg-4 wow slideInUp' data-wow-delay='0.3s'>
                        <div class='team-item'>
                            <div class='position-relative rounded-top' style='z-index: 1;'>
                                <img class='img-fluid rounded-top w-100' src='../doctors/$row[d_image]'>
                                <div class='position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex'>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-twitter fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-facebook-f fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-linkedin-in fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-instagram fw-normal'></i></a>
                                </div>
                            </div>
                            <div class='team-text position-relative bg-light text-center rounded-bottom p-4 pt-5'>
                                <h4 class=mb-2'>$row[d_name]</h4>
                                <p class='text-primary mb-0'>$row[specialization_name]</p>
                            </div>
                        </div>
                    </div>";
    }
    echo $record;
    ?>
    