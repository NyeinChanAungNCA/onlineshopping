<?php session_start();?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script type="text/javascript" src="jquery/chili-1.js"></script>
 	<script type="text/javascript" src="jquery/cycle-plugin.js"></script>
	<script type="text/javascript" src="jquery/jquery_image.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<?php
				include("header.php");
			?>
		</div>
		
		<div id="menu">
			<?php 
				include("menu.php");
			?>
		</div>
		<div id="main">
            <div id="demos" style="margin:0 auto;">
                <div style="position: relative;" id="slideshow" class="pics">
                <?php
					include("db.php");
					$query="select image from itemtb";
					$result=mysqli_query($con,$query);
					while($row=mysqli_fetch_array($result)):
						echo '<img src="images/'.$row['image'].'" style="display:none">';
					endwhile;
				?>
                </div>
    		</div>
            <div class="clear"></div>
			<?php 
			
		if(!isset($_SESSION["uid"])){
				include("login.php");
		}
			?>
            
		</div>
		
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	</div>
</body>
</html>
