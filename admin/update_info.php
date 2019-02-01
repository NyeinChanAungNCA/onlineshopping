<?php 
	$itemid=$_POST["itemid"];
	$price=$_POST["price"];
	$desc=$_POST["desc"];
	
	include("db.php");
	$query="update itemtb set price=$price,description='$desc' where itemid=$itemid";
	
	//echo $query;
	$ret=mysqli_query($con,$query);
	if($ret>0)
	{
		echo '<script> alert ("Update Success!");window.location.href="index.php?id=Update";</script>';
	}
	else
	{
		echo '<script> alert ("Update Fail!")</script>';
	}
?>