<?php 
	$brandid=$_POST["brandid"];
	$categoryid=$_POST["categoryid"];
	$price=$_POST["price"];
	$qty=$_POST["qty"];
	$description=$_POST["des"];
	$image=$_FILES["image"]["name"];
	
	include("db.php");
	$query="insert into itemtb(brandid,categoryid,price,quantity,image,description) values($brandid,$categoryid,$price,$qty,'$image','$description')";
	
	$ret=mysqli_query($con,$query);
	if($ret>0)
	 {
	 	move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$_FILES["image"]["name"]);
			
	 	echo '<script> alert ("Success!!");window.location.href="index.php?id=itemInsert";
		</script>';
	 }
	 else
	 {
	 		echo '<script> alert ("Fail!!")</script>';
	 }
?>