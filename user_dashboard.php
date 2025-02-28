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
							<!--booking page-->
							<a href="user_profile.php" class="list-group-item list-group-item-action bg-light">
								<i class="fa fa-user" aria-hidden="true"></i>&nbsp;Edit Profile</a><!--user_profile page-->
							<!--booking page-->
							<a href="update_password.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>&nbsp;Update Password</a><!--booking page-->

						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<!-- Page Content -->
					<div id="page-content-wrapper">
						<?php if(isset($_GET['ok'])){
							echo "<div class='alert alert-success alert-dismissible fade show'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Welcome !</strong> update your Profile.
							</div>";
						}?>
						<div class="container-fluid">
							<h1 class="mt-4">Welcome to your profile</h1>
							<h5>The system  is definitely something unique. Because you can consider this an open platform for all the lawyers. Different lawyers from different locations will be able to join this system by providing some information. This system can also be known as a freelancing platform for the lawyers. you can able to search your suitable lawyers & hire them for your individual case or other.</h5>
							
								<div>
							<h2 class="mt-4">Any comment</h2>
							<section class="editprofile">
						
						<?php
							$a=$_SESSION['client_id'];
							$conn = connect();
							
							$result = mysqli_query($conn,"SELECT * FROM user,client WHERE user.u_id=client.client_id AND user.status='Active' AND user.u_id='$a'");
							
							while($row = mysqli_fetch_array($result)) {
							?>
							<div class="container">
								<form class="cusform" action="feedback.php" method="post">
									<div class="form-row">
										<div class="form-group col-md-6">
											
											
											<input type="hidden" class="form-control" name="fname"  id="fname" value="<?php echo $row["first_Name"]; ?>">
										
										
											
											<input type="hidden" class="form-control" name="lname"  id="lname" value="<?php echo $row["last_Name"]; ?>">
										</div>
									</div>
									
									
										
										<input type="hidden" class="form-control" name="contact" id="contact" value="<?php echo $row["contact_number"]; ?>">
									</div>
									
									
									
									<div class="form-row">
										<div class="form-group col-md-20">
											
											<textarea type="text" class="form-control" name="comment" cols="40" rows="4" placeholder="write comment here"></textarea>
										</div>
										
									</div>
									<button type="submit" class="btn btn-primary">Send</button>
									
								</form>
							</div>
							<?php
							}
						?>
					</section>
					<!-- edit profile Content -->
						</div>

					
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
							<h5>@ MVPRIMV INC</h5>
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