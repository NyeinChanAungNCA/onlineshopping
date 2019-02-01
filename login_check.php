<?php
session_start();
	$uname=$_POST["uname"];
	$pass=$_POST["pasw"];
	include("db.php");
	$query="select uid from usertb where email='$uname' and password='$pass'";
	$ret=mysqli_query($con,$query);
	$numrow=mysqli_num_rows($ret);
    if($numrow>0) 
       {
	   $row=mysqli_fetch_array($ret);
	    $_SESSION["uid"]=$row["uid"];
        echo "<script>alert('Login Success!');window.location.href='itemshow.php';</script>";
       }
    else 
       {
            echo "<script>alert('Please Register!');window.location.href='Register.php'</script>";
       }
    mysqli_close($con); 
?>