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
			<section class="lawyerscard">
				<div class="container">
					<form method="post" novalidate="novalidate" >
						
						<div class="row">
							
							<div class="col-md-4">
								<div class="form-group">
									<label class="font-weight-bold" for="experience">Experience</label>
									<select name="experience" class="form-control">
										<option value="" selected>Choose...</option>
										<option value="1-5 years">1-5 years</option>
										<option value="6-10 years">6-10 years</option>
										<option value="11-15 years">11-15 years</option>
										<option value="16-20 years">16-20 years</option>
										<option value="Most Senior">Most Senior</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group ">
									<label class="font-weight-bold" for="speciality">Category</label>
									<select name="speciality" class="form-control">
										<option value="" selected>Choose...</option>
										<option value="Criminal law">Criminal law</option>
										<option value="Civil law">Civil law</option>
										<option value="Writ Jurisdiction">Writ Jurisdiction</option>
										<option value="Company law">Company law</option>
										<option value="Contract law">Contract law</option>
										<option value="Commercial law">Commercial law</option>
										<option value="Construction law">Construction law</option>
										<option value="IT law">IT law</option>
										<option value="Family law">Family law</option>
										<option value="Religious law">Religious law</option>
										<option value="Investment law">Investment law</option>
										<option value="Labour law">Labour law</option>
										<option value="Property law">Property law</option>
										<option value="Taxation law">Taxation law</option>
										
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<label class="font-weight-bold" for="location">Country</label>
								<select id="passing_year" name="full_address" class="form-control">
										<option value=" " selected>Choose...</option>
										$HTMLCode .= "<option value=\"US\">United States of America</option>".Chr(13);
  $HTMLCode .= "<option value=\"AF\">Afghanistan</option>".Chr(13);
  $HTMLCode .= "<option value=\"AL\">Albania</option>".Chr(13);
  $HTMLCode .= "<option value=\"DZ\">Algeria</option>".Chr(13);
  $HTMLCode .= "<option value=\"AS\">American Samoa</option>".Chr(13);
  $HTMLCode .= "<option value=\"AD\">Andorra</option>".Chr(13);
  $HTMLCode .= "<option value=\"AG\">Angola</option>".Chr(13);
  $HTMLCode .= "<option value=\"AI\">Anguilla</option>".Chr(13);
  $HTMLCode .= "<option value=\"AG\">Antigua &amp; Barbuda</option>".Chr(13);
  $HTMLCode .= "<option value=\"AR\">Argentina</option>".Chr(13);
  $HTMLCode .= "<option value=\"AA\">Armenia</option>".Chr(13);
  $HTMLCode .= "<option value=\"AW\">Aruba</option>".Chr(13);
  $HTMLCode .= "<option value=\"AU\">Australia</option>".Chr(13);
  $HTMLCode .= "<option value=\"AT\">Austria</option>".Chr(13);
  $HTMLCode .= "<option value=\"AZ\">Azerbaijan</option>".Chr(13);
  $HTMLCode .= "<option value=\"BS\">Bahamas</option>".Chr(13);
  $HTMLCode .= "<option value=\"BH\">Bahrain</option>".Chr(13);
  $HTMLCode .= "<option value=\"BD\">Bangladesh</option>".Chr(13);
  $HTMLCode .= "<option value=\"BB\">Barbados</option>".Chr(13);
  $HTMLCode .= "<option value=\"BY\">Belarus</option>".Chr(13);
  $HTMLCode .= "<option value=\"BE\">Belgium</option>".Chr(13);
  $HTMLCode .= "<option value=\"BZ\">Belize</option>".Chr(13);
  $HTMLCode .= "<option value=\"BJ\">Benin</option>".Chr(13);
  $HTMLCode .= "<option value=\"BM\">Bermuda</option>".Chr(13);
  $HTMLCode .= "<option value=\"BT\">Bhutan</option>".Chr(13);
  $HTMLCode .= "<option value=\"BO\">Bolivia</option>".Chr(13);
  $HTMLCode .= "<option value=\"BL\">Bonaire</option>".Chr(13);
  $HTMLCode .= "<option value=\"BA\">Bosnia &amp; Herzegovina</option>".Chr(13);
  $HTMLCode .= "<option value=\"BW\">Botswana</option>".Chr(13);
  $HTMLCode .= "<option value=\"BR\">Brazil</option>".Chr(13);
  $HTMLCode .= "<option value=\"BC\">British Indian Ocean Ter</option>".Chr(13);
  $HTMLCode .= "<option value=\"BN\">Brunei</option>".Chr(13);
  $HTMLCode .= "<option value=\"BG\">Bulgaria</option>".Chr(13);
  $HTMLCode .= "<option value=\"BF\">Burkina Faso</option>".Chr(13);
  $HTMLCode .= "<option value=\"BI\">Burundi</option>".Chr(13);
  $HTMLCode .= "<option value=\"KH\">Cambodia</option>".Chr(13);
  $HTMLCode .= "<option value=\"CM\">Cameroon</option>".Chr(13);
  $HTMLCode .= "<option value=\"CA\">Canada</option>".Chr(13);
  $HTMLCode .= "<option value=\"IC\">Canary Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"CV\">Cape Verde</option>".Chr(13);
  $HTMLCode .= "<option value=\"KY\">Cayman Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"CF\">Central African Republic</option>".Chr(13);
  $HTMLCode .= "<option value=\"TD\">Chad</option>".Chr(13);
  $HTMLCode .= "<option value=\"CD\">Channel Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"CL\">Chile</option>".Chr(13);
  $HTMLCode .= "<option value=\"CN\">China</option>".Chr(13);
  $HTMLCode .= "<option value=\"CI\">Christmas Island</option>".Chr(13);
  $HTMLCode .= "<option value=\"CS\">Cocos Island</option>".Chr(13);
  $HTMLCode .= "<option value=\"CO\">Colombia</option>".Chr(13);
  $HTMLCode .= "<option value=\"CC\">Comoros</option>".Chr(13);
  $HTMLCode .= "<option value=\"CG\">Congo</option>".Chr(13);
  $HTMLCode .= "<option value=\"CK\">Cook Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"CR\">Costa Rica</option>".Chr(13);
  $HTMLCode .= "<option value=\"CT\">Cote D'Ivoire</option>".Chr(13);
  $HTMLCode .= "<option value=\"HR\">Croatia</option>".Chr(13);
  $HTMLCode .= "<option value=\"CU\">Cuba</option>".Chr(13);
  $HTMLCode .= "<option value=\"CB\">Curacao</option>".Chr(13);
  $HTMLCode .= "<option value=\"CY\">Cyprus</option>".Chr(13);
  $HTMLCode .= "<option value=\"CZ\">Czech Republic</option>".Chr(13);
  $HTMLCode .= "<option value=\"DK\">Denmark</option>".Chr(13);
  $HTMLCode .= "<option value=\"DJ\">Djibouti</option>".Chr(13);
  $HTMLCode .= "<option value=\"DM\">Dominica</option>".Chr(13);
  $HTMLCode .= "<option value=\"DO\">Dominican Republic</option>".Chr(13);
  $HTMLCode .= "<option value=\"TM\">East Timor</option>".Chr(13);
  $HTMLCode .= "<option value=\"EC\">Ecuador</option>".Chr(13);
  $HTMLCode .= "<option value=\"EG\">Egypt</option>".Chr(13);
  $HTMLCode .= "<option value=\"SV\">El Salvador</option>".Chr(13);
  $HTMLCode .= "<option value=\"GQ\">Equatorial Guinea</option>".Chr(13);
  $HTMLCode .= "<option value=\"ER\">Eritrea</option>".Chr(13);
  $HTMLCode .= "<option value=\"EE\">Estonia</option>".Chr(13);
  $HTMLCode .= "<option value=\"ET\">Ethiopia</option>".Chr(13);
  $HTMLCode .= "<option value=\"FA\">Falkland Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"FO\">Faroe Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"FJ\">Fiji</option>".Chr(13);
  $HTMLCode .= "<option value=\"FI\">Finland</option>".Chr(13);
  $HTMLCode .= "<option value=\"FR\">France</option>".Chr(13);
  $HTMLCode .= "<option value=\"GF\">French Guiana</option>".Chr(13);
  $HTMLCode .= "<option value=\"PF\">French Polynesia</option>".Chr(13);
  $HTMLCode .= "<option value=\"FS\">French Southern Ter</option>".Chr(13);
  $HTMLCode .= "<option value=\"GA\">Gabon</option>".Chr(13);
  $HTMLCode .= "<option value=\"GM\">Gambia</option>".Chr(13);
  $HTMLCode .= "<option value=\"GE\">Georgia</option>".Chr(13);
  $HTMLCode .= "<option value=\"DE\">Germany</option>".Chr(13);
  $HTMLCode .= "<option value=\"GH\">Ghana</option>".Chr(13);
  $HTMLCode .= "<option value=\"GI\">Gibraltar</option>".Chr(13);
  $HTMLCode .= "<option value=\"GB\">Great Britain</option>".Chr(13);
  $HTMLCode .= "<option value=\"GR\">Greece</option>".Chr(13);
  $HTMLCode .= "<option value=\"GL\">Greenland</option>".Chr(13);
  $HTMLCode .= "<option value=\"GD\">Grenada</option>".Chr(13);
  $HTMLCode .= "<option value=\"GP\">Guadeloupe</option>".Chr(13);
  $HTMLCode .= "<option value=\"GU\">Guam</option>".Chr(13);
  $HTMLCode .= "<option value=\"GT\">Guatemala</option>".Chr(13);
  $HTMLCode .= "<option value=\"GN\">Guinea</option>".Chr(13);
  $HTMLCode .= "<option value=\"GY\">Guyana</option>".Chr(13);
  $HTMLCode .= "<option value=\"HT\">Haiti</option>".Chr(13);
  $HTMLCode .= "<option value=\"HW\">Hawaii</option>".Chr(13);
  $HTMLCode .= "<option value=\"HN\">Honduras</option>".Chr(13);
  $HTMLCode .= "<option value=\"HK\">Hong Kong</option>".Chr(13);
  $HTMLCode .= "<option value=\"HU\">Hungary</option>".Chr(13);
  $HTMLCode .= "<option value=\"IS\">Iceland</option>".Chr(13);
  $HTMLCode .= "<option value=\"IN\">India</option>".Chr(13);
  $HTMLCode .= "<option value=\"ID\">Indonesia</option>".Chr(13);
  $HTMLCode .= "<option value=\"IA\">Iran</option>".Chr(13);
  $HTMLCode .= "<option value=\"IQ\">Iraq</option>".Chr(13);
  $HTMLCode .= "<option value=\"IR\">Ireland</option>".Chr(13);
  $HTMLCode .= "<option value=\"IM\">Isle of Man</option>".Chr(13);
  $HTMLCode .= "<option value=\"IL\">Israel</option>".Chr(13);
  $HTMLCode .= "<option value=\"IT\">Italy</option>".Chr(13);
  $HTMLCode .= "<option value=\"JM\">Jamaica</option>".Chr(13);
  $HTMLCode .= "<option value=\"JP\">Japan</option>".Chr(13);
  $HTMLCode .= "<option value=\"JO\">Jordan</option>".Chr(13);
  $HTMLCode .= "<option value=\"KZ\">Kazakhstan</option>".Chr(13);
  $HTMLCode .= "<option value=\"KE\">Kenya</option>".Chr(13);
  $HTMLCode .= "<option value=\"KI\">Kiribati</option>".Chr(13);
  $HTMLCode .= "<option value=\"NK\">Korea North</option>".Chr(13);
  $HTMLCode .= "<option value=\"KS\">Korea South</option>".Chr(13);
  $HTMLCode .= "<option value=\"KW\">Kuwait</option>".Chr(13);
  $HTMLCode .= "<option value=\"KG\">Kyrgyzstan</option>".Chr(13);
  $HTMLCode .= "<option value=\"LA\">Laos</option>".Chr(13);
  $HTMLCode .= "<option value=\"LV\">Latvia</option>".Chr(13);
  $HTMLCode .= "<option value=\"LB\">Lebanon</option>".Chr(13);
  $HTMLCode .= "<option value=\"LS\">Lesotho</option>".Chr(13);
  $HTMLCode .= "<option value=\"LR\">Liberia</option>".Chr(13);
  $HTMLCode .= "<option value=\"LY\">Libya</option>".Chr(13);
  $HTMLCode .= "<option value=\"LI\">Liechtenstein</option>".Chr(13);
  $HTMLCode .= "<option value=\"LT\">Lithuania</option>".Chr(13);
  $HTMLCode .= "<option value=\"LU\">Luxembourg</option>".Chr(13);
  $HTMLCode .= "<option value=\"MO\">Macau</option>".Chr(13);
  $HTMLCode .= "<option value=\"MK\">Macedonia</option>".Chr(13);
  $HTMLCode .= "<option value=\"MG\">Madagascar</option>".Chr(13);
  $HTMLCode .= "<option value=\"MY\">Malaysia</option>".Chr(13);
  $HTMLCode .= "<option value=\"MW\">Malawi</option>".Chr(13);
  $HTMLCode .= "<option value=\"MV\">Maldives</option>".Chr(13);
  $HTMLCode .= "<option value=\"ML\">Mali</option>".Chr(13);
  $HTMLCode .= "<option value=\"MT\">Malta</option>".Chr(13);
  $HTMLCode .= "<option value=\"MH\">Marshall Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"MQ\">Martinique</option>".Chr(13);
  $HTMLCode .= "<option value=\"MR\">Mauritania</option>".Chr(13);
  $HTMLCode .= "<option value=\"MU\">Mauritius</option>".Chr(13);
  $HTMLCode .= "<option value=\"ME\">Mayotte</option>".Chr(13);
  $HTMLCode .= "<option value=\"MX\">Mexico</option>".Chr(13);
  $HTMLCode .= "<option value=\"MI\">Midway Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"MD\">Moldova</option>".Chr(13);
  $HTMLCode .= "<option value=\"MC\">Monaco</option>".Chr(13);
  $HTMLCode .= "<option value=\"MN\">Mongolia</option>".Chr(13);
  $HTMLCode .= "<option value=\"MS\">Montserrat</option>".Chr(13);
  $HTMLCode .= "<option value=\"MA\">Morocco</option>".Chr(13);
  $HTMLCode .= "<option value=\"MZ\">Mozambique</option>".Chr(13);
  $HTMLCode .= "<option value=\"MM\">Myanmar</option>".Chr(13);
  $HTMLCode .= "<option value=\"NA\">Nambia</option>".Chr(13);
  $HTMLCode .= "<option value=\"NU\">Nauru</option>".Chr(13);
  $HTMLCode .= "<option value=\"NP\">Nepal</option>".Chr(13);
  $HTMLCode .= "<option value=\"AN\">Netherland Antilles</option>".Chr(13);
  $HTMLCode .= "<option value=\"NL\">Netherlands (Holland, Europe)</option>".Chr(13);
  $HTMLCode .= "<option value=\"NV\">Nevis</option>".Chr(13);
  $HTMLCode .= "<option value=\"NC\">New Caledonia</option>".Chr(13);
  $HTMLCode .= "<option value=\"NZ\">New Zealand</option>".Chr(13);
  $HTMLCode .= "<option value=\"NI\">Nicaragua</option>".Chr(13);
  $HTMLCode .= "<option value=\"NE\">Niger</option>".Chr(13);
  $HTMLCode .= "<option value=\"NG\">Nigeria</option>".Chr(13);
  $HTMLCode .= "<option value=\"NW\">Niue</option>".Chr(13);
  $HTMLCode .= "<option value=\"NF\">Norfolk Island</option>".Chr(13);
  $HTMLCode .= "<option value=\"NO\">Norway</option>".Chr(13);
  $HTMLCode .= "<option value=\"OM\">Oman</option>".Chr(13);
  $HTMLCode .= "<option value=\"PK\">Pakistan</option>".Chr(13);
  $HTMLCode .= "<option value=\"PW\">Palau Island</option>".Chr(13);
  $HTMLCode .= "<option value=\"PS\">Palestine</option>".Chr(13);
  $HTMLCode .= "<option value=\"PA\">Panama</option>".Chr(13);
  $HTMLCode .= "<option value=\"PG\">Papua New Guinea</option>".Chr(13);
  $HTMLCode .= "<option value=\"PY\">Paraguay</option>".Chr(13);
  $HTMLCode .= "<option value=\"PE\">Peru</option>".Chr(13);
  $HTMLCode .= "<option value=\"PH\">Philippines</option>".Chr(13);
  $HTMLCode .= "<option value=\"PO\">Pitcairn Island</option>".Chr(13);
  $HTMLCode .= "<option value=\"PL\">Poland</option>".Chr(13);
  $HTMLCode .= "<option value=\"PT\">Portugal</option>".Chr(13);
  $HTMLCode .= "<option value=\"PR\">Puerto Rico</option>".Chr(13);
  $HTMLCode .= "<option value=\"QA\">Qatar</option>".Chr(13);
  $HTMLCode .= "<option value=\"ME\">Republic of Montenegro</option>".Chr(13);
  $HTMLCode .= "<option value=\"RS\">Republic of Serbia</option>".Chr(13);
  $HTMLCode .= "<option value=\"RE\">Reunion</option>".Chr(13);
  $HTMLCode .= "<option value=\"RO\">Romania</option>".Chr(13);
  $HTMLCode .= "<option value=\"RU\">Russia</option>".Chr(13);
  $HTMLCode .= "<option value=\"RW\">Rwanda</option>".Chr(13);
  $HTMLCode .= "<option value=\"NT\">St Barthelemy</option>".Chr(13);
  $HTMLCode .= "<option value=\"EU\">St Eustatius</option>".Chr(13);
  $HTMLCode .= "<option value=\"HE\">St Helena</option>".Chr(13);
  $HTMLCode .= "<option value=\"KN\">St Kitts-Nevis</option>".Chr(13);
  $HTMLCode .= "<option value=\"LC\">St Lucia</option>".Chr(13);
  $HTMLCode .= "<option value=\"MB\">St Maarten</option>".Chr(13);
  $HTMLCode .= "<option value=\"PM\">St Pierre &amp; Miquelon</option>".Chr(13);
  $HTMLCode .= "<option value=\"VC\">St Vincent &amp; Grenadines</option>".Chr(13);
  $HTMLCode .= "<option value=\"SP\">Saipan</option>".Chr(13);
  $HTMLCode .= "<option value=\"SO\">Samoa</option>".Chr(13);
  $HTMLCode .= "<option value=\"AS\">Samoa American</option>".Chr(13);
  $HTMLCode .= "<option value=\"SM\">San Marino</option>".Chr(13);
  $HTMLCode .= "<option value=\"ST\">Sao Tome &amp; Principe</option>".Chr(13);
  $HTMLCode .= "<option value=\"SA\">Saudi Arabia</option>".Chr(13);
  $HTMLCode .= "<option value=\"SN\">Senegal</option>".Chr(13);
  $HTMLCode .= "<option value=\"SC\">Seychelles</option>".Chr(13);
  $HTMLCode .= "<option value=\"SL\">Sierra Leone</option>".Chr(13);
  $HTMLCode .= "<option value=\"SG\">Singapore</option>".Chr(13);
  $HTMLCode .= "<option value=\"SK\">Slovakia</option>".Chr(13);
  $HTMLCode .= "<option value=\"SI\">Slovenia</option>".Chr(13);
  $HTMLCode .= "<option value=\"SB\">Solomon Islands</option>".Chr(13);
  $HTMLCode .= "<option value=\"OI\">Somalia</option>".Chr(13);
  $HTMLCode .= "<option value=\"ZA\">South Africa</option>".Chr(13);
  $HTMLCode .= "<option value=\"ES\">Spain</option>".Chr(13);
  $HTMLCode .= "<option value=\"LK\">Sri Lanka</option>".Chr(13);
  $HTMLCode .= "<option value=\"SD\">Sudan</option>".Chr(13);
  $HTMLCode .= "<option value=\"SR\">Suriname</option>".Chr(13);
  $HTMLCode .= "<option value=\"SZ\">Swaziland</option>".Chr(13);
  $HTMLCode .= "<option value=\"SE\">Sweden</option>".Chr(13);
  $HTMLCode .= "<option value=\"CH\">Switzerland</option>".Chr(13);
  $HTMLCode .= "<option value=\"SY\">Syria</option>".Chr(13);
  $HTMLCode .= "<option value=\"TA\">Tahiti</option>".Chr(13);
  $HTMLCode .= "<option value=\"TW\">Taiwan</option>".Chr(13);
  $HTMLCode .= "<option value=\"TJ\">Tajikistan</option>".Chr(13);
  $HTMLCode .= "<option value=\"TZ\">Tanzania</option>".Chr(13);
  $HTMLCode .= "<option value=\"TH\">Thailand</option>".Chr(13);
  $HTMLCode .= "<option value=\"TG\">Togo</option>".Chr(13);
  $HTMLCode .= "<option value=\"TK\">Tokelau</option>".Chr(13);
  $HTMLCode .= "<option value=\"TO\">Tonga</option>".Chr(13);
  $HTMLCode .= "<option value=\"TT\">Trinidad &amp; Tobago</option>".Chr(13);
  $HTMLCode .= "<option value=\"TN\">Tunisia</option>".Chr(13);
  $HTMLCode .= "<option value=\"TR\">Turkey</option>".Chr(13);
  $HTMLCode .= "<option value=\"TU\">Turkmenistan</option>".Chr(13);
  $HTMLCode .= "<option value=\"TC\">Turks &amp; Caicos Is</option>".Chr(13);
  $HTMLCode .= "<option value=\"TV\">Tuvalu</option>".Chr(13);
  $HTMLCode .= "<option value=\"UG\">Uganda</option>".Chr(13);
  $HTMLCode .= "<option value=\"UA\">Ukraine</option>".Chr(13);
  $HTMLCode .= "<option value=\"AE\">United Arab Emirates</option>".Chr(13);
  $HTMLCode .= "<option value=\"GB\">United Kingdom</option>".Chr(13);
  $HTMLCode .= "<option value=\"UY\">Uruguay</option>".Chr(13);
  $HTMLCode .= "<option value=\"UZ\">Uzbekistan</option>".Chr(13);
  $HTMLCode .= "<option value=\"VU\">Vanuatu</option>".Chr(13);
  $HTMLCode .= "<option value=\"VS\">Vatican City State</option>".Chr(13);
  $HTMLCode .= "<option value=\"VE\">Venezuela</option>".Chr(13);
  $HTMLCode .= "<option value=\"VN\">Vietnam</option>".Chr(13);
  $HTMLCode .= "<option value=\"VB\">Virgin Islands (Brit)</option>".Chr(13);
  $HTMLCode .= "<option value=\"VA\">Virgin Islands (USA)</option>".Chr(13);
  $HTMLCode .= "<option value=\"WK\">Wake Island</option>".Chr(13);
  $HTMLCode .= "<option value=\"WF\">Wallis &amp; Futana Is</option>".Chr(13);
  $HTMLCode .= "<option value=\"YE\">Yemen</option>".Chr(13);
  $HTMLCode .= "<option value=\"ZR\">Zaire</option>".Chr(13);
  $HTMLCode .= "<option value=\"ZM\">Zambia</option>".Chr(13);
  $HTMLCode .= "<option value=\"ZW\">Zimbabwe</option>
								
									</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<button id="button" type="submit" class="btn btn-mg btn-primary" name="submit" value="submit" style="float:right"><i class="fa fa-search"></i>&nbsp; Search Information</button>
							</div>	
						</div>
					</form>
					<hr/>
					<div class="row " >
						
						<?php
							include_once 'db_con/dbCon.php';
							$conn = connect();
							if (isset($_POST['submit'])){
								$experience=$_POST['experience'];
								$speciality=$_POST['speciality'];
								$location=$_POST['location'];
								
								$result = mysqli_query($conn,"SELECT * FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id 
								AND user.status='Active'
								OR practise_Length='$experience'
								OR speciality='$speciality'
								OR city='$location'");
								
								while($row = mysqli_fetch_array($result)) {
									
								?>
								<div class="col-md-4">
									<div class="card" style="width: 18rem;">
										<img src="images/upload/<?php echo $row["image"]; ?>" class="card-img-top cusimg img-fluid" alt="img">
										<div class="card-body">
											<h5 class="card-title"><?php echo $row["first_Name"]; ?> <?php echo $row["last_Name"]; ?></h5> <!--lawyers name dynamic-->
											<h6 class="card-title"><?php echo $row["speciality"]; ?></h6> <!--lawyers practice speciality dynamic-->
											<h6 class="card-title"><span><?php echo $row["practise_Length"]; ?></span></h6> <!--lawyers practice time dynamic-->
											
											<a class="btn btn-sm btn-info" href="single.php?u_id=<?php echo $row["u_id"]; ?>"><i class="fa fa-street-view"></i>&nbsp; View Full Profile</a>
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
	<?php
		
	}else 
	header('location:login.php?deactivate');
?>
