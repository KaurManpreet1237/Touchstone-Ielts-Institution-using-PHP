<?php 
ob_start();
	include_once('header.php');
 include_once('../code/config.php');
 
$msg="";
	$id=$_GET['id'];
	$sql="select * from `faculty` where `id`='".$id."'";
	$return=get_data($sql);
	$news=$return->fetchAll();
 
	//code to update the data
	
if(isset($_POST['flag']) && $_POST['flag']=='update')
{
	
	if(isset($_POST['check']))
	{
		$folder="../img_upload/faculty/".$_FILES['pic']['name'];
		if (move_uploaded_file($_FILES['pic']['tmp_name'], $folder)) 
		{
            $msg = "Image upload successfully";
        }
		else
		{
            $msg = "Failed to upload image";
        }
		unlink("../img_upload/faculty/".$_POST['imgx']);
		 
		 $sql="update `faculty` set `name`='".$_POST['name']."',`description`='".$_POST['des']."',`doj`='".$_POST['doe']."',`image`='".$_FILES['pic']['name']."' where `id`=".$id;
	}
	else
	{ 	
$sql="update `faculty` set `name`='".$_POST['name']."',`description`='".$_POST['des']."',`doj`='".$_POST['doe']."' where `id`=".$id;
}
		
		 $result=update_data($sql);
		
		 if($result==1)
		 {
			ob_clean();
			header('location:manage_faculty.php?msg=Record Updated');
		 }
		 else
		 {
			 header('location:manage_faculty.php?msg=Record not Updated');
		 }
	/*}*/	 
	/*else
	{
		$msg='Check the Checkbox';
	}*/
}	



 
?>
<html>
<head>
<title><?php echo $title;?></title>
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
<link rel="stylesheet" href="../../style1.css">
</head>
<body>
<center><div id="contentt">
	<div class="wrap-inn">
		<h2 style="font-size:40px;color: #006699;text-align:center"><u><b>UPDATE FACULTY </u></b></h2>
			
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="msg">
			<?php echo $msg;?>
		</div>

			<input type="hidden" name="eventsid" value="<?php echo $id?>">
			
		<div class="element">
			<label for "name">Name:</label>
			<input type="text" name="name" value="<?php echo $news[0]['name'];?>"pattern="^[a-zA-Z][a-zA-Z ]*$" title="please enter only alphabets" Required>
		</div>
		
		
		<div class="element">
			<label for "des">Description:</label>
			<input type="textarea" name="des" value="<?php echo $news[0]['description'];?>" Required>
		</div>
		
		
		<div class="element">
			<label for "doe">Date of Joining:</label>
			<input type="date" name="doe" id="doe" value="<?php echo $news[0]['doe'];?>" Required>
		</div>
		<div class="element">
			<label for="pic">Old Image:</label>
			<img src="../img_upload/faculty/<?php echo $news[0]['image'];?>"/>		
		</div>
		<div class="element">
			<label for="pic">Select a file:</label>
			<input type="file" id="pic" name="pic">		
		</div>
		<div class="element">
		want to change image? <input type="checkbox" name="check" value="1">
		
			
		</div>
		<div class="element">
		<input type="hidden" name="imgx" value="<?php echo $news[0]['image'];?>">
		<input type="hidden"id="flag" name="flag" value="update">
		<input type="submit" name="submit" value="Update">
		</div>
		
		<!--<div class="element">
		<input type="hidden" name="flag" value="update">

			<input type="submit" name="submit" value="Update Event">
		</div>	-->
   </form>		
		</div>
	</div></center>
</body>
</html>
<?php	
	include_once('footer.php');
?>


