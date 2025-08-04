<?php 
  ob_start();
  include_once('../code/config.php');
  include_once('header.php');
if(isset($_POST['flag']) && $_POST['flag']=='submit')
{
	
	/*$d=mysql_real_escape_string($_POST['name']);*/
	
		$folder="../img_upload/faculty/".$_FILES['pic']['name'];
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $folder))
		{
            $msg = "Images upload successfully";
        }
		else
		{
            $msg = "Failed to upload images";
		}
	 
	echo $sql="insert into`faculty`(`name`,`description`,`doj`,`image`) values('".$_POST['name']."','".$_POST['des']."','".$_POST['doe']."','".$_FILES['pic']['name']."')";
	$result=insert_data($sql);
	if($result==1)
	{
		ob_clean();
		header('location:add_faculty.php?msg=Record Inserted Successfully');
		
	}
	else
	{
		ob_clean();
		header('location:add_faculty.php?msg=Record Not Inserted');
	}
}
?>
<html>
<head>
<title><?php echo $title;?></title>
<link rel="stylesheet"  href="../../style1.css" >
</head>
<body>
<!--<style>
#contentt
{
	width:90%;
	float:left;
	margin-left:5%;
	margin-right:5%;
}
#contentt .wrap-inn
{
	width:100%;
	float:left;
	margin-top:5%;
	
}
input[type=submit] 
{
	width:20%;
	margin-bottom:2%;
}

input[type=file] 
{
		padding-top:2%;
		
		
		padding-bottom:2%;
}
</style>-->
<style>
#contentt
{
	width:90%;
	float:left;
	margin-left:5%;
	margin-right:5%;
	
}
#contentt .wrap-inn
{
	width:100%;
	float:left;
	margin-top:5%;
	
	
}
#contentt .wrap-inn .element
{
	
	background-color:#c2d6d6;
	
}
input[type=submit] 
{
	width:20%;
	margin-bottom:2%;
}

#contentt .wrap-inn .element input[type=file], select, textarea
{
	width: 50%;
	padding: 13px;
	border: 1px solid #ccc;
	border-radius: 5px;
	/*box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:14px;
	margin-bottom:35px;
}
#contentt .wrap-inn .element input[type=date], select, textarea
{
	width: 48%;
	padding: 13px;
	border: 1px solid #ccc;
	border-radius: 5px;
	/*box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:14px;
	margin-bottom:35px;
}
#contentt .wrap-inn .element input[type=text], select, textarea
{
	width: 48%;
	padding: 13px;
	border: 1px solid #ccc;
	border-radius: 5px;
	/*box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:14px;
	margin-bottom:35px;
}
#contentt .wrap-inn .element input[type=textarea], select, textarea
{
	width: 48%;
	padding: 13px;
	border: 1px solid #ccc;
	border-radius: 5px;
	/*box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:14px;
	margin-bottom:35px;
}

</style>
 <center><div id="contentt">
	<div class="wrap-inn">
		<h2 style="font-size:40px;color: #006699;text-align:center"> <u><b>ADD FACULTY</u></b></h2>
			<form action="" method="POST" enctype="multipart/form-data" autocomplete>
				<?php
					/*if(isset($_GET['msg']))
						echo $_GET['msg']; */
				?>
				<div class="element">				
					<label for "name"> Name :</label>
					<input type="text" name="name" placeholder="Enter name"pattern="^[a-zA-Z][a-zA-Z ]*$" title="please enter only alphabets" autofocus Required>
				</div>
				<div class="element">
					<label for "des">Description :</label>
					<input type="text" name="des" id="des" Required>
				</div>
				
				
				<div class="element">
					<label for "doe">Date of Joining :</label>
					<input type="date" name="doe" id="doe" Required>
				</div>
				
				
				
				<div class="element">
					<label for="pic">Select a file :</label>
					<input type="file" id="pic" name="pic">		
				</div>
				<div class="element">
				<input type="hidden" name="flag" id="flag" value="submit">
				<input type="submit" name="submit" id="submit" value="Add Faculty">
				</div>
			</form>
	</div>
</div></center>
</body>
</html>
<?php
	include_once('footer.php');
?>	