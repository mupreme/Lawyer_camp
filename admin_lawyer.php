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
			header("Location:admin_lawyer.php");
		}
		if(isset($_GET['unblock_id'])){
			
			$id = $_GET['unblock_id'];
			//echo $id;exit;
			
			$sql = "UPDATE `user` SET `status`='Active' WHERE u_id='$id'";
			//echo $sql;
			$conn->query($sql);
			header("Location:admin_lawyer.php");
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
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" type="text/css" href="signin.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
			<title></title>
			<style>
        @media (min-width:756px) {
            .navtoggle {
                display: none;
            }

            .logoutbtn {
                display: block;
            }
        }

        @media (max-width:756px) {
            .navtoggle {
                display: block;
            }

            .logoutbtn {
                display: none;
            }
        }
    </style>
		</head>
		<body>
			<header class="customnav">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-expand-lg ">
								<a class="navbar-brand cus-a" href="#">CAMP </a>
								
								
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto ">
										<li class="active">
											<a class="nav-link cus-a" href="#"> <span class="sr-only">(current)</span></a>
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
							<!--admin_user page-->
							<a href="admin_lawyer.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-gavel"></i>&nbsp;lawyers</a><!--admin_lawyer page-->
							<a href="admin_user.php" class="list-group-item list-group-item-action bg-light"><i class="fa fa-user"></i>&nbsp;Users</a><!--admin_user page-->
							<a href=" " class="list-group-item list-group-item-action bg-light"><i class="fa fa-envelope-open"></i>&nbsp;Feedback</a><!--admin_user page-->
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
			
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">
                <h4 class="text-center alert alert-secondary">REGISTERED LAWYER</h4>
               
                <br>
                <table class="table my-3" width="100%" id="student_table">
                    <thead>
                        <tr>
                            <th>No.</th>
													<th>First name</th>
													<th>Last name</th>
													<th>Email</th>
													<th>Contact Number</th>
													<th>University / College</th>
													<th>Degree</th>
													<th>Practise Length</th>
													<th>Speciality</th>
													<th>Detailsx</th>
													<th>Action</th>
													<th>block lawyer</th>
                        </tr>
                    </thead>
                    <?php
												include_once 'db_con/dbCon.php';
												$conn = connect();
												$result = mysqli_query($conn,"SELECT * FROM user INNER JOIN lawyer on user.u_id=lawyer.lawyer_id");
												$counter = 0;
												while($row = mysqli_fetch_array($result)) {
												?>
												<tbody id="myTable">
													<tr>
														<td><?php echo ++$counter ;?></td>
														
														<td><?php echo $row["first_Name"]; ?></td>
														<td><?php echo $row["last_Name"]; ?></td>
														<td><?php echo $row["email"]; ?></td>
														<td>+25<?php echo $row["contact_Number"]; ?></td>
														
														<td><?php echo $row["university_College"]; ?></td>
														<td><?php echo $row["degree"]; ?></td>
														
														<td><?php echo $row["practise_Length"]; ?></td>
														
														<td><?php echo $row["speciality"]; ?></td>
														<td><?php echo $row["case_handle"]; ?></td>
														<?php if ($row['status']=='Active'){ ?>
															<td>
																Active
															</td>
															<?php }
															else{?>
															<td>
																<a class="btn btn-sm btn-primary" href="approve_lawyer.php?unblock_id=<?=$row['u_id']?>"><i class="fas fa-hourglass"></i>&nbsp;Pending</a>


															</td>
															

														<?php }?>
														<td><a class="btn btn-sm btn-danger" href="admin_lawyer.php?block_id=<?=$row['u_id']?>"><i class="fa fa-ban"></i>&nbsp; Block</a>
															
															
														</td>
													</tr>
													<?php
													}
												?>
                </table>
               
            </main>
            </main>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#lawyer').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "all"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Lawyer",
                }
            });
        });
    </script>
					
					
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
					<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#student_table').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "all"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search lawyer",
                }
            });
        });
    </script>
					</body>
					</html>
					<?php
					
					}else 
					header('location:login.php?deactivate');
					?>																	