<?php
 /** $title="login form";*/
 ob_start();
  include_once('header.php');
  include_once('../../code/config.php');
   
    if(isset($_POST['flag'])&& $_POST['flag']=='submit')
	{
		echo "inside flag";
		$sql_cour="select `time` from `timing` where `time`='".$_POST['time']."'";
		$return=get_data($sql_cour);
		$count=$return->rowCount();
          if($count==0)
		  {
			  ob_clean();
			$sql_ins="insert into `timing`(`time`) values('".$_POST['time'].")";
            echo "after insert";
			
			$return=insert_data($sql_ins);
			echo "after insert data function";
			header('location:add_fee.php?msg=record inserted');
		  }
		  else
		   {
			   ob_clean();
			    header('location:add_fee.php?msg=record already exists');
				
		   }
       		   
    }
?>
<html>
<head>
<title>Add courses</title>
<link rel="stylesheet" href="style1.css">
<style>
.manage_class
{
	margin-top:15%;
	margin-bottom:5%;
	
}
.manage_class .element
{
	font-weight:normal;
	border-radius: 5px;
    padding:  5px 0px;
    text-align:center;
	margin-left:10%;
	margin-right:10%;
	
	
	
}
.manage_class .element input[type=submit] 
{
	width:25%;
	background-color: red;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 0px;
	text-align:center;
	float:center;
	margin-bottom:2%
}
.manage_class .element input[type=text], select, textarea
{
	width: 40%;
	padding: 6px;
	border: 1px solid #ccc;
	/*border-radius: 5px;
	box-sizing: border-box;
	height:30px;*/
	text-align:center;
	margin-top:10px;
	margin-bottom:35px;
}
.manage_class .element label
{
	width:11%;
	float:left;
	margin-left:20%;
	margin-top:10px;
	
}
.manage_class .element input, select
{
	text-align:center;
	margin-left:-5%;
	
}	
</style>
</head>
<body>

<form action=" " method="POST">
<div class="manage_class">
<h1  style="font-size:40px;color: #006699;text-align:center"><b><u>ADD TIMING</u></b></h1>
    <div class="element">
      <label for="name" > TIMING:</label>
      <input type="text" id="time" name="time" >
    </div>
	
	<!-- <div class="element">
      <label for="fee">FEE :</label>
      <input type="text" name="fee">
    </div>
	<div class="element">
      <label for="duration">DURATION :</label>
      <input type="text" name="duration">
    </div>
    <div class="element">
      <label for="duration" > duration:</label>
      <select name="duration" id="duration" >
	  <option value="">duration</option>
	
	  </select>
	  </div>
	  
	  <div class="element">
      <label for="time" > SELECT TIMING :</label>
      <select name="time" id="time">
	  <option value="">select timing</option>
	<?php
	  $sql_time="select * from `timing`";
	  $return=get_data($sql_time);
	  $tim=$return->fetchAll();
	  foreach($tim as $time)
	  {
	?>
      <option value="<?php echo $time['id'];?>"><?php echo $time['time'];?></option>	
	  <?php }?>
	  
	  </select>
	</div>-->
   
	<div class="element">
    <input type="hidden" name="flag" id="flag" value="submit">
	<input type="submit" id="submit" value="submit"></center> 
	</div>
</div>
</form>
</body>
</html>
<?php
	include_once('../../footer.php');
?>