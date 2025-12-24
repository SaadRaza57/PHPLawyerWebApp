<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lawyer</title>
    <link rel="icon" href="img/logo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">

</head>

<body>


    <!-- Navbar Start -->
    <?php include('navbar.php');?>
    <!-- Navbar End -->

 <!-- Page Header Start -->
 <div class="container-fluid bg-page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Attorney</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Attorney</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

 <!--Search bar start-->

<section class="hero-wrap hero-wrap-2" style="background-image: url('legalcare-master/images/bg_1.jpg');" data-stellar-background-ratio="0">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Search Lawyers</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <form action="">
                    <div class="form-group">
                        <label>Search</label>
                        <input type="text" id="lawyersearch" class="form-control">
                    </div>
                </form>
            </div>
            <div class="row" id="searchresult" style="display: none;">

            </div>
            <div class="row" id="olddaata">
                <?php

                include 'connection.php';
                $query = "select * from tbl_lawyer INNER join tbl_specialization on tbl_lawyer.specialization=tbl_specialization.sp_id JOIN tbl_cities ON tbl_lawyer.city_id=tbl_cities.city_id";
                $result =  mysqli_query($connection, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="col">
                            <div class="card shadow-lg">
                                <img class="card-img-top" height="200" src="<?php echo $row['d_image']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Name:     <?php echo $row['d_name']; ?></h5>
                                    <p class="card-text">Specialization:      <?php echo $row['specialization_name']; ?></p>
                                    <p class="card-text">Location:    <?php echo $row['city_name']; ?></p>
                                    <a href="bookappointment.php?lawyer=<?php echo $row['d_id']; ?>" class="btn btn-primary">Book Appointment</a> 
                                    
                                    </div>
                                    </div>
                        </div>


                <?php }
                } ?>
            </div>
        </div>
    </div>
      
        <!--Search bar end-->

        

<?php 

include 'footer.php';
?>

<script type="text/javascript">
        $(document).ready(function() {

            $("#lawyersearch").keyup(function() {
                var value = $(this).val();
                if (value != "") {
                    $.ajax({
                        url: "lawyer_search.php",
                        method: "POST",
                        data: {
                            value: value
                        },
                        success: function(data) {
                            $("#searchresult").html(data);
                            $("#searchresult").show();
                            $("#olddaata").hide();

                        }

                    });
                } else {
                    $("#searchresult").hide();
                    $("#olddaata").show();

                }
            });
        });
    </script>
    