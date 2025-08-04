<?php
ob_start();
	include_once('header.php');
	include_once('code/config.php');
	
	if(isset($_POST['flag']) && $_POST['flag']=='submit')
	{
		$sql="insert into`review_data`(`name`,`date`,`review`)values('".$_POST['nm']."','".$_POST['doe']."','".$_POST['review']."')";
		$result=insert_data($sql);
		echo "inside the form";
		if($result==1)
		{
			ob_clean();
			echo "inside the form";
		  header('location:review_form.php?msg=Record inserted successfuly');
		}
		else
		{
			header('location:review_form.php?msg=Record not inserted');
		}
	}
	ob_flush();
?>
<html>

<head>
	<!--<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">-->
	<link rel="stylesheet" href="style1.css">

</head>

<body>
<div id="review-form">
<form name="form1"action="#" method="POST">
	<div class="container">
		<h1 style="font-size:40px;color: #006699;text-align:center"><b>TOUCHSTONE INSTITIUTION</b></h1>
		
		<div class="element">
		<label for="name">Name:</label>
		<input type="text"Name="nm"size="20"maxlength="20" pattern="^[a-zA-Z][a-zA-Z ]*$" title="please enter only alphabets"required>
		</div>
		
		
		<div class="element">
					<label for "doe">Date :</label>
					<input type="date" name="doe" id="doe" Required>
				</div>
		
		<div class="element">
		<p> Share your review:</p>
		<textarea  class="review" name="review" placeholder="Write something.." style="height:100px; width:200px" ></textarea>
		</div>
		
		<div class="element">
		<!--<button id="submit">Submit</button>
		<div class="reviews" id="reviews">-->
		<input type="hidden" name="flag" id="flag" value="submit" >
        <input type="submit" id="submit" value="submit">
		</div>
		</div>
		</form>
	</div>

</body>

</html>
<?php
	include_once('footer.php');
?>