<?php 
	ob_start();
	include_once('header.php');
	include_once('code/config.php');
	if(isset($_POST['flag']) && $_POST['flag']=='submit')
	{
		$sql_in="insert into`registration`(`name`,`phno`,`email`,`course`,`timing`)values('".$_POST['nm']."','".$_POST['phno']."','".$_POST['email']."','".$_POST['cours']."','".$_POST['timing']."')";
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
	ob_flush();
?>

<html>
<head>
<title>Registeration</title>
<link rel="stylesheet"href="style1.css">

<script type = "text/javascript">

   // Form validation code will come here.
  /* function validate() {
   
      if( document.form1.nm.value == "" ) {
         alert( "Please provide your name!" );
         document.form1.nm.focus() ;
         return false;
      }
      if( document.form1.email.value == "" ) {
         alert( "Please provide your Email!" );
         document.form1.email.focus() ;
         return false;
		  var emailID = document.form1.email.value;
      atpos = emailID.indexOf("@");
      dotpos = emailID.lastIndexOf(".");
      
      if (atpos < 1 || ( dotpos - atpos < 2 )) {
         alert("Please enter correct email ID")
         document.form1.email.focus() ;
         return false;
      }
      return( true );
      }
      /*if( document.myForm.Zip.value == "" || isNaN( document.myForm.Zip.value ) ||
         document.myForm.Zip.value.length != 5 ) {
         
         alert( "Please provide a zip in the format #####." );
         document.myForm.Zip.focus() ;
         return false;
      }
      if( document.form1.Country.value == "-1" ) {
         alert( "Please provide your country!" );
         return false;
      }*/
      return( true */
   }
</script>
<style>
.join2-right
{
	margin-top:15%;
	margin-bottom:5%;
	
}
.join2-right .element
{
	font-weight:normal;
	border-radius: 5px;
    padding:  5px 0px;
    text-align:center;
	margin-left:10%;
	margin-right:10%;
	background-color:#e6f5ff;
}
.join2-right .elementselect
{
	font-weight:normal;
	border-radius: 5px;
    padding:  5px 0px;
    text-align:center;
	margin-left:10%;
	margin-right:10%;
	background-color:#e6f5ff;
}
.join2-right .element input[type=submit] 
{
	width:25%;
	background-color: red;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 0px;
	text-align:center;
	float:center;
	margin-bottom:2%
}
.join2-right .element input[type=text], select, textarea
{
	width: 40%;
	padding: 6px;
	border: 1px solid #ccc;
	/*border-radius: 5px;
	box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:10px;
	margin-bottom:35px;
	resize:vertical;
}
.join2-right .element input
{
	height:30px;
}
.join2-right .element input[type=email], select, textarea
{
	width: 40%;
	padding: 6px;
	border: 1px solid #ccc;
	border-radius: 5px;
	/*box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:10px;
	margin-bottom:35px;
}

.join2-right .element label
{
	width:21%;
	float:left;
	margin-left:20%;
	margin-top:10px;
	
}
.join2-right .elementselect label
{
	width:30%;
	float:left;
	margin-left:16%;
	margin-top:10px;
	
}
.join2-right .elementselect select
{
	text-align:center;
	
		width: 40%;
	padding: 6px;
	border: 1px solid #ccc;
	/*border-radius: 5px;
	box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:10px;
	margin-bottom:35px;
	/*resize:vertical;*/
	
}	
</style>
</head>
<body>
<br>
<div class="join2-right">
	<form name="form1"action="#" method="POST">
		<h1 style="color: #006699; font-size:50px;text-align:center; "><b>Registration</b></h1> 
		<center>
		<div class="element">
		<label for="name">Name<sup style="color:red;">*</sup>:</label>
		<input type="text"Name="nm"size="20"maxlength="20"  pattern="^[a-zA-Z][a-zA-Z ]*$" title="invalid text"required>
		</div>
		
		<div class="element">
		<label for="phno">Phno<sup style="color:red;">*</sup>:</label>
		<input type="text"name="phno"size="20"maxlength="10" pattern="[6789]{1}[0-9]{9}" placeholder="+91 "required>
		</div>
  
		<div class="element"> 
		<label for="email">Email<sup style="color:red;">*</sup>:</label>
		<input type="email"name="email"size="20"maxlength="20" required>
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
		<div class="elementselect">
			<label for="course">course<sup style="color:red;">*</sup>:</label>
			<select name="cours" id="course" required>
				<option value=" ">select course</option>			
				<?php
					
					$sql_cour="select * from `course`";
					$result=get_data($sql_cour); 
					$updates=$result->fetchAll();
					foreach($updates as $update)
					{
		
				?>
				 
					<option value="<?php echo $update['name'];?>"><?php echo $update['name']; ?> </option>
					<?php } ?>
				 </select>
		</div>
		
		<div class="elementselect">
			<label for="timing">TIMING<sup style="color:red;">*</sup>:</label>
			<select name="timing" id="timing" required>
				<option value="" >select timing</option>
				<?php
				  $sql_dura="select * from `timing`";
				  $return=get_data($sql_dura);
				  $durt=$return->fetchAll();
				  foreach($durt as $durta)
				  {
					 
				?>
				  <option value="<?php echo $durta['time'];?>"><?php echo $durta['time'];?> </option>	
				  <?php }?>
				  
			</select>
		</div>
		
		
		
		<!--<label for="Query">Query Optional:</label>
		<textarea   id="query"name="query" placeholder="Write something.." </textarea>
		-->
		<br>
		
		<input type="hidden" name="flag" id="flag"value="submit">
        <input type="submit" name="submit" id="submit" value="submit" >
		
		</center>
	</form>
</div>
</div>
</body>
</html>
<?php
	include_once('footer.php');
?>