

<?php
include 'connection.php';
if(isset($_POST['value']) == true){
    $input = $_POST['value'];
    $query = "select * from tbl_lawyer INNER join tbl_specialization on tbl_lawyer.specialization=tbl_specialization.sp_id JOIN tbl_cities ON tbl_lawyer.city_id=tbl_cities.city_id WHERE specialization_name LIKE '%$input%' OR city_name LIKE '%$input%'";
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
         
         <div class="col">
                            <div class="card shadow-lg">
                                <img class="card-img-top" height="200" src="../lawyer/<?php echo $row['d_image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Name:     <?php echo $row['d_name']; ?></h5>
                                    <p class="card-text">Specialization:      <?php echo $row['specialization_name']; ?></p>
                                    <p class="card-text">Location:    <?php echo $row['city_name']; ?></p>
                                    <a href="appointment.php?lawyer=<?php echo  $row['d_id']?>" class="btn btn-primary">Book Appointment</a> 
                                    
                                    </div>
                                    </div>
                        </div>




    <?php } } }?>