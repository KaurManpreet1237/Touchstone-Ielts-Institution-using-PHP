<?php
$title="login form"; ob_start();
  include_once('../code/config.php');
	include_once('header.php');

$msg="";
if(isset($_GET['flag']) && $_GET['flag']=='delete')
{
	
	$msg='Record Not Deleted';
	$id = $_GET['id']; 
	$sql="delete from `achievements` where `id`='" . $id ."'";
	$count=delete_data($sql);
	if($count==1)
	{
		ob_clean();
		header('location:manage_achievement.php?msg=Record Deleted');
	}
	else
	{
		ob_clean();
		header('location:manage_achievement.php?msg=Record Not Deleted');
	}
	
}
?>
<html>
<head>
<title><?php echo $title;?></title>
<link rel="stylesheet" href="../../style1.css">
</head>
<body>

	<center><h2 style="font-size:40px;color: #006699;text-align:center;margin-top:15%;margin-bottom:-15%;"> <b><u> MANAGE ACHIEVEMENTS</u></b></h2></center>
	
	<table id="tab"  border="5px" width="95%" style="background-color:#c2d6d6;">
		<tr><th>S.No</th><th>name</th><th>description</th><th>doe</th><th>images</th><th colspan=2>Operations</th></tr>
		<?php
			//$conn=connection();
			$sql_news="select * from `achievements` order by `doe` desc";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr><td><?php echo $sr;?></td>
				<td><?php echo $new['description'];?></td>
				<td><?php echo $new['doe'];?></td>
				<td style="text-align:center;"><img src="../img_upload/awards/<?php echo $new['image'];?>"width="150" height="150"></td>
				
				<td><a href='update_achievement.php?id=<?php echo $new['id'];?>&flag=Update'><h3  style="color:green;">Update</h3></a></td>
				<td><a href='manage_achievement.php?id=<?php echo $new['id'];?>&flag=delete'><h3  style="color:red;">Delete</h3></a></td></tr>
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
