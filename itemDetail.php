<?php
	session_start();
	//check login or not
	if(isset($_SESSION['uid']))
	{
		$itemid=$_GET['itemid'];
	}
	else{
		header("location:index.php");
	}
	//Add to Cart
	if(isset($_POST['cart']))
	{      
	// create array to put session
    	$detail=array('itemid'=>$itemid,'qty'=>$_POST['qty']);
             if(isset($_SESSION['cart']))
			 {
        		$cartArray=$_SESSION['cart'];
        		for($i=0;$i<sizeof($cartArray);$i++)
				{
					if($cartArray[$i]['itemid']==$itemid)
					{  
						$cartArray[$i]['qty']=$cartArray[$i]['qty']+$_POST['qty'];
						break;
					}
					else
					{
						array_push($cartArray, $detail);
						break;
					}
				}
				$_SESSION['cart']=$cartArray;
			}
			else{
				//if no session, create a new cart session
				$cartArray=array();
				array_push($cartArray, $detail);
				$_SESSION['cart']=$cartArray;
			}   
			header("location:itemshow.php");
        }
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
		
		<div id="bookingDetail">
			<div id="bookingDetail">
				<?php 
				if(isset($_SESSION["uid"]))
				{
					include("db.php");
					$itemid=$_GET["itemid"];
					$query="select itemid,description,price,image,branddescription from itemtb i,brandtb b where i.itemid=$itemid and i.brandid=b.brandid";
					$ret=mysqli_query($con,$query);
					$num_result=mysqli_num_rows($ret);
					$row=mysqli_fetch_array($ret);
					?>
					<form method="post" action="#">
					<input type="hidden" name="itemid" value="<?php echo $row["itemid"];?>">
					<table border='0' class="bDetailTable">
						<tr> 
							<td colspan="2">
								<img src="images/<?php echo $row['image']?>" width="300px" height="200px" style="border:2px solid #999;"/>
							</td>
						</tr>
						<tr>
							<td>
								<label><b>Price:</b></label>
							</td>
							<td>
							$<?php echo $row['price']?>
							</td>
						</tr>
						<tr>
							<td>
								<label><b>Description:</b></label></td>
							<td><?php echo $row['description']?></td>
							
						</tr>
						<tr>
							<td align="left">
								<label><b>Brand:</b></label>
							</td>
							<td><?php echo $row['branddescription']?></td>
						</tr>
						<tr>
						<td><b>Quantity:</b></td>
							<td>
								<input type="number" name="qty" size="20" style="height:30px;" min="0" max="100" value="0">
							</td>
						</tr>
						<tr>
						   <td height="50px">
								<input type="submit" value="Add To Cart >>" class="btnstyle" name="cart">
						  </td>
					   </tr>
					<?php
					?>
					</table>
					</form>
					<?php
					}
					else
					{
						echo '<script>alert("Please Login!");</script>';
						include("index.php");
					}
					
					?>
			</div>
		</div>
            <div class="clear"></div>
		
		<div id="footer">
			<?php 
				include("footer.php");
			?>
		</div>
	
	</div>
</body>
</html>
