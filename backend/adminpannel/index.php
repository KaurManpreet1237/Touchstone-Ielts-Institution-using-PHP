<?php
	include_once('header.php');
?>

<html>
<head>
<title>Backend Dashboard</title>
<link rel="stylesheet" href="../../style1.css">

</head>

<body>
<div id="dash">
  <div class="dash-class">
  <a href="call_back_data.php"><button style="--clr:#006699	"><span>CALL BACK DATA</span><i></i></button></a>
  </div>
  
  <div class="dash-class">
  <a href="register_data.php"><button style="--clr: #006699"><span>REGISTERED STUDENTS</span><i></i></button></a>
  </div>
  
   <div class="dash-class">
  <a href="exam_booking_info.php"><button style="--clr: #006699"><span>EXAM BOOKING INFORMATION</span><i></i></button></a>
  </div>
  
   <!--<div class="dash-class">
  <button style="--clr:#0FF0FC" :#FF44CC><span>Button</span><i></i></button>
  </div>
  
  <div class="dash-class">
  <button style="--clr:#8A2BE2"><span>Button</span><i></i></button>
  </div>-->

</div>

</body>
</html>
<?php
	include_once('footer.php');
?>
