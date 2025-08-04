<?php 
  ob_start();
  include_once('/code/config.php');
  include_once('header.php');
if(isset($_POST['flag']) && $_POST['flag']=='submit')
{
	$sql_cour="select `passport` from `exam_info` where `passport`='".$_POST['passport']."'";
		$return=get_data($sql_cour);
		$count=$return->rowCount();
          if($count==0)
		  {
	/*$d=mysql_real_escape_string($_POST['name']);*/
	
		$folder="/backend/img_upload/student_booking/".$_FILES['pic']['name'];
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $folder))
		{
            $msg = "Images upload successfully";
        }
		else
		{
            $msg = "Failed to upload images";
		}
	 
	 $sql_booking="insert into`exam_info`(`image`,`name`,`father_name`,`dob`,`gender`,`passport`,`aadhar_no`,`pan_no`,`nationality`,`phno`,`email`,`address`,`state`,`city`,`district`,`course_id`,`fee`,`doe`,`timing`) 
	values('".$_FILES['pic']['name']."','".$_POST['nm']."','".$_POST['fa_nm']."','".$_POST['dob']."','".$_POST['gender']."','".$_POST['passport']."',
	'".$_POST['aadhar']."','".$_POST['pan']."','".$_POST['nationality']."','".$_POST['phno']."','".$_POST['email']."',
	'".$_POST['address']."','".$_POST['state']."','".$_POST['city']."','".$_POST['district']."','".$_POST['course']."',
	'".$_POST['fee']."','".$_POST['examdate']."','".$_POST['time']."')";
	$result=insert_data($sql_booking);
	if($result==1)
	{
		ob_clean();
		header('location:thanku_b.php?msg=Record Inserted Successfully');
		
	}
	else
	{
		ob_clean();
		header('location:thanku_nb.php?msg=Record Not Inserted');
	}
		  }
		  else
		  {
			ob_clean();
		header('location:ebook_thanku.php?msg=Record already exists');
		  }		
}
?>
<html>
<head>
<title>booking</title>
<link rel="stylesheet" href="style1.css">

</head>
<body>
<br>
<div id="booking_form">
	<form name="form1"action="#" method="POST" enctype="multipart/form-data" autocomplete onsubmit="return validate();">
		<div class="heading"><h1><b><u>EXAM BOOKING</u></b></h1> </div>
		<H3><b>PERSONAL INFORMATION :</b></H3>
		<div class="booking-el1">
				
					<label for="pic">Select a file :</label>
					
					<input type="FILE" id="pic" name="pic" width="200px" height="200px" required>
		</div>
				
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<image id="profileImage" src="backend/img_upload/student_booking/" width="200px" height="200px" border=""><br>
		<input id="imageUpload" type="file" 
			name="pic1" placeholder="Photo" required="">
			
			<script>
			$("#profileImage").click(function(e) {
			$("#imageUpload").click();
			});</div>
			</script>-->
		
		<div class="booking-el">
		<label for="name">NAME:</label>
		<input type="text"Name="nm"size="20"maxlength="20" pattern="^[a-zA-Z][a-zA-Z ]*$" title="please enter only alphabets" required>
		
		</div>
		
		<div class="booking-el">
		<label for="fa_nm">FATHER NAME :</label>
		<input type="text"name="fa_nm"size="20"maxlength="60" pattern="^[a-zA-Z][a-zA-Z ]*$" title="please enter only alphabets" required>
		</div>
		
		<div class="booking-el">
		<label for="dob">DATE OF BIRTH:</label>
		<input type="date"name="dob"size="20"maxlength="20" required>
		</div>
		
		<div class="booking-el">
		<label for="gender"><span>GENDER  :</span></label>
		<!--<input type="radio"name="gender"size="20"maxlength="10" required>-->
		<label for="male">MALE</label>
	    <input type="radio" id="male" name="gender" value="MALE"  required>
 	    <label for="female">FEMALE</label>
  	    <input type="radio" id="others" name="gender" value="FEMALE" required>
  	    <label for="others">OTHERS</label>
		<input type="radio" id="others" name="gender" value="OTHERS" required>
		</div>
		
		<div class="booking-el"> 
		<label for="passport">PASSPORT NO :</label>
		<input type="text"name="passport"size="20" pattern="[A-Z]{1}[0-9]{7}"maxlength="8" placeholder="AXXXXXXX" title="first letter alphabet other seven letter must nymbers" required>
		</div>
		
		<div class="booking-el"> 
		<label for="aadhar">AADHAR CARD NO :</label>
		<!--<input type="tel"name="aadhar"size="20"maxlength="12" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>-->
		<input type="text" name="aadhar" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}"  maxlength="12" placeholder="xxxx xxxx xxxx " required>

		</div>
		
		<div class="booking-el"> 
		<label for="pan">PAN CARD NO :</label>
		<input type="text"name="pan"size="20" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}"maxlength="10" alt="add right data" placeholder="aaaaaxxxxa"required>
		</div>
		
		<div class="booking-el"> 
		<label for="nationality">NATIONALITY :</label>
		<input type="text"name="nationality"size="20"maxlength="100" pattern="^[a-zA-Z][a-zA-Z ]*$" required>
		</div>
		
		<H3><b>CONTACT INFORMATION :<b></H3>
		<div class="booking-el">
		<!-- pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"-->
		<label for="phno">Phno:</label>
		<input type="tel"name="phno"size="20"maxlength="10"  pattern="[6789]{1}[0-9]{9}" placeholder="+91 "required />

 
		</div>
  
		<div class="booking-el"> 
		<label for="email">Email:</label>
		<input type="email"name="email"size="20"maxlength="30" required>
		</div>

		<div class="booking-el"> 
		<label for="address">ADDRESS:</label>
		<input type="text"name="address"size="20"maxlength="100" required><br>
		<label for="state">STATE:</label>
		<input type="text"name="state"size="20"maxlength="100"pattern="^[a-zA-Z][a-zA-Z ]*$" required><br>
		<label for="city">CITY:</label>
		<input type="text"name="city"size="20"maxlength="100"pattern="^[a-zA-Z][a-zA-Z ]*$" required><br>
		<label for="district">DISTRICT:</label>
		<input type="text"name="district"size="20"maxlength="100" required>
		</div>
		
		
		<!--<div class="element">
		<label for="course">Course:</label>
		<select name ="course" id="course" >
		<option value="">select course</option>
		<option value="ielts">pte</option>
		<option value="pte">IELTS</option>
		<option value="toefl">TOEFL</option>
		<option value="toefl">interview preparation</option>
		</select>-->
		<H3><b>EXAM INFORMATION :</b></H3>
		<div class="booking-el">
				

			<label for="course">course:</label>
			<!--<select name="course" id="course" >
				<option value="">select course</option>			
				<?php
					$id=$_GET['id'];
					$sql_cour="select * from `exam_course` where id=".$id;
					$result=get_data($sql_cour); 
					$updates=$result->fetchAll();
					foreach($updates as $update)
					{
		
				?>
				 
				 
				  <label for="name" class="label_name">COURSE :</label>-->
				 <input type="text" name="course" value="<?php echo $update['ename'];?>" required>
				
		</div>
		
		<div class="booking-el"> 
		<label for="fee">FEE:</label>
		<input type="text"name="fee"size="20" value="<?php echo $update['fee'];?>"maxlength="15" pattern="[0-9]+" title="invalid number"required>
		 <?php }?>
		</div>

		<div class="booking-el">
			<label for="examdate">EXAM DATE:</label>
			<select name="examdate" id="examdate" required >
				<option value="">select exam date</option>
				
				
				<?php

				  $sql_dura="select `edate1`,`edate2` from `exam_date` order by `id` desc limit 0,1";
				  $return=get_data($sql_dura);
				  $durt=$return->fetchAll();
				  foreach($durt as $durta)
				  {
					 
				?>
				 
 
    <option value="<?php echo $durta['edate1'];?>"><?php echo $durta['edate1'];?></option>
    <option value="<?php echo $durta['edate2'];?>"><?php echo $durta['edate2'];?></option>
     <?php } ?>
  </select>
 
				
				  
			
		</div>
		
		<div class="booking-el">
      <label for="time" > SELECT TIMING :</label>
      <select name="time" id="time" required>
	  <option value="">select timing</option>
	<?php
	  $sql_time="select `etiming1`,`etiming2` from `exam_timing` order by `id` desc limit 0,1";
	  $return=get_data($sql_time);
	  $tim=$return->fetchAll();
	  foreach($tim as $time)
	  {
	?>
      <option value="<?php echo $time['etiming1'];?>"><?php echo $time['etiming1'];?></option>	
	  <option value="<?php echo $time['etiming2'];?>"><?php echo $time['etiming2'];?></option>	
	  <?php }?>
	  
	  </select>
	</div>
		
		<!--<label for="Query">Query Optional:</label>
		<textarea   id="query"name="query" placeholder="Write something.." </textarea>
		-->
		<br>
		<div class="booking-el2">
		<input type="hidden" name="flag" id="flag"value="submit">
        <input type="submit" name="submit" id="submit" value="submit" >
		</div>
	</form>
</div>
</div>
</body>
</html>
<?php
	include_once('footer.php');
?>