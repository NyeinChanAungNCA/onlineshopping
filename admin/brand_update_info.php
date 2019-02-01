<?php 
	$brandid=$_POST["brandid"];
	$branddesc=$_POST["branddesc"];
	
	include("db.php");
	$query="update brandtb set branddescription='$branddesc' where brandid=$brandid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Update Success!");window.location.href="index.php?id=brandUpdate";</script>';
	}
	else
	{
		echo '<script> alert ("Update Fail!")</script>';
	}
?>