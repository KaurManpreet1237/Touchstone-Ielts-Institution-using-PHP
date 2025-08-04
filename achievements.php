<?php
	include_once('header.php');
?>
<html>
<head>
	<title>achievements</title>
	<link rel="stylesheet"  href="style1.css" >
</head>
<body>
<div id="ach1">
		<h1 style="font-size:50px;padding-top:50px;color:white;">ACHIEVEMENTS</h1>
	    <h4 style="color:white;">created by leading academics</h4>
</div>	
<div id="ach2">
	<h2 style="font-size:50px;color:#006699; text-align:left;padding-bottom:20px;"><b>TOUCHSTONE ACHIEVEMENTS</b></h2>
	<ul>
		<li><h4 style="font-size:25px;">Touchstone has always been a trendsetter in the market and has many achievements to its credit.</h4></li>
		<li><h4 style="font-size:25px;">Touchstone has consistently performed as a top IELTS training institute since 2009. 
		    IDP has awarded Touchstone the No.1 IELTS Institute of India Award for 9 consecutive years – from 2009 to 2017.</h4></li>
		<li><h4 style="font-size:25px;">Touchstone is the winner of the Global Achievers award 2017.</h4></li>
		<li><h4 style="font-size:25px;">BCD has awarded us as the Best IELTS training institution in Punjab.</h4></li>
		<li><h4 style="font-size:25px;">BCD has rated us as the number 1 IELTS training institution in our region of business.</h4></li>
		<li><h4 style="font-size:25px;">We have been bestowed by BCD as the best IELTS training institution in North India.</h4></li>
		<li><h4 style="font-size:25px;">BCD has conferred us as the best IELTS training institution in India.</h4></li>
		<li><h4 style="font-size:25px;">We have also won the Premium Plus award from BCD for delivering outstanding IELTS training solutions.</h4></li>
        <li><h4 style="font-size:25px;">Touchstone is a Platinum Plus Member of the British Council Division (BCD).</h4></li>
        <li><h4 style="font-size:25px;">Touchstone has developed a state of the art IELTS Training App for our students: TESOL, 
		so that they can keep practising and honing their reading, writing and speaking skills, even when they are not in the class.
		The exercises available on the App are in sync with the syllabus covered in the class.</h4></li>
        <li><h4 style="font-size:25px;">Touchstone has a world-class IELTS training methodology and a customer-centric 
		approach which has been instrumental in winning client trust.</h4></li>
        <li><h4 style="font-size:25px;">Touchstone is officially associated with over 100 colleges and universities across
		Canada, Australia, and New Zealand.</h4></li>
        <li><h4 style="font-size:25px;">Touchstone has an impeccable Visa counselling and filing process, which has resulted
		in the highest proportion of students succeed in getting visas for Canada, Australia, and New Zealand.</h4></li>
    </ul>
</div>
<div id="ach3">
	
	   <a href="achievements.php#ach3"> <button style="font-size:50px; text-align:center;color:#006699; width:80%;">IDP AWARDS</button></a>
    
<!--<div class="ach3-r">
		<button <button style="font-size:50px; text-align:center;color:#006699;  width:80%;">  BCD AWARDS</button>
    </div>-->
	<?php
			//$conn=connection();
			$sql_news="select * from `achievements` order by `doe` desc";
			$result_news=get_data($sql_news);
			$news=$result_news->fetchAll();
			
			$sr=1;
			foreach($news as $new)
			{
				?>
				
	<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="backend/img_upload/awards/<?php echo $new['image'];?>"  style="width:400px;height:300px;">
    </div>
    <div class="flip-card-back">
      <h2><?php echo $new['description'];?></h2> 
	  <h3><?php echo $new['doe'];?></h3>
      
    </div>
  </div>
</div>

<?php
			}
			
		?>
</div>
</body>
</html>
<?php
	include_once('footer.php');
?>