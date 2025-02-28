<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		
	?>
	<!doctype html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Bootstrap CSS -->
			<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link rel="stylesheet" href="css/all.css">
			<link rel="stylesheet" href="css/simple-sidebar.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/media.css">
			<title></title>
		</head>
		<body>
			<header class="customnav">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-expand-lg ">
								<a class="navbar-brand cus-a" href="index.php">Freelance Attorney</a>
								
								
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto ">
										<li class="">
											<a class="nav-link cus-a" href="#">Full Name: <?php echo $_SESSION['first_Name'];?> <?php echo $_SESSION['last_Name'];?></a>
											</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Log Out</a>
										</li>
										
									</ul>
									
								</div>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<body>
				
				<div class="d-flex" id="wrapper">
					
					<!-- Sidebar -->
					<div class="bg-light border-right" id="sidebar-wrapper">
						<div class="sidebar-heading">My Profile</div>
						<div class="list-group list-group-flush">
							<a href="user_dashboard.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Dashboard</a>
							<a href="lawyer.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-gavel" aria-hidden="true"></i>&nbsp;Lawyers</a><!--this page-->
							<a href="user_booking.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;My booking</a>
							<a href="case.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;Case</a><!--booking page-->
							<a href="user_profile.php" class="list-group-item list-group-item-action bg-light">
								<i class="fa fa-user" aria-hidden="true"></i>&nbsp;Edit Profile</a><!--user_profile page-->
							<!--booking page-->
							<a href="update_password.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>&nbsp;Update Password</a><!--booking page-->

						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<!-- Page Content -->
					<div id="page-content-wrapper">
						<?php if(isset($_GET['done'])){
							echo "<div class='alert alert-danger alert-dismissible fade show'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Welcome!</strong> You are login as a user.
							</div>";
						}?>
						<div class="container-fluid">
							<section>
			<div class="container">
				<div class="row">
					<?php
						
						include_once 'db_con/dbCon.php';
						$conn = connect();
						
						$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id AND user.status='Active' AND user.u_id='" . $_GET['u_id'] . "'");
						
						while($row = mysqli_fetch_array($result)) {
						?>
						<div class="col-md-3">
							<div class="sideprofile">
								<img src="images/upload/<?php echo $row["image"]; ?>" class="img-fluid profile_img" alt="profile picture">
								<h2><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h2>
								<h4><?php echo $row["speciality"]; ?></h4>
								<hr>
							</div>
						</div>
						<div class="col-md-9">
							<div class="mainprofile">
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Contact number :</b></label>
									</div>
									<div class="col-md-8">
										<p>+25<?php echo $row["contact_Number"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Email :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["email"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Education :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["university_College"]; ?></p>
										<p><?php echo $row["degree"]; ?></p>
										<p><?php echo $row["passing_year"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Practising location :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["full_address"]; ?></p>
										<p><?php echo $row["city"]; ?></p>
										<p><?php echo $row["zip_code"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Practising length :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["practise_Length"]; ?></p>
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Type of case handles:</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["case_handle"]; ?></p>
										
									</div>
								</div>  
								<form action="save_booking.php" method="post">
									<div class="row">
										<div class="col-md-4">
											<b>Book for appointment</b>
										</div>
										<input type="hidden" name="lawyer_id"  value="<?php echo $row['u_id']; ?>">
										<input type="hidden" name="client_id"  value="<?php echo $_SESSION['client_id']; ?>">
                                    
										<div class="col-md-3">
											<input type="date"  name="date"  id="" cols="20" rows="4">
											<div>&nbsp;</div>
									
										
											<textarea name="description" id="" cols="20" rows="3" placeholder="write description of your Case here"></textarea>
										
										
											<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
												
												<input name="post" type="submit" class="btn btn-block btn-info" value="Request booking" />
												<?php }else{ ?>
												<h6><a href="login.php">To Request for lawyer booking plese login or registration first</a></h6>
											<?php }?> 
										</div>
									</div>
								</form>
						
								
							</div>
						</div>
						<?php
						}
					?>
				</div>
			</div>
		</section>
		
						</div>
					</div>
					<!-- /#page-content-wrapper -->
					
				</div>
				<!-- /#wrapper -->
				
				
				
			</body>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col">
							<h5>All rights reserved by BEZA 2024</h5>
						</div>
					</div>
				</div>
			</footer>
			<!-- Optional JavaScript -->
			<!-- jQuery -->
			
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/634d540cdaff0e1306d26ac1/1gfj10lir';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

		</body>

	</html>				
	<?php
		
	}else 
	header('location:login.php?deactivate');
?>