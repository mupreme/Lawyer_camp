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
		<title>Log In here</title>
<style>
  .has-error .help-block {
  color: green;
}
  </style>
	</head>
	<body>
		<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="index.php">CAMP  </a>
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
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section class="registerform">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mx-auto">
						<form  action="lawyer_registation.php"  method="post" enctype="multipart/form-data"  id="validateForm">
						<h2 class="font-weight-bold mb-4 text-center">Register</h2>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label class="font-weight-bold" for="fname">First Name</label>
									<input type="text" class="form-control" id="first_Name" name="first_Name" placeholder="first name">
								</div>
								<div class="form-group col-md-6">
									<label class="font-weight-bold" for="lname">Last Name</label>
									<input type="text" class="form-control" id="lname" name="last_Name" placeholder="last name">
								</div>
							</div>

							<div class="form-group">
								<label class="font-weight-bold" for="num">Contact Number</label>
								<input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="contact number">
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email address">
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="num">Image</label>
								<input type="file" class="form-control" name="fileToUpload" id="image" oninput="CheckValue(this);"  >
							</div>
							<div class="form-row"><label class="font-weight-bold" for="edu"><small> Background Education</small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label class="font-weight-bold" for="institute">University / College Name</label>
									<input type="text" class="form-control" id="institute" name="university_College" placeholder="Institute name">
								</div>
								<div class="form-group col-md-3">
									<label class="font-weight-bold" for="degree">Degree</label>
									<select id="degree" name="degree" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="LLM">LLM</option>
										<option value="LLB">LLB</option>
										<option value="LLM">LLM</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label class="font-weight-bold" for="pyear">Passing Year</label>
									<select id="passing_year" name="passing_year" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
								
									</select>
								</div>
							</div>
							<div class="form-row"><label class="font-weight-bold" for="edu"><small> Cabinet Location </small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label class="font-weight-bold" for="address">Country</label>
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
								<div class="form-group col-md-3">
									<label class="font-weight-bold" for="address">State</label>
									<input type="text" class="form-control" id="address" name="city" placeholder="state">
								</div>
								
								<div class="form-group col-md-3">
									<label class="font-weight-bold" for="zip">City</label>
									<input type="text" class="form-control" id="zip" name="zip_code" placeholder="city">
								</div>
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="practise">Experience</label>
								<select id="practise" name="practise_Length" class="form-control">
									<option value=" " selected>Choose...</option>
									<option value="1-5 years">1-5 years</option>
									<option value="6-10 years">6-10 years</option>
									<option value="11-15 years">11-15 years</option>
									<option value="16-20 years">16-20 years</option>
									<option value="Most Senior">Most Senior</option>
								</select>
							</div>
							<div class="form-group">
								<!--a lawyer can choose 5 category at max-->
								<label class="font-weight-bold" for="speciality">Categories of case handle</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Criminal matter" id="crime">
									<label class="form-check-label" for="crime">
										Criminal matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Civil matter" id="civil">
									<label class="form-check-label" for="civil">
										Civil matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Writ Jurisdiction" id="civil">
									<label class="form-check-label" for="civil">
										Write Jurisdiction
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Company law" id="com">
									<label class="form-check-label" for="com">
										Company law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Contract law" id="con">
									<label class="form-check-label"  for="con">
										Contract law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Commercial matter" id="comm">
									<label class="form-check-label" for="comm">
										Commercial matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Construction law" id="cons">
									<label class="form-check-label" for="cons">
										Construction law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Information Technology" id="it">
									<label class="form-check-label"  for="it">
										Information Technology
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Family Law" id="fam">
									<label class="form-check-label" for="fam">
										Family Law
									</label>
								</div>
							
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Others" id="oth">
									<label class="form-check-label"  for="oth">
										Others
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="font-weight-bold" for="practise">My Speciality</label>
								<select id="practise" name="speciality" class="form-control">
									<option value=" " selected>Choose...</option>
									<option value="Criminal Law">Criminal law</option>
									<option value="Civil Law">Civil law</option>
									<option value="Entertainment law">Entertainment law</option>
									<option value="Company Law">Company law</option>
									<option value="Contract Law">Contract law</option>
									<option value="Commercial Law">Commercial law</option>
									<option value="Construction Law">Construction law</option>
									
									<option value="Family Law">Family law</option>
									<option value="Religious Law">Religious law</option>
									<option value="Investment Law">Investment law</option>
									<option value="Labour Law">Labour law</option>
									<option value="Property Law">Property law</option>
									<option value="Taxation Law">Taxation law</option>

								</select>
							</div>
							<div class="form-group">
								<div class="form-check">

									<input id="accept" name="agree" type="checkbox" value="y" /><strong>I Agree with terms & conditions </strong>
								</div>
							</div>
							<input name="post" type="submit" class="btn btn-block btn-success" value="Register" />
							<!--after signup redirect lawyer dashboard page-->
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>@ MVPRIMV INC 2025</h5>
					</div>
				</div>
			</div>
		</footer>



		<!-- Optional JavaScript -->
		<!-- jQuery -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

		<script>
			$('#validateForm').bootstrapValidator({
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					first_Name: {
						validators: {
							stringLength: {
								min: 3,
								message: 'Please Enter your First name with minimum 3 letters length',
							},
							notEmpty: {
								message: 'Please Enter your First name'
							}
						}
					},
					last_Name: {
						validators: {
							stringLength: {
								min: 3,
								message: 'Please Enter your Last name with minimum 3 letters length',
							},
							notEmpty: {
								message: 'Please Enter your Last name'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'Please Enter your email address'
							},
							emailAddress: {
								message: 'Please Enter a valid email address'
							}
						}
					},
					contact_number: {
						validators: {
							stringLength: {
								min: 10,
								max:10,
								message: 'Contact Number Must be 10 Digit',
							},
							numeric: {
								message: 'The phone no must be a number'
							},
							notEmpty: {
								message: 'Please Enter your phone number'
							}
						}
					},
					fileToUpload: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
					university_College: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your University or College'
							}
						}
					},
					degree: {
						validators: {
							notEmpty: {
								message: 'Choose your Degree'
							}
						}
					},
					passing_year: {
						validators: {
							notEmpty: {
								message: 'Choose Passing Year'
							}
						}
					},
					
					
					zip_code: {
						validators: {
							notEmpty: {
								message: 'enter your  Cell'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'enter your  Sector'
							}
						}
					},
					agree: {
						validators: {
							notEmpty: {
								message: 'Please Check Terms & Conditions is required'
							}
						}
					},
					practise_Length: {
						validators: {
							notEmpty: {
								message: 'Choose your Practise Length'
							}
						}
					},
					'case_handle[]': {
						validators: {
							notEmpty: {
								message: 'Please Select Types of case handle'
							}
						}
					},
					speciality: {
						validators: {
							notEmpty: {
								message: 'Choose your Speciality'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>
