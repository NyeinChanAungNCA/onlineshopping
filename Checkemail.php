<?php
$email=$_GET["email"];

 include("db.php");
$str="SELECT email FROM usertb WHERE email='$email'";

$res=mysql_query($str,$con);
if(mysql_num_rows($res) > 0)
{   
	echo "Invalid Email!";
}
else
{
	echo "";
}
?>
