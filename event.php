<?php
 ob_start();
  include_once('code/config.php');
  
include_once('header.php');


/*$msg="";
if(isset($_GET['flag']) && $_GET['flag']=='delete')
{
	$msg='Record Not Deleted';
	$id = $_GET['id']; 
	$sql="delete from `events` where `id`='" . $id ."'";
	$count=delete_data($sql);
	if($count==1)
	{
		ob_clean();
		header('location:events_manage.php?msg=Record Deleted');
	}
	else
	{
		ob_clean();
		header('location:events_manage.php?msg=Record Not Deleted');
	}
	
}*/
?>
<html>
<head>
<link rel="stylesheet"  href="style1.css" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float three columns side by side */
.column {
  float: left;
  width: 33.3%;
  padding: 10px 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 1000px) {
  .column {
    width: 50%;
    display: block;
    margin-bottom: 20px;
  }
}

@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}


/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 12px;
  text-align: center;
  background-color: #f1f1f1;
  transition: 0.3s;
  border-radius: 10px;
  height:400px;
}

.card:hover {
  box-shadow: 0 4px 30px 0 rgba(0,0,0,0.4);
}

img {
  border-radius: 10px 10px 10px 10px;
}
</style>

<title><?php echo $title;?></title>
</head>
<body>
<div id="event-one">
<div class="event-top" style="margin-top:250;text-align:center;">
<h1 style="color:#006699;"><u><b>Latest Events</b></u></h1>

</div>
<?php
			//$conn=connection();
			$sql_news="select * from `events` order by `doe`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>

<div class="row">

<div class="column">
<div class="card">
<img src="backend/img_upload/events/<?php echo $new['images'];?>"width="350"height="200">
<h2 style="color:black;"><?php echo $new['name'];?></h2>
<p style="color:black;"><?php echo $new['description'];?></p>
  
</div>
</div>

<?php $sr=$sr+1;
			}
			$conn=null;
		?>
</div>

</div>
<!--<a href="#" target="_blank">
<div class="column">
<div class="card">
<img src="https://www.iliketowastemytime.com/sites/default/files/imagecache/blog_image/space-wallpapers-1920x1200.jpg" style="width:100%">
<h2>Title</h2>
  <p>Text</p>
</div>
</div>

<a href="#" target="_blank">
<div class="column">
<div class="card">
<img src="" style="width:100%">
<h2>Title</h2>
  <p>Text</p>
</div>
</div>-->



	<!--<h2> Events Details</h2>
	
	<table class="tab" border="5px" width="100%">
		<tr><th>S.No</th><th>name</th><th>description</th><th>doe</th><th>images</th></tr>
		<?php
			//$conn=connection();
/*$sql_news="select * from `events` order by `doe`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
						
				?>
				<tr>
				<td><?php echo $sr;?></td>
				<td><?php echo $new['name'];?></td>
				<td><?php echo $new['description'];?></td>
				<td><?php echo $new['doe'];?></td>
				<td style="text-align:center;"><img src="backend/img_upload/<?php echo $new['images'];?>"width="300"height="200"></td>
				</tr>;
				<?php $sr=$sr+1;
			}
			$conn=null;*/
		?>
	</table>	
</div>-->	
</body>
</html>
<?php
include_once('footer.php');
?>