<?php 
	$categoryid=$_POST["categoryid"];
	
	include("../db.php");
	$query="delete from categorytb where categoryid=$categoryid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Delete Success!");window.location.href="index.php?id=categoryDelete";</script>';
	}
	else
	{
		echo '<script> alert ("Delete Fail!")</script>';
	}
?>