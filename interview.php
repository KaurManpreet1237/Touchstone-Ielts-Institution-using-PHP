<?php 
include_once('header.php');
?>
<html>
<head>
	<title>for joining</title>
	<link rel="stylesheet"href="style1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div id="join1">
	<h1 style="font-size:50px;padding-top:50px;color:white;">INTERVIEW PREPARATION</h1>
	<h4 style="color:white;">created by leading academics</h4>
</div>


<div id="join2">
	<div class="join2-left">
		<h2 style="font-size:50px;text-align:center;color:#006699;"><u><b>INTERVIEW PREPARATION</b></u></h2>
		<img src="images/inter.jpg"height="86%" width="95%">
		<h2 style="font-size:50px;color:#006699;"><u><b>What is INTERVIEW PREPARATION ...?</b></u></h2>
		<p>Your one-stop solution to cracking the interview of your dreams is here! Preparing to ace an interview requires
		dedication, great resources and, most importantly, smart learning. The process includes dressing up for success, 
		giving it a dummy run and researching for the business and interviewer. Joining our interview preparation course
		will help you practise and solve tough questions during real interviews while mastering the tips and tricks to solve 
		them faster and with more confidence.


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
		<h2 style="font-size:35px;text-align:left;color:#006699;padding-bottom:17px; padding-top:8px;"><b><u>Interview Preparation Course Information</u></h2>
			
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
			<h1  style="font-size:60px;" ><img src="images/cl.jpg" height="140" width="150">  <?php echo $ielt['duration'];?> <h1><br>
				<?php } ?>	
<hr style="height:1px; border:none; color:#000; background-color:#006699; width:89%; text-align:center; margin: 0 auto 0 0;"><br><br>
<div class="text1"><h1 style="text-align:center;" ><a href="registration.php">JOIN</a></h1></div>		
</div>
</div>
 
<div id="join3">
	<h1  style="font-size:40px;color: #006699;text-align:center; padding-bottom:20px"><u><b>Why Interview Preparation?</b></u></h1><br>

    <div class="join3-left">
	<p> Want to establish yourself as the best candidate during the hiring process? Looking for prestigious organisations to 
	 approve your candidature? Well, the most important step in landing your dream job is to be prepared during interviews. 
	 We help you gain clarity, confidence and valuable insights on handling different interview techniques and questions. We 
	 offer a comprehensive understanding of establishing oneself as the most-liked candidate during the hiring process.</p></div>
	 <div class="join3-right">
		<img src="images/inter1.jpg" height="75%" width="95%";>
		<style>
		
		
</style>
	 </div>
</div>
<div id="join4">
	<h1  style="font-size:40px;color: #006699;text-align:center; padding-bottom:20px"><u><b>Skills You Will Gain</b></u></h1>
		<h1 style="text-align:left;"><li>Creating a good first impression</li>
		<li>Boosting soft skills</li>
		<li>Handling tricky interview questions</li>
		<li>Making stellar resumes</li>
		<li>Sell your abilities with confidence</li>
		<li>Developing interpersonal communication skills</li></h1>
</div>
<!--<div id="join4">
	<h1><u>PTE TEST FORMAT</u></h1> 
	<style>
		.dropdown1 {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content1 {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  padding: 12px 16px;
		  z-index: 7;
		}

		.dropdown1:hover .dropdown-content1 {
		  display: block;
		}
    </style>
	<div class="dropdown1">
		<span>Mouse over me</span>
		<div class="dropdown-content1">
			<p>Hello World!</p>
		</div>
	</div>

	<!--<div class="row">
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
				<h3><i style="font-size:24px" class="fa">&#xf044;</i><a href="writing.php">writing
				</a></h3>
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
	</div>
		
		
</div>-->

</body>
</html>	
<?php 
include_once('footer.php');
?>
