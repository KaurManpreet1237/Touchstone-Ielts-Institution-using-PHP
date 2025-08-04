<?php
	include_once('header.php');
?>
<html>
<head>
	<title>course information</title>
	<link rel="stylesheet" href="../../style1.css">
	<style>
#exam2 {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#exam2 a 
{
	text-decoration:none;
}

#exam2 td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#exam2 tr:nth-child(even){background-color: #f2f2f2;}

#exam2 tr:hover {background-color: #ddd;}

#exam2 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<div id="exam1">
	<h1  style="font-size:40px;color: #006699;text-align:center;margin-top:15%;"><b><u>EXAM INFORMATION</u></b></h1>
</div>
<div id="dash">
  <div class="dash-class">
  
	<a href="ebooking_data.php"><button style="--clr: #006699"><span>EXAM BOOKING DATA</span><i></i></button></a>
</div>
</div>

<div id="exam2">
	<h1  style="font-size:40px;color: #006699;text-align:center;margin-top:7%;"><b><u>CONTROL EXAM INFORMATION</u></b></h1>
	<table  style="margin-top:6%;text-align:center;" id="tab"  border="5px" width="95%" >
	<tr style="height:100px;">
		<td><b>COURSE</b></td>
		<td style=" color:blue;"><a href="add_exam_course.php"><b>ADD INFORMATION</b></a></td>
		<td style=" color:blue;"> <a href="manage-exam-course.php"><b>MANAGE INFORMATON</b></Td>
	</tr>
	<tr style="height:100px;">
		<td><b>DATE</b></td>
		<td style=" color:blue;"><a href="add-exam-date.php"><b>ADD INFORMATION</b></td></a>
		<td style=" color:blue;"><a href="manage-exam-date.php"><b>MANAGE INFORMATON</b></Td></a>
	</tr>
	<tr style="height:100px;">
		<td><b>TIME</b></td>
		<td style=" color:blue;"><a href="add-exam-timing.php"><b>ADD INFORMATION</b></td></a>
		<td style=" color:blue;"><a href="manage-exam-timing.php"><b>MANAGE INFORMATON</b></Td></a>
	</tr>
	
	
	
	</table>
</div>



</body>
</html>
<?php
	include_once('footer.php');
?>