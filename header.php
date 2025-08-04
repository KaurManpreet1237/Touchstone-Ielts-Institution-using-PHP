<?php
	include_once('code/config.php');
	
	$sql_iel="select * from `course`";
	$result=get_data($sql_iel);
	$ielts=$result->fetchAll();
?>
<html>
<head>
<title> TouchStone Institution </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

</head>
<body>

	<!--header main start-->
	<div id="main-header">
	
		<!--header top class start--> 
		<div class="header-top">
			<div class="header1">
				<h3><a href="contact.php#location-info">&nbsp;<i style="font-size:24px" class="fa">&#xf2a0;</i> <b>REQUEST A CALL BACK</b></a></h3>
			</div>
			
			<div class="header2">
				<h3><a href="booking.php"><i style="font-size:24px" class="fa">&#xf044;</i> <b>EXAM BOOKING</b></h3>
			</div>
			
		
			<div class="header3">
				<h3><a href="contact.php#head-office"><i style="font-size:24px" class="fa">&#xf095;</i> <b>CALL</b></h3>
			</div>
			<div class="header4">
			<style>
			a
			{
				text-decoration:none;
				color:white;
			}
			</style>
				<a href="contact.php#location-info"><h3><i style="font-size:24px" class="fa">&#xf041;</i><b> LOCATION</b></h3></a>
			</div>
			
		</div><!--end of header top-->
		
		<!--header bottom class start-->
		<div class="header-bottom">
			<div class="logo" >
				&nbsp;<img src="images/logo7.png"height="140" width="400">
			</div>
			
<div class="menu">
			     <!--<div class="dropdown">
					<a href="index.php"><i style="font-size:30px" class="fa">&#xf015;</i>
				</div>-->
				<div class="dropdown">
				
					<!--<a href="index.php"><li class="w3-xxxlarge"><i class="material-icons w3-xxxlarge">home</i> </li></a>-->
					<a href="index.php"><h3><b>Home</b></h3></a>
				</div>

				<div class="dropdown">
					
					<button class="dropbtn"><h3><b>Course</b></h3></button>
					
					<div class="dropdown-content">
						<a href="join.php?id=1">Ielts </a>
					    <a href="pte.php?id=2"> Pte</a>
						<a href="toefl.php?id=8">Toefl</a>
						<a href="mock_test.php?id=9">Mock-Test</a>
						<a href="spoken.php?id=4">Spoken english</a>
						<a href="interview.php?id=6">Interview preparation</a>
						
					
					</div>
					
				</div>
				
				<div class="dropdown">
					<button class="dropbtn"><h3><b>Service</b></h3></button>
		
					<div  class="dropdown-content">
						<a href="faculty_details.php">Faculty</a>
						<a href="booking.php">Exam booking</a>
						<a href="study_abroad.php">Study abroad</a>
						<a href="counseling.php">Counseling</a>
						<!--<a href="#">Exam booking</a>-->
						<a href="mobile_apps.php">Mobile app</a>
						<a href="test-centre.php">Test centre</a>
					</div>
				</div>
				
				<div class="dropdown">
					<button class="dropbtn"><h3><b>About us</b><h3></button>
		
					<div class="dropdown-content">
						<a href="about-us.php">About touchstone </a>
						<a href="testimonials.php">Testimonials</a>
						<!--<a href="#"><img src="images/drp51.jpg" width="45px">events</a>-->
						<a href="event.php">Events</a>
						<a href="achievements.php">Achievements</a>
						<a href="index.php#index4">Why touchstone?</a>
						<a href="privacy.php">Privacy and policy</a>
					</div>
				</div>
				
				<div class="dropdown" style="margin-top:-12px;">
					<a href="contact.php"><button class="dropbtn"><h3><b>Contact us</b><h3></button></a>
		
					<!--<div class="dropdown-content">
						<a href="#">IELTS</a>
						<a href="#">PTE</a>
						<a href="#">TOEFL</a>
					</div>-->
				</div>
				
				<div class="dropdown" style="margin-top:-12px; ">
					<div class="review"><h3><a href="review_form.php"><button class="dropbtn" style="color:white; font-size:20px;"><b>Post Review<b></button></a></h3></div>
		
					<!--<div class="dropdown-content">
						<a href="#">2</a>
						<a href="#">P</a>
						<a href="#">T</a>
					</div>-->
				</div>
				
				
			</div><!--end of hb2-->
		</div><!-- end of header bottom-->
</div><!--end of header main-->
	