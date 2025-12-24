    
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                </a>
            </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="attorney.php" class="nav-item nav-link">Attorneys</a>
                            <a href="service.php" class="nav-item nav-link">Service</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        
            <?php 
                if(isset($_SESSION['patientsession']))
                {
                    echo "<a href='appointment.php' class='btn btn-primary mr-3 d-none d-lg-block'>Appointment</a>";
                    echo "<a href='logout.php' class='btn btn-primary mr-3 d-none d-lg-block'>Logout</a>";
                }
                else
                {
                    echo "<a href='login.php' class='btn btn-primary mr-3 d-none d-lg-block'>User Login</a>";
                    echo "<a href='../lawyer/login.php' class='btn btn-primary mr-3 d-none d-lg-block'>Lawyer Login</a>";
                }
            ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->