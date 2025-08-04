<?php
	ob_start();
  include_once('code/config.php');
	include_once('header.php');
?>
<html>
<head>
	<title>faculty</title>
	<link rel="stylesheet"  href="style1.css" >
</head>
<body>
<?php
			//$conn=connection();
			$sql_news="select * from `faculty`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
?>						
<div id="faculty">
	<div class="faculty1">
		<h1 style="font-size:50px;padding-top:50px;color:white;">FACULTY</h1>
	    <h4 style="color:white;">created by leading academics</h4>
	</div>
	<div class="faculty2">
	
	<div class="faculty2-l">
		<img src="backend/img_upload/faculty/<?php echo $new['image'];?>"width="350"height="200">
	</div>
	<div class="faculty2-r">
	  <h1>manpreet</h1>
	</div>
	<?php $sr=$sr+1;
			}
			$conn=null;
		?>
	
	</div>
</div>
</body>
</html>
<?php
	include_once('footer.php');
?>
<!--<div class="box">
  <img src="img_avatar2.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>Jane Doe</b></h4> 
    <p>Interior Designer</p> 
  </div>
</div>-->