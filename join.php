<?php
    include_once('header.php');
	include_once('code/config.php');
	
	/*$sql_iel="select * from `course`";
				$result=get_data($sql_iel);
				$ielts=$result->fetchAll();
				
	if(isset($_GET['flag']) && $_GET['flag']=='')
	{
		$id=$_GET['id'];
		echo $id;
	}*
		









/** 
	ob_start();
	include_once('header.php');
	include_once('code/config.php');
	if(isset($_POST['flag']) && $_POST['flag']=='submit')
	{
		$sql_in="insert into`registration`(`name`,`phno`,`email`,`timing`,`course`)values('".$_POST['nm']."','".$_POST['phno']."','".$_POST['email']."','".$_POST['timing']."','".$_POST['course']."')";
		$result=insert_data($sql_in);
		
		if($result==1)
		{
			ob_clean();
		  header('location:index.php?msg=Record inserted successfuly');
		}
		else
		{
			header('location:index.php?msg=Record not inserted');
		}
	}
	ob_flush();**/
?>

<html>
<head>
	<title>for joining</title>
	<link rel="stylesheet"href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
{
  box-sizing: border-box;
}



/* Float four columns side by side */
.column1 {
  float: left;
  width: 50%;
 /* padding: 0 10px;
  padding-bottom:20px;*/
  padding:2%;
}

/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;	
  background-color: #f1f1f1;
}
</style>
</head>
<body>
<div id="join1">
	<h1 style="font-size:50px;padding-top:50px;color:white;">IELTS</h1>
	<h4 style="color:white;">created by leading academics</h4>
</div>


<div id="join2">
	<div class="join2-left">
		<h2 style="font-size:50px;text-align:center;color:#006699;"><u><b>IELTS</b></u></h2>
		<img src="images/to2.jpg"height="87%" width="95%">
		<h2  style="font-size:40px;color: #006699;"><u><b>What is IELTS...?</b></u></h2>
		<p>International English Language Testing System (IELTS) is the official English proficiency test that helps one work,
		study or migrate in a country with English as their native language. Test takers assess one's ability to read, write,
		speak and listen in English and are graded on a scale of 1-9.<br><br>
	    With English as the third most spoken language in the world, candidates must be able to demonstrate a high level of
		English ability to bag better study and job opportunities while integrating into the new community.<br><br>

        Touchstone Educationals-IELTS Coaching Institute.</p>
		<hr>
	</div>
	
	<div class="join2-right">
	<h2 style="font-size:35px;text-align:left;color:#006699;padding-bottom:17px; padding-top:8px;"><b><u>Ielts Course Information</u></b></h2>
			
			<?php
				$id=$_GET['id'];
				$sql_iel="select * from `course` where `id`=" .$id;
				$result=get_data($sql_iel);
				$ielts=$result->fetchAll();
				foreach($ielts as $ielt)
				{
			?>
			
			<h1 style="font-size:60px;"  ><img src="images/drp1.png" height="150" width="150"> <?php echo $ielt['name'];?> </h1>
			<h1 style="font-size:60px;" ><img src="images/rs.jpg" height="140" width="150">  <?php echo $ielt['fee'];?> <h1>
			<h1  style="font-size:60px;" ><img src="images/cl.jpg" height="140" width="150"> <?php echo $ielt['duration'];?> <h1><br><br>
				<?php } ?>
<hr style="height:1px; border:none; color:#000; background-color:#006699; width:89%; text-align:center; margin: 0 auto 0 0;"><br><br>
<div class="text1"><h1 style="text-align:center;" ><a href="registration.php">JOIN</a></h1></div>		
</div>
	
</div>
 
<div id="join3">
	<h1  style="font-size:40px;color: #006699;text-align:center;"><u><b>REASONS TO CHOOSE IELTS</b></u></h1>

    <div class="join3-left">
	 <li>Accepted by more countries than any other English test.</li>
     <li>Simpler, easier and more convenient for test takers.</li>
     <li>Questions set by rea l people, marked by real people.</li>
     <li>Choose your preference-IELTS Academic or IELTS. </li>
	 
     <li>Validates both British & American English.</li>
     <li>Multitude of opportunities to study or work &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;internationally.</li>
	 </div>
	 <div class="join3-right">
		<img src="images/reason.jpg" height="60%" width="97%";>
	 </div>
	 
</div>

<div id="join4">
	<h1  style="font-size:40px;color: #006699;text-align:center;"><u><b>IELTS TEST FORMAT</b></u></h1> 
	<div class="row1">
		<div class="column1">
			<div class="card1">
				<i style="font-size:24px" class="fa">&#xf025;</i><a href="listening.php">
				<h3 style="color:black";>listening</h3></a>
            </div>
		</div>
		
		<div class="column1">
			<div class="card1">
				<i style="font-size:24px" style="color:black" class="fa">&#xf0c0;</i><a href="speaking.php"><h3 style="color:black";>speaking</h3>
            </a></div>
		</div>
	</div> 
	<div class="row1">
		<div class="column1">
			<div class="card1">
				<i style="font-size:24px" class="fa">&#xf044;</i><a href="writing.php"> <h3 style="color:black";> writing</h3></a>
            </div>
		</div>
		
		<div class="column1">
			<div class="card1">
				<i style="font-size:24px" class="fa">&#xf02d;</i><a href="reading.php"> <h3 style="color:black";> reading</h3></a>
            </div>
		</div>
    </div>
	
</div>

</body>
</html>	
<?php
include_once('footer.php');
?>