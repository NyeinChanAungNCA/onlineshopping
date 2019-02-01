<?php 
session_start();
$name=$_POST["uname"];
$password=$_POST["pwd"];
if($name=="admin@gmail.com" && $password=="admin")
	{
		$_SESSION["adminid"]=0;
		echo '<script>alert("login success");window.location.href="index.php?id=view";</script>';
	}
else
{
	echo '<script>alert("login Fail");window.location.href="index.php";</script>';
}
?>