<?php 
	$categoryid=$_POST["categoryid"];
	$categorydesc=$_POST["categorydesc"];
	
	include("db.php");
	$query="update categorytb set categorydescription='$categorydesc' where categoryid=$categoryid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Update Success!");window.location.href="index.php?id=categoryUpdate";</script>';
	}
	else
	{
		echo '<script> alert ("Update Fail!")</script>';
	}
?>