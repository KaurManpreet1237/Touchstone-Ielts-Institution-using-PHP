<?php
	ob_start();
  include_once('header.php');
  include_once('code/config.php');
   
    if(isset($_POST['flag'])&& $_POST['flag']=='submit')
	{
		
		$sql_ins="insert into `call_back`(`name`,`phno`,`message`,`status`)values('".$_POST['name']."','".$_POST['phno']."','".$_POST['message']."','n')";
        $return=insert_data($sql_ins);
		/*$cou=$return->fetchAll();*/
		if($return==1)
		{
			ob_clean();
			header('location:contact.php?msg=record inserted');
		}
		else
		{
			ob_clean();
			header('location:contact.php?msg=record already exists');
		}
      
	}
?>
<html>
<head>
<title> Contact us</title>
<link href="stylesheet" rel="style1.php">

<style>
/* Float four columns side by side */
.column {
		float: left;
		width: 33%;
		padding:60px 60px 60px;
		}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -15px -155px;}

/* Clear floats after the columns */
.row:after {
			content: "";
			display: table;
			clear: both;`1		
			}

/* Responsive columns */
@media screen and (max-width: 600px) {
.column {
		width: 100%;
		display: block;
		/*margin-bottom: 20px;*/
		}
	}

/* Style the counter cards */
.card {
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	padding: 30px;
	/*text-align: center;
	background-color: #f1f1f1*/
	background: linear-gradient(to bottom, #ffffcc 0%, #0099cc 100%);
	height:200px;
	}
	/*hr {
		border: 1px solid red;
		text-align:center;
		margin-left:30%;*/
		
</style>
	
</head>
<body>
<?php
	include_once('header.php');
?>
<!-- header of contact us -->
<div class="contact-header">
	<h1 style="font-size:50px;padding-top:50px;color:white;"> Contact us </h1>
	<h4 style="color:white;">created by leading academics</h4>
</div>

<!--information about head office -->
<div id="head-office">

	<pre><h1 style="padding-left:190px;padding-top:100px;"><i style="font-size:35px;color:#00cc99;" class="fa">&#xf041;</i> HEAD OFFICE</h1></pre>
	<h2 style="padding-left:190px;padding-bottom:80;">SCO 88-89, Sector 17 C, Chandigarh - 160017, India</h2>
<center>
	<div class="call">
		<h1><i style="font-size:30px;color:#00cc99;" class="fa">&#xf095;</i> CALL US</h1>
		
		<h2><a href="tel:+91 172 500 0060" style="color:black;"> +91 172 500 0060 </a></h2>
		
	</div>
	<div class="email">
		<h1><i style="font-size:30px;color:#00cc99;" class="fa">&#xf0e0;</i> EMAIL</h1>
		<h2><a href=" mailto:info@touchstoneedu.com" style="color:black;"> info@touchstoneedu.com </a></h2>
	</div>
	<div class="time">
		<pre><h1><i style="font-size:30px;color:#00cc99;" class="fa">&#xf017;</i> WORKING</h1></pre>
		<h2>9:00 am to 7:00 pm</h2>
	</div>
</center>
</div>

<!--location and call back option-->
<div id="location-info">
	<div class="map">
		<center><h1><b><u>map location</u><b></h1></center>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3411.957473232788!2d75.76544780896212!3d31.
		221907574244995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391af5dbe5bfe0a7%3A0x61478e5b955580df!2sTouchstone%
		20Educationals%20LLP!5e0!3m2!1sen!2sin!4v1707196647395!5m2!1sen!2sin" width="710" height="484" style="border:0;border-radius: 5px;" 
		allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<div class="call-back">
		<center><h1><b><u> call back option</u></b> </h1><center>
			<form name="form1"action="#" method="POST">
			    <div class="element">
				<label for="name">Name:</label>
                <input type="text"name="name"size="20" pattern="^[a-zA-Z][a-zA-Z ]*$" placeholder="Name">
                </div>
				 
				<div class="element">
				<label for="phno">Phno:</label>
				<input type="text"name="phno"size="20"maxlength="10" pattern="[6789]{1}[0-9]{9}" placeholder="phno">
                </div>

	
				<div class="element">
				<label for="message">Message</label>
				<textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>
                </div>
				
				<div class="element">
                <input type="hidden" name="flag" id="flag" value="submit">
                <input type="submit" id="submit"class="btn" value="submit">
				</div>
			</form>
	</div>
</div>

<!--more location in punjab -->
<div id="punjab-locations">
	<h1 style="color:#00cc99;font-size:50px;padding-left:20px;"><b>PUNJAB</b></h1>

	<div class="row">
			  <div class="column">
				<div class="card">
				  <h3>AMRITSAR</h3>
				  <h4><a href="amritsar-loc.php"><style="padding-left:190px;padding-top:100px;"><i style="font-size:24px;color:#00cc99;" class="fa">&#xf041;</i>SCO 42, Distt. Shopping Complex, Ranjit Avenue, Amritsar, Punjab - 143008</a></h4>
				  
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				  <h3>BALACHAUR</h3>
				  <h4><a href="balacharn.php"><style="padding-left:190px;padding-top:100px;"><i style="font-size:24px;color:#00cc99;" class="fa">&#xf041;</i>Opposite B.A.V Senior Secondary School Garshankar Road Balachaur, Punjab - 144521</a><h4>
				  
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				 <h3>BARNALA</h3>
				  <h4><a href="barnala.php"><style="padding-left:190px;padding-top:100px;"><i style="font-size:24px;color:#00cc99;" class="fa">&#xf041;</i>SCF 25-26, 16 ACRE Scheme, Near Bus Stand, Barnala, Punjab - 148101</a></h4>
				  
				</div>
			  </div>
			 </div>
			 <div class="row">
			  <div class="column">
				<div class="card">
				  <h3>HOSHIARPUR</a></h3>
				  <h4> <a href="hoshiarpur.php"><style="padding-left:190px;padding-top:100px;"><i style="font-size:24px;color:#00cc99;" class="fa">&#xf041;</i>Level - 1, Nijhawan Complex, GT Road, Jagraon - 142026 </a></h4>
				  
				</div>
			  </div>

			  <div class="column">
				<div class="card">
				  <h3>JALANDHAR</h3>
				  <h4> <a href="jalandhar.php"><style="padding-left:190px;padding-top:100px;"><i style="font-size:24px;color:#00cc99;" class="fa">&#xf041;</i>H.No. 739, Mota Singh Nagar, Jalandhar, Punjab - 144001</a></h4>
				  
				</div>
			  </div>
			  
			  <div class="column">
				<div class="card">
				  <h3>LUDHIANA</h3>
				  <h4><a href="ludhiana.php"><h4><style="padding-left:190px;padding-top:100px;"><i style="font-size:24px;color:#00cc99;" class="fa">&#xf041;</i>&nbsp;SCO 3, Canal Colony, Green Park Enclave, Pakhowal Road, Ludhiana, Punjab - 141012</h4></a>
				 
				</div>
			  </div>
			 </div>
</div>
<?php
	include_once('footer.php');
?>
</body>
</html>