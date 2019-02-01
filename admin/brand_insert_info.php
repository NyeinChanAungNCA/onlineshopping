<?php 
	$brandname=$_POST["brandname"];
	
	include("db.php");
	$query="insert into brandtb(branddescription) values('$brandname')";
	
	$ret=mysqli_query($con,$query);
	if($ret>0)
	 {
	 	echo '<script> alert ("Success!!");window.location.href="index.php?id=brandInsert";
		</script>';
	 }
	 else
	 {
	 		echo '<script> alert ("Fail!!")</script>';
	 }
?>