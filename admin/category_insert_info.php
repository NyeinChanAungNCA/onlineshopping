<?php 
	$categoryname=$_POST["categoryname"];
	
	include("db.php");
	$query="insert into categorytb(categorydescription) values('$categoryname')";
	
	$ret=mysqli_query($con,$query);
	if($ret>0)
	 {
	 	echo '<script> alert ("Success!!");window.location.href="index.php?id=categoryInsert";
		</script>';
	 }
	 else
	 {
	 		echo '<script> alert ("Fail!!")</script>';
	 }
?>