<?php 
	$brandid=$_POST["brandid"];
	
	include("../db.php");
	$query="delete from brandtb where brandid=$brandid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Delete Success!");window.location.href="index.php?id=brandDelete";</script>';
	}
	else
	{
		echo '<script> alert ("Delete Fail!")</script>';
	}
?>