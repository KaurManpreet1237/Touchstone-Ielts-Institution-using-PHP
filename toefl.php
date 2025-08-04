<?php 
	include_once('header.php');
?>
<html>
<head>
	<title>for joining</title>
	<link rel="stylesheet"href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	​

</head>
<body>
<div id="join1">
	<h1 style="font-size:50px;padding-top:50px;color:white;">TOEFL</h1>
	<h4 style="color:white;">created by leading academics</h4>
</div>


<div id="join2">
	<div class="join2-left">
		<h2 style="font-size:50px;text-align:center;color:#006699;"><u><b>TOEFL</b></u></h2>
		<img src="images/footer.jpg"height="85%" width="95%">
		<h2  style="font-size:40px;color: #006699;"><u><b>What is TOEFL...?</b></u></h2>
		<p>The TOEFL exam was first administered in the USA in 1964. With the passage of 
		time, many institutions have now started to accept the test as an official 
		measurement of the English proficiency of their students.If you are an 
		international student willing to study in an English-speaking country, 
		TOEFL is one of the first steps in the process. It assesses the ability to speak
		and understand the English language by analysing students’ reading, writing,
		listening and speaking abilities. These are the skills required to carry out 
		academic studies in a foreign land and to further succeed in a country 
		where the mode of teaching/communication is English.

</p><hr>
	</div>
	
	<div class="join2-right">
	<!--<form name="form1" action="" method="POST">
		<h1><center><b><u>Join to us </u></b></center></h1> 
		<center>
		<div class="element">
		<label for="name">Name:</label>
		<input type="text"Name="name"size="20"maxlength="20">
		</div>
		
		<div class="element">
		<label for="Phno">Phno:</label>
		<input type="text"name="phno"size="20"maxlength="10">
		</div>
  
		<div class="element"> 
		<label for="Email">Email:</label>
		<input type="text"name="email"size="20"maxlength="15">
		</div>
		
		<div class="element">
		<label for="city">City:</label>
		<input type="text"Name="city"size="20"maxlength="20">
		</div>
		
		<div class="element">
		<label for="course">Course:</label>
		<select name ="course" id="course" required>
		<option value="">select course</option>
		</div> 
		 
		
		
		
		<!--<label for="Query">Query Optional:</label>
		<textarea   id="query"name="query" placeholder="Write something.." </textarea>
		
		<br><br><br>
		
		<input type="hidden" name="flag" id="flag"value="submit">
        <input type="submit" name="submit" id="submit" value="submit">
		
		</center>
	</form>-->
	
	<h2 style="font-size:35px;text-align:left;color:#006699;padding-bottom:17px; padding-top:8px;"><b><u>TOEFL Course Information</u></b></h2>
			
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
			<h1  style="font-size:60px;" ><img src="images/cl.jpg" height="140" width="150"> <?php echo $ielt['duration'];?> <h1><br>
				<?php } ?>	
<hr style="height:1px; border:none; color:#000; background-color:#006699; width:89%; text-align:center; margin: 0 auto 0 0;"><br><br>
<div class="text1"><h1 style="text-align:center;" ><a href="registration.php">JOIN</a></h1></div>		
</div>
</div>
 
<div id="join3">
	<h1  style="font-size:40px;color: #006699;text-align:center;"><u><b>Why TOEFL?</b></u></h1>

    <div class="join3-left">
	 The TOEFL test is taken by millions of students worldwide to ensure that their 
	 English abilities are up-to-date. It is accepted by educational institutions & 
	 government agencies in over 130 countries. The test scores are valid for two years
	 – it is important to take the test in time for application if the result is part 
	 of the admission requirements.
	 </div>
	 <div class="join3-right">
		<img src="images/toefl5.jpg" height="60%" width="97%";>
		<style>
		
		
</style>
	 </div>
</div>

<!--<div id="join4">
	<h1><u>IELTS TEST FORMAT</u></h1> 
	<div class="row">
		<div class="column">
			<div class="card">
				<h3><i style="font-size:24px" class="fa">&#xf025;</i><a href="listening.php">
				listening</a></h3>
            </div>
		</div>
		
		<div class="column">
			<div class="card">
				<h3><i style="font-size:24px" class="fa">&#xf0c0;</i><a 
				href="speaking.php">speaking</h3>
            </a></div>
		</div>
	</div> 
	<div class="row">
		<div class="column">
			<div class="card">
				<i style="font-size:24px" class="fa">&#xf044;</i><a href="writing.php">
				<h3  style="color:black;">writing
				</h3></a>
            </div>
		</div>
		
		<div class="column">
			<div class="card">
				<h3><i style="font-size:24px" class="fa">&#xf02d;</i><a href="reading.php">reading</a></h3>
            </div>
		</div>
    </div>
	<!--<div id="join4-top">
		<div class="top1">
		listening
		</div>
		<div class="top1">
		speaking
		</div>
	</div> 
	
	<div id="join4-bottom">
		<div class="bottom1">
		writing
		</div>
		<div class="bottom1">
		reading
		</div>
	</div>-->
		
		
</div>

</body>
</html>	
<?php 
	include_once('footer.php');
?>