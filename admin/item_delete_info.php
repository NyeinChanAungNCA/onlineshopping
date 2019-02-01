<?php 
	$itemid=$_POST["itemid"];
	
	include("../db.php");
	$query="delete from itemtb where itemid=$itemid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Delete Success!");window.location.href="index.php?id=itemDelete";</script>';
	}
	else
	{
		echo '<script> alert ("Delete Fail!")</script>';
	}
?>