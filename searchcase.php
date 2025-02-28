
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
		<?php
	session_start();
	
	include("db_con/dbCon.php");
	
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
    <title>Freelance Attorney Group System</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
		
		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title></title>
		<style >
			.customnav{box-sizing:border-box;
			}
			.checkbtn{
				font-size: 30px;
				color:white;
				float:right;
				line-height: 80px;
				margin-right: 40px;
				cursor: pointer;
				display: none;
			}
			#check{
				display:none;
			}
			@media(max-width: 952px){
				.customnav{
					font-size: 16px;
					padding-left: 50px;

				}
			}
			.customnav
		</style>
	</head>
	<body>
		<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							
							<a class="navbar-brand cus-a" href="index.php">Freelance Attorney  </a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
									</li>
									
									<li class="">
										<a class="nav-link cus-a" href="cases.php">Cases</a>
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
							<input type="checkbox" id="check">
							<label class="font-weight-bold" for="check"class="checkbtn">
								<i class="fas fa-bars"></i>
							</label>
						</nav>
					</div>
				</div>
			</div>
		</header>
			
		<body>
				
				
			<section class="lawyerscard">
				<div class="container">
					<form method="post" novalidate="novalidate" >
						
						<div class="row">
							
							<div class="col-md-3">
								<div class="form-group">
									<label class="font-weight-bold" for="experience">Category</label>
									<input type="text" name="experience" class="form-control">
										
								</div>
							
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<button id="button" type="submit" class="btn btn-mg btn-primary" name="submit" value="submit" ><i class="fa fa-search"></i>&nbsp; Search case</button>
							</div>	
						</div>
					</form>
					<hr/>
					<div class="row " >
						
						<?php
							include_once 'db_con/dbCon.php';
							$conn = connect();
							if (isset($_POST['submit'])){
								$category=$_POST['category'];
								
								
								$result = mysqli_query($conn,"SELECT * FROM cases WHERE case_id=cases.case_id ");
								
								while($row = mysqli_fetch_array($result)) {
									
								?>
								<div class="col-md-3">
									<div class="card" style="width: 15rem;">
										<img src="images/ff.png" class="card-img-top cusimg img-fluid" alt="img">
										<div class="card-body">
											<h5 class="card-title"><?php echo $row["Category"]; ?> </h5> <!--lawyers name dynamic-->
											<h6 class="card-title"><?php echo $row["description"]; ?></h6> <!--lawyers practice speciality dynamic-->
											  <!--lawyers practice time dynamic-->
											
											<a class="btn btn-sm btn-info" ><i class="fa fa-user"></i>&nbsp; Buy</a>
										</div>
									</div>
								</div>
								<?php
								}}
						?>
					</div>
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
		</body>
	</html>				
	