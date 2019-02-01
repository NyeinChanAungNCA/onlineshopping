<?php
session_start();
$id=$_GET["itemid"];
$_SESSION["cart"][$id]++;
$cart=0;
if(isset($_SESSION["cart"]))
{
foreach($_SESSION["cart"] as $qty):
	$cart +=$qty;

endforeach;
}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
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
            <h2 align="center">Your's Item:</h2>
            <table border='1' width="700px" align="center">
            <tr bgcolor="#666666">
            	<th>Brand</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <!--<th>Remove</th>-->
            </tr>
				<?php 
				include("db.php");
				//$itemid=$_GET["itemid"];
				//$qty=$_GET["qty"];
				$totalprice=0;
				foreach($_SESSION["cart"] as $id =>$qty):
				//echo $id;
				$query="select itemid,price,branddescription,categorydescription from itemtb i,brandtb b,categorytb c where i.itemid=$id and i.brandid=b.brandid and i.categoryid=c.categoryid";
				
				//echo $query;
				$ret=mysqli_query($con,$query);
				//echo $ret;
				$row=mysqli_fetch_array($ret);
				$totalprice +=$row["price"]*$qty;
				$tprice=$row["price"]*$qty;
				?>
				<form>
                <tr align="center">
                	<td><?php echo $row['branddescription']?></td>
                    <td><?php echo $row['categorydescription']?></td>
                    <td><?php echo $qty?></td>
                    <td>$<?php echo $row['price']?></td>
                    <td>$<?php echo $tprice?></td>
                    <!--<td><a href="#">Delete</a></td>-->
                </tr>
				</form>
                <?php 
				  endforeach;
				?>
                <tr align="center">
                	<td colspan="4"></td>
                    <td>$<?php echo $totalprice?></td>
                    <!--<td></td>-->
                </tr>
                </table>
                <div class="accno_div">
                	<label for="accno"><b>Enter Account No:</b><input type="text" placeholder="account no"></label>
                    <ul class="buybtn">
                    	<li>
                    		<a href="buy_success.php">Buy</a>
                        </li>
                    </ul>
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
