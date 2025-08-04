<?php
	ob_start();
	include_once('header.php');
	include_once('../code/config.php');
	$id=$_GET['id'];
	
	/**$sql_update="select * from `course` where id=".$id;
	$result=get_data($sql_update);
	$res_up=$result->fetchAll();**/
	if(isset($_POST['flag'])&& $_POST['flag']=='update')
	{
		ob_clean();
		echo "in update";
		$sql_up="update `exam_date` set `edate1` ='".$_POST['name1']."',`edate2`='".$_POST['name2']."' where `id`=".$id;
		echo "after update query";
		$count=update_data($sql_up);
		echo " update";
		if($count==0)
		{
			header('location:manage-exam-date.php?msg=  Updated');
		}
		else
		{
			header('location:manage-exam-date.php?msg= Not Updated');
		}
	}
		
?>

<html>
<head>
<title> update form</title>
<link rel="stylesheet" href="../../style1.css">
<!--<style>
.manage_class
{
	margin-top:15%;
	margin-bottom:5%;
	
}
.manage_class .element
{
	font-weight:normal;
	border-radius: 5px;
    padding:  5px 0px;
    text-align:center;
	margin-left:10%;
	margin-right:10%;
}
.manage_class .element input[type=submit] 
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
.manage_class .element input[type=text], select, textarea
{
	width: 40%;
	padding: 6px;
	border: 1px solid #ccc;
	
	
	margin-top:10px;
	margin-bottom:35px;
}
.manage_class .element label
{
	width:11%;
	float:left;
	margin-left:20%;
	margin-top:10px;
	
}
.manage_class .element input, select
{
	text-align:center;
	margin-left:-5%;
	
}
</style>-->
<style>
.manage_class
{
	margin-top:15%;
	margin-bottom:5%;
	
	
}
.manage_class .element
{
	font-weight:normal;
	border-radius: 5px;
    padding:  5px 0px;
    text-align:center;
	margin-left:10%;
	margin-right:10%;
	background-color:#c2d6d6;
}
.manage_class .element input[type=submit] 
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
.manage_class .element input[type=date], select, textarea
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
}
.manage_class .element label
{
	width:11%;
	float:left;
	margin-left:20%;
	margin-top:10px;
	
}
.manage_class .element input, select
{
	text-align:center;
	margin-left:-5%;
	
}	
</style>
</head>
<body>
<form name="form1" method="POST" action="">

<div class="manage_class">
<h1 style="font-size:40px;color: #006699;text-align:center"><b><u> UPDATE EXAM COURSE DATE:</u></h1>
		<div class="element">
						
				<?php
					$id=$_GET['id'];
					$sql_cour="select * from `exam_date` where `id`='".$id."'";
					$result=get_data($sql_cour); 
					$updates=$result->fetchAll();
					foreach($updates as $update)
					{
		
				?>
				 <label for="name" class="label_name">Date 1:</label>
				 <input type="date" name="name1" value="<?php echo $update['edate1'];?>" class="name" >
				 <?php }?>
		</div>


		<div class="element">
		<label for="name">Date 2:</label>
		<input type="date"name="name2" value="<?php echo $update['edate2'];?>">
		</div>

		
		
		<div class="element">
		<input type="hidden" name="flag" id="flag" value="update">
		<input type="submit" id="submit"class="btn" value="update">
		
		</div>
</div>
	</form>
</body>
</html>
<?php
	include_once('footer.php');
?>