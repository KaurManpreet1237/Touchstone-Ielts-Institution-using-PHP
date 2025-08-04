<?php
ob_start();
	include_once('header.php');
  include_once('../../code/config.php');
   

if(isset($_GET['flag']) && $_GET['flag']=='delete')
{
	 $msg='record not deleted';
	 $id = $_GET['id'];
	 $sql="delete from `timing` where  `id`='" . $id ."'";
	 $count=delete_data($sql);
	   
	   if($count==1)
	   {
		   ob_clean();
		   header('location:manage_course.php?name=Managecourse&msg=record deleted');
	   }
       else
	   {
          ob_clean();
           header('location:manage_course.php?name=Managecourse&msg=record not deleted');
	   }
}
?>
<html>
<head> 
<title>Manage course</title>
<style>
.manage_class
{
	margin-top:15%;
	margin-bottom:5%;
	
}
.manage_class table
{
	width:80%;
	background-color:#c2d6d6;
}

</style>
<link rel="stylesheet" href="../../style1.css">
</head>
</body>
<div class="manage_class">
<h2 style="font-size:40px;color: #006699;text-align:center"><b><u>MANAGE TIMING</u></b></h2>
	<table border="2" align="center" height="300">
		<tr>
			<th> Sr_no. </th>
			<th> timing</th>
			<th colspan=2>Operations</th>
		</tr>
	
	<?php
		$sql_cr="select * from `timing`";
		$result=get_data($sql_cr);
		$courses=$result->fetchAll();
		$ptr=1;
		
		foreach($courses as $course)
		{
			/*$sql_tim="select`time` from `timing` where `id`='".$course['time_id']."'";
			$return=get_data($sql_tim);
			$tims=$return->fetchAll();*/
			?>
	<tr>
		<td><?php echo $ptr; ?> </td>
		<td><?php echo $course['time']; ?></td>
		<td><a style="color:green;"href="update_timing.php?id=<?php echo $course['id']; ?>"> Update </a></td>
		<td><a style="color:red;"href="manage_timing.php?id=<?php echo $course['id']; ?>&flag=delete">delete</a></td>
	</tr>
		<?php 
			$ptr=$ptr+1;
		}
		?>
		</table>
</div>
	</body>
</html>
<?php
	include_once('footer.php');
?>		
		
		