<?php
	include_once('header.php');
?>
<html>
	<head>
		<title>exam booking</title>
		<link rel="stylesheet"  href="style1.css" >
	</head>
<body> 
	<div id="booking1">
	<h1 style="font-size:50px;padding-top:50px;color:white;">EXAM BOOKING</h1>
	<h4 style="color:white;">created by leading academics</h4>
	</div>
	<div id="booking2">
		<table id="tab"  border="5px" width="95%" height="50%">
		<tr><th>S.No</th><th>COURSE</th><th>FEE</th><th>ACTION</th>
		<?php
			//$conn=connection();
			$sql_news="select * from `exam_course`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr><td><?php echo $sr;?></td>
				<td><?php echo $new['ename'];?></td>
				<td><?php echo $new['fee'];?></td>
				<td><a href="booking_form.php?id=<?php echo $new['id'];?>"><h4  style="color:green;">book now</h4></a></td>
				<!--<td><?php /*echo $new['description'];?></td>
				<td><?php echo $new['doj']*/?>
				</td>-->
				
				<!--<td><a href='faculty.php?id=<?php /*echo $new['id'];*/?>'><h3  style="color:green;">more details</h3></a></td>-->
				<?php $sr=$sr+1;
			}
			$conn=null;
		?>
	</table>	
	
	</div>








</body>
</html>
<?php
	include_once('footer.php');
?>