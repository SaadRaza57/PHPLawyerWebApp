<?php 
    include('connection.php');
    session_start();
    $doctorName = mysqli_fetch_array(mysqli_query($connection,"SELECT * FROM tbl_lawyer WHERE d_id=$_SESSION[username]"));
    
?>
<style>
    .header{
    background-color: #8e764c;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1039;
    height: 50px;
    box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
    }
</style>
<div class="header">
			<div class="header-left">
				<a href="" class="logo"> <span>Lawyer Panel</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">                        
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span><?php echo $doctorName['d_name'];;?></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="lawyer-profile.php">My Profile</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>