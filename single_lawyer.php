<?php
	session_start();
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
							<a class="navbar-brand cus-a" href="#">Freelance Attorney </a>
							
							
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="single_lawyer.php">Lawyers</a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="cases.php">Case</a>
									</li>
									<?php if(isset($_SESSION['login']) && $_SESSION['login'] == TRUE){ ?>
										<li class="">
											<a class="nav-link cus-a" href="user_dashboard.php">Dashboard</a>
										</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Logout</a>
										</li>
										<?php }else{ ?>
										<li class="">
											<a class="nav-link cus-a" href="login.php">Login</a>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Register
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a><!--redirect lawyer register page-->
												<a class="dropdown-item" href="user_register.php">Register as a user</a><!--redirect user register page-->
											</div>
										</li>
									<?php }?> 
									
									
								</ul>
								
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		
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
										<p><?php echo $row["contact_Number"]; ?></p>
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
										<label class="font-weight-bold" for="email"><b>University/College :</b></label>
										
									</div>
									<div class="col-md-8">
										<p><?php echo $row["university_College"]; ?></p>
										
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Degree :</b></label>
										
									</div>
									<div class="col-md-8">
										<p><?php echo $row["degree"]; ?></p>
										
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Passing year :</b></label>
										
									</div>
									<div class="col-md-8">
										<p><?php echo $row["passing_year"]; ?></p>
										
									</div>
								</div>
								<div class="infogroup row">
									<div class="col-md-4">
										<label class="font-weight-bold" for="email"><b>Practising location :</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["full_address"];?></p>
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
										<label class="font-weight-bold" for="email"><b>categories of cases can handle:</b></label>
									</div>
									<div class="col-md-8">
										<p><?php echo $row["case_handle"]; ?></ol></p>
										
									</div>
								</div>  
								<br>
						<h6><a href="login.php">To Request for lawyer please login or registration first</a></h6>
								
							</div>
						</div>
						<?php
						}
					?>
				</div>
			</div>
		</section>
		
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