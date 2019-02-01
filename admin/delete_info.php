<?php 
	$roomid=$_POST["roomid"];
	
	include("../db.php");
	$query="delete from roomtb where Roomid=$roomid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Delete Success!");window.location.href="Admin.php?id=Delete";</script>';
	}
	else
	{
		echo '<script> alert ("Delete Fail!")</script>';
	}
?>