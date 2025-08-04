<?php
 include_once('header.php');
  include_once('../code/config.php');
  if(isset($_GET['flag']) && $_GET['flag']=='delete')
{
	
	$msg='Record Not Deleted';
	$id = $_GET['id']; 
	$sql="delete from `call_back_data` where `id`='" . $id ."'";
	$count=delete_data($sql);
	if($count==1)
	{
		ob_clean();
		header('location:manage_faculty.php?msg=Record Deleted');
	}
	else
	{
		ob_clean();
		header('location:manage_faculty.php?msg=Record Not Deleted');
	}
	
}

?>
<HEAD><link rel="stylesheet" href="../../style1.css"></HEAD>
<body>
<div id="tab">
<div class="tab-name"><h1><u><b>LATEST CALL BACK DATA</b></u></h1></div>
<table   border="5px" width="100%" height="150" style="background-color:#c2d6d6;">
		<tr><th>S.No</th><th>NAME</th><th>PHONE NO</th><th>Message</th><th>STATUS</th><th colspan=2>STATUS ACTIVITY</th>
		<?php
			//$conn=connection();
			$sql_news="select * from `call_back` where status='n'";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr><td><?php echo $sr;?></td>
				<td><?php echo $new['name'];?></td>
				<td><?php echo $new['phno'];?></td>
				<td><?php echo $new['message'];?></td>
				<td><?php echo $new['status'];?></td>
				<td><a href='update_status.php?id=<?php echo $new['id'];?>&flag=Update'><h3 style="color:green;">Update</h3></a></td>
				<td><a href='manage_faculty.php?id=<?php echo $new['id'];?>&flag=delete'><h3  style="color:red;">Delete</h3></a></td></tr>

				
				
				<?php $sr=$sr+1;
			}
			$conn=null;
		?>
	</table>
<div class="tab-name"><h1><u><b>CALL BACK DATA</b></u></h1></div>
<table   border="5px" width="100%"height="300" style="background-color:#c2d6d6;">
		<tr><th>S.No</th><th>NAME</th><th>PHONE NO</th><th>Message</th><th>STATUS</th><th colspan=2>STATUS ACTIVITY</th>
		<?php
			//$conn=connection();
			$sql_news="select * from `call_back` where status='y'";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr><td><?php echo $sr;?></td>
				<td><?php echo $new['name'];?></td>
				<td><?php echo $new['phno'];?></td>
				<td><?php echo $new['message'];?></td>
				<td><?php echo $new['status'];?></td>
				<td><a href='update_status.php?id=<?php echo $new['id'];?>&flag=Update'><h3 style="color:green;">Update</h3></a></td>
				<td><a href='call_back_data.php?id=<?php echo $new['id'];?>&flag=delete'><h3  style="color:red;">Delete</h3></a></td></tr>

				
				
				<?php $sr=$sr+1;
			}
			$conn=null;
		?>
	</table>
</div>	

</body>
<?php
 include_once('footer.php');
?>