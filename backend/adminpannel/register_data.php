<?php
 include_once('header.php');
  include_once('../code/config.php');

?>
<HEAD>
<link rel="stylesheet" href="../../style1.css">

</HEAD>
<body>
<div id="tab">
<div class="tab-name"><h1><u><b> REGISTERED STUDENTS DATA</b></u></h1></div>

<table   border="5px" width="100%" height="500" style="background-color:#c2d6d6;">
		<tr><th>S.No</th><th>NAME</th><th>PHONE NO</th><th>EMAIL</th><th>COURSE</th><th>BATCH</th></tr>
		<?php
			//$conn=connection();
			$sql_news="select * from `registration`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr><td><?php echo $sr;?></td>
				<td><?php echo $new['name'];?></td>
				<td><?php echo $new['phno'];?></td>
				<td><?php echo $new['email'];?></td>
				<td><?php echo $new['course'];?></td>
				<td><?php echo $new['timing'];?></td>
				
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