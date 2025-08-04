<?php
function connection()
{
	$dsn="mysql:host=localhost;dbname=db_touchstone";
	$username="root";
	$password="";
	try
	{
		$conn=new PDO($dsn,$username,$password );                                                                                                                         
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo connected
		return $conn;
	}
	catch(PODException $e)
	{
		echo"not connection";
		return 0;
	}
}

function get_data($sql)
{
	$conn=connection();
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	return $stmt;
}
function insert_data($sql)
{
	$conn=connection();
	$row=$conn->exec($sql);
	return $row;
}
function delete_data($sql)
{
	$conn=connection();
	$row=$conn->exec($sql);
	return $row;
}
function update_data($sql)
{
	$conn=connection();
	$row=$conn->exec($sql);
	return $row;
}


?>
