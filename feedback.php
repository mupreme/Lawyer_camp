<header>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
	
	<script>
		function MySucessFn(){
			swal({
				title: "Your feedback Sent Sucessfully",
				text: "",
				type: "success",
				
				showConfirmButton: true,
			},
			window.load = function(){
				window.location='http://localhost/lawyer/user_dashboard.php';
			});
		}
	</script>
</header>
<?php
	include_once 'db_con/dbCon.php';
	
	$okFlag = TRUE;
	if($okFlag){
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$contact = $_POST['contact'];
		$comment = $_POST['comment'];
		 /* echo $date ;
		echo $description;
		echo $client_id ;
		echo $lawyer_id;exit;
		 */
		$conn = connect();
		//Check duplicate value
		
		// sql query for inserting data into database
		$sql = "INSERT INTO `feedback`(fname, lname, contact, comment) VALUES('$fname','$lname','$contact','$comment')";
		//echo $sql;exit;
		$result=mysqli_query($conn, $sql) or die(mysqli_error ($conn));
		echo "<script type= 'text/javascript'>MySucessFn();</script>";
		
	}
	
?>