<?php
	
	$username=$_POST['name'];
	$password=$_POST['pass'];
	$email=$_POST['email'];
	$country=$_POST['country'];
	$gender=$_POST['sex'];
	$phone=$_POST['phone'];
	
	include("db.php");
	$query="insert into usertb(username,password,email,country,gender,phoneno) 
			values('$username','$password','$email','$country','$gender','$phone')";
			
			// echo $query;
	$ret=mysqli_query($query,$con);
    if($ret) 
       {
        /*echo "<script>window.location.href='index.php'</script>";*/
       }
    else 
       {
           /* echo "<p>Something went wrong: ", mysqli_error() + "</p>";*/
       }
    mysqli_close($con);
?>