<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		$conn = connect();
		if(isset($_GET['block_id'])){
			
			$id = $_GET['block_id'];
			//echo $id;exit;
			
			$sql = "UPDATE `user` SET `status`='Block' WHERE u_id='$id'";
			//echo $sql;
			$conn->query($sql);
			header("Location:admin_user.php");
		}
		if(isset($_GET['unblock_id'])){
			
			$id = $_GET['unblock_id'];
			//echo $id;exit;
			
			$sql = "UPDATE `user` SET `status`='Active' WHERE u_id='$id'";
			//echo $sql;
			$conn->query($sql);
			header("Location:admin_user.php");
		}
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
								<a class="navbar-brand cus-a" href="#">Freelance Attorney </a>
								
								
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto ">
										<li class="active">
											<a class="nav-link cus-a" href="#">Home <span class="sr-only">(current)</span></a>
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
						
						<div class="list-group list-group-flush">
							<a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-home"></i>&nbsp;Dashboard</a><!--this page-->
							<a href="case_admin.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-box"></i>&nbsp;cases</a><!--admin_user page-->
							<a href="admin_lawyer.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-gavel"></i>&nbsp;lawyers</a><!--admin_lawyer page-->
							<a href="admin_user.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user"></i>&nbsp;Users</a><!--admin_user page-->
							<a href=" " class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope-open"></i>&nbsp;Feedback</a><!--admin_user page-->
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					
					<section class="bookingrqst">
						<div class="container">
							<div class="span7">   
								<div class="widget stacked widget-table action-table">
									
									<div class="widget-header">
										<i class="icon-th-list"></i>
										<h3>Cases</h3><br>
									</div> <!-- /widget-header -->
									
									<div class="widget-content">
										
										<table class="table table-striped table-bordered table-responsive">
											<thead>
												<tr>
													<th>No.</th>
													<th>Clientname</th>
											
													<th>Contact</th>
													<th>Case </th>
													<th>Adresse</th>
											
													<th>District</th>
													<th>Cell</th>
													<th>Action</th>
												</tr>
											</thead>
											<?php
												include_once 'db_con/dbCon.php';
											
												$conn = connect();
												$result = mysqli_query($conn,"SELECT * FROM cases INNER JOIN client on cases.client_id=client.client_id");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														<td><?php echo ++$counter ;?></td>
														<td><?php echo $row["fname"]; ?> <?php echo $row["lname"]; ?></td>
														<td>+250<?php echo $row["contact"]; ?></td>
														<td><?php echo $row["description"]; ?></td>
														<td><?php echo $row["full_address"]; ?></td>
														<td><?php echo $row["city"]; ?></td>
														<td><?php echo $row["zip_code"]; ?></td>
														
															<td>
																<a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash"></i>&nbsp; Delete</a>
															</td>

															
														<?php }?>
													</tr>
													<?php
													}
												?>
											</table>
											
										</div> <!-- /widget-content -->
										
									</div> <!-- /widget-content -->
									
								</div> <!-- /widget -->
							</div>
						</div>
					</section>
					
				</div>
				<!-- /#wrapper -->
				
				
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
	