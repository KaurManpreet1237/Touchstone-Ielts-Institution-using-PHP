
<?php
	include_once('header.php'); 
	include_once('../code/config.php');

	
?>
<html>
<head>
<link rel="stylesheet" href="../../style1.css">
<style>
.table-class
{
	
 padding-bottom:3%;
 margin-bottom:2%;
}



</style>
</head>
<body>
<center><div class="tab-name" style="margin-top:15%; color: #006699;"><h1><u><b>BOOKED EXAM DATA</b></u></h1></div></center>

<?php
			//$conn=connection();
			$sql_news="select * from `exam_info` ";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
	<table class="table-class">			
<table   border="2px" width="100%"  height="120" cellspacing="3px" >
		<tr style="background-color:#c2d6d6;" ><th>S.No</th><th>profile</th><th>NAME</th><th>father name</th><th>dob</th>
		<th>gender</th><th>passport</th><th>aadhar no</th><th>pan no</th><th>nationality</th></tr>
		<td><?php echo $sr;?></td>
				<td><?php echo $new['image'];?></td>
				<td><?php echo $new['name'];?></td>
				<td><?php echo $new['father_name'];?></td>
				<td><?php echo $new['dob'];?></td>
				<td><?php echo $new['gender'];?></td>
				<td><?php echo $new['passport'];?></td>
				<td><?php echo $new['aadhar_no'];?></td>
				<td><?php echo $new['pan_no'];?></td>
				<td><?php echo $new['nationality'];?></td>
				
		
				</table>
				<table   border="2px" width="100%" height="120" cellspacing="3px">

				<tr style="background-color:#c2d6d6;" ><th>PHONE NO</th><th>email</th><th>address</th><th>state</th>
					<th>city</th><th>district</th></tr>
				<td><?php echo $new['phno'];?></td>
			    <td><?php echo $new['email'];?></td>
				<td><?php echo $new['address'];?></td>
				<td><?php echo $new['state'];?></td>
				<td><?php echo $new['city'];?></td>
				<td><?php echo $new['district'];?></td>
				</table>
				
				<table   border="2px" width="100%" height="120" cellspacing="3px" style="margin-bottom:2%;">
				<tr style="background-color: #c2d6d6;"><th>course</th><th>fee</th><th>date of exam</th><th>timing</th></tr>

				<td><?php echo $new['course_id'];?></td>
				<td><?php echo $new['fee'];?></td>
				<td><?php echo $new['doe'];?></td>
				<td><?php echo $new['timing'];?></td>
				</tr>
				
	</table>
<?php $sr=$sr+1;
			}
			$conn=null;
		?>
		
		</table>

</body>
</html>
<?php
	include_once('footer.php');
?>