<?php
session_start();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="JQueryCSS/style_common.css"/>
    <link rel="stylesheet" type="text/css" href="JQueryCSS/style1.css"/>
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
		
		<div id="bookingShow">
			<div id="main">
				<div style="width: 1030px; height: auto;margin:0 auto;">
				<?php 
				
					include("db.php");
					
					if(isset($_GET["brandid"]))
					{
						$brandid=$_GET["brandid"];
						$query="SELECT * FROM itemtb where brandid=$brandid";
					}
					else if(isset($_GET["categoryid"]))
					{
						$catid=$_GET["categoryid"];
						$query="SELECT * FROM itemtb where categoryid=$catid";
					}
					else
						$query="SELECT * FROM itemtb limit 6";
					$ret=mysqli_query($con,$query);
					$num_result=mysqli_num_rows($ret);
					?>
					
					<?php 
						  for ($i=0; $i<$num_result; $i++)
						  {
							  $row=mysqli_fetch_array($ret);
					?>
                    <div class="view view-first">
                    	<img src="images/<?php echo $row['image']?>" width="270px" height="200px"/>
                        <div class="mask">
                        	<h2>View Detail</h2>
                        	<p>Price:&nbsp;$<?php echo $row['price']?></p>
                        	<a href="itemDetail.php?itemid=<?php echo $row['itemid']?>" class="info">Details</a>
                        </div>
                    </div>
					<!--<table border='0' style='margin-top:20px; margin-right:10px; float:left;'>
						<tr> 
							<td>
							<a href="itemDetail.php?itemid=<?php echo $row['itemid']?>">
								<img src="../images/<?php echo $row['image']?>" width="250px" height="180px" 
										style="margin-left:45px; border:2px solid #999;"/></a>
							</td>
						</tr>
						<tr>
							<td align="center">
							Price:&nbsp;$<?php echo $row['price']?>
							</td>
						</tr>
						<tr>
							<td align="center">
								<a href="itemDetail.php?itemid=<?php echo $row['itemid']?>">Details</a>
							</td>
						</tr>
                        </table>-->
					<?php
						  }
						  
					?>
					</div>
			</div>
		</div>
		
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	
	</div>
</body>
</html>
