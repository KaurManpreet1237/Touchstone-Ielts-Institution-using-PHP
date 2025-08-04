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
<div class="faculty1">
		<h1 style="font-size:50px;padding-top:50px;color:white;">FACULTY</h1>
	    <h4 style="color:white;">created by leading academics</h4>
	</div>	
<div id="faculty">	

	<div class="faculty2">
	<hr>
	<?php
			//$conn=connection();
			/*$sql_news="select * from `faculty`";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{*/
			$id=$_GET['id'];
			$sql="select * from `faculty` where `id`=".$id;
			$return=get_data($sql);
			$news=$return->fetchAll();
			foreach($news as $new)
			{
?>	
	<div class="faculty2-l">
		<img src="backend/img_upload/faculty/<?php echo $new['image'];?>"width="350"height="350"border="">
	</div>
	<div class="faculty2-r">
	  <h1><b><?php echo $new['name'];?></b></h1>
	  <hr>
	  <h1 style="font-size:30px;color: #006699;"><b>RESEARCH & AREAS OF INTERESTS/SPECIALIZATION</b></h1>
	  <hr>
	  <h3><?php echo $new['description'];?></h3>
	  <h1 style="font-size:30px;color: #006699;"><b>EXPERIENCE</b></h1>
	  <?php
			$sql="select * from `faculty` where `id`=".$id;
			$result_news=get_data($sql);
			$dates=$result_news->fetchAll();
			foreach($dates as $date)
			{
			$d1=date_create(date('Y-m-d'));
			$d2=date_create($date['doj']);
			$diff=date_diff($d1,$d2);
			$days=abs($diff->format("%R%a days"));
			$y=intval($days/365);
			$m=intval(($days%365)/30);
			$d=intval($days-365*$y-$m*30);
			if($y==0 && $m==0)
			{
				$experience=$d." Days";
			}elseif($y==0)
			{
				$experience=$m." Months ".$d." Days";
			}else
			{
				$experience=$y." Years ".$m."Months ".$d." Days";
			}
			}
			/*$edate=$cdate->diff('$date');
			$exp=$edate('Y');*/
			?>
			
			<h3><?php echo $experience;?> </h3>
			

	</div>
	<?php 
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