<?php 
	$brandid=$_POST["brandid"];
	$categoryid=$_POST["categoryid"];
	$price=$_POST["price"];
	$description=$_POST["des"];
	$image=$_FILES["image"]["name"];
	
	include("db.php");
	$query="insert into itemtb(brandid,categoryid,price,image,description) values($brandid,$categoryid,$price,'$image',
	'$description')";
	
	$ret=mysqli_query($con,$query);
	if($ret>0)
	 {
	 	move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$_FILES["image"]["name"]);
			
	 	echo '<script> alert ("Success!!");window.location.href="index.php?id=Insert";
		</script>';
	 }
	 else
	 {
	 		echo '<script> alert ("Fail!!")</script>';
	 }
?>