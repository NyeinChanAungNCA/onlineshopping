<?php
session_start();
//unset($_SESSION['cart']);
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
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
		<?php
			if(isset($_SESSION["cart"]) && isset($_SESSION["uid"]))
			{
				$salesdate=Date("Y-m-d");
				$userid=$_SESSION["uid"];
				$itemarray=$_SESSION["cart"];
				foreach($itemarray as $item):
					$itemid=$item["itemid"];
					$qty=$item["qty"];
					$query="update itemtb set quantity=quantity-$qty where itemid=$itemid";
					$result=mysqli_query($query);
					$query="insert into salestb(itemID,quantity,userID,salesDate) values($itemid,$qty,$userid,'$salesdate')";
					$result=mysqli_query($query);
				endforeach;
			unset($_SESSION['cart']);
			header("Location:buy_success.php");
			}
			else{
		?>        
		<div id="bookingDetail">
			<div id="bookingDetail" style="height:300px">
            	<h1 align="center">Thank For Buying</h1>
			</div>
		</div>
        <?php
			}
		?>
        <div class="clear"></div>
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	</div>
</body>
</html>
