<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
	<script type="text/javascript" src="../javascript/all.js"></script>
</head>
<body bgcolor="#CC9999">
	<div id="container">
		<div id="header">
			<?php 
				include("header.php");
			?>
		</div>
		<div id="menu">
			<?php 
				include("Admin_menu.php");
			?>
		</div>
		<div id="main" style="height:auto">
			<?php
			if(isset($_SESSION["adminid"]))
			{
			  if(isset($_GET["id"]))
			  {
			  	$id=$_GET["id"];
				
			  if($id=="Insert")
				{
					include("insert.php");
				}
				else if($id=="Update")
				{
					include("update.php");
				}
				else if($id=="Delete")
				{
					include("delete.php");
				}
				else if($id=="view")
				{
					include("view.php");
				}
			  }
			 }
			 else
			 {
				include("adminlogin.php");
			 }
			?>
			<marquee><h2>Welcome To Admin Panel!</h2></marquee>
		</div>
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	</div>
</body>
</html>