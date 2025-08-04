<?php
ob_start();
	include_once('header.php');
	include_once('../code/config.php');
	$id=$_GET['id'];
	if(isset($_POST['flag'])&& $_POST['flag']=='update')
	{
		ob_clean();
		echo "in update";
		$sql_up="update `call_back` set `status`='".$_POST['status']."' where `id`='".$id."' ";
		echo "after update query";
		$count=update_data($sql_up);
		echo " update";
		if($count==0)
		{
			ob_clean();
			header('location:call_back_data.php?msg=Updated');
		}
		else
		{
			header('location:update_status.php?msg=Not Updated');
		}
	}
?>
<html>
	<head>
		<title>update status</title>
		<link rel="stylesheet" href="../../style1.css">
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
	margin-bottom:2%;
}
.manage_class .element input[type=text], select
{
	width: 30%;
	padding: 6px;
	border: 1px solid #ccc;
	
	
	margin-top:10px;
	margin-bottom:35px;
}
.manage_class .element label
{
	width:10%;
	float:left;
	margin-left:30%;
	margin-top:10px;
	
}
.manage_class .element input
{
	text-align:center;
	margin-left:-13%;
	
}
</style>
	</head>
<body>
	<form name="form1" method="POST" action="">

<div class="manage_class">
<h1 style="font-size:40px;color: #006699;text-align:center"><u><b> UPDATE CALL STATUS</b></u></h1>
		<div class="element">
		<label for="status">STATUS:</label>
				 <input type="text" name="status"pattern="[y||n]{1}" title="please enter only y/n">
				 
		</div>
		<div class="element">
		<input type="hidden" name="flag" id="flag" value="update">
		<input type="submit" id="submit"class="btn" value="update">
		
		</div>
</div>
	</form>
</body>

</body>
</html>
<?php
	include_once('footer.php');
?>