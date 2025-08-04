<?php
$title="login form"; ob_start();
  include_once('code/config.php');
	include_once('header.php');

$msg="";
/*if(isset($_GET['flag']) && $_GET['flag']=='delete')
{
	
	$msg='Record Not Deleted';
	$id = $_GET['id']; 
	$sql="delete from `events` where `id`='" . $id ."'";
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
	
}*/
?>
<html>
<head>
<title><?php echo $title;?></title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
	<div class="faculty1">
		<h1 style="font-size:50px;padding-top:50px;color:white;">FACULTY</h1>
	    <h4 style="color:white;">created by leading academics</h4>
	</div>			
	
	<table id="tab"  border="5px" width="95%">
		<tr><th>S.No</th><th>images</th><th>name</th>
		<?php
			//$conn=connection();
			$sql_news="select * from `faculty`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr><td><?php echo $sr;?></td>
				<td style="text-align:center;"><img src="backend/img_upload/faculty/<?php echo $new['image'];?>"width="150" height="150"></td>
				<td><?php echo $new['name'];?> <br>
				<a href="faculty.php?id=<?php echo $new['id'];?>"><h4  style="color:green;">more details >></h4></a>

				</td>
				<!--<td><?php /*echo $new['description'];?></td>
				<td><?php echo $new['doj']*/?>
				</td>-->
				
				<!--<td><a href='faculty.php?id=<?php /*echo $new['id'];*/?>'><h3  style="color:green;">more details</h3></a></td>-->
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
