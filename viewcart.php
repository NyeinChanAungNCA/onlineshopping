<?php
	session_start();
	if(sizeof($_SESSION['cart'])==0 || !isset($_SESSION["uid"]))
	{
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
		
		<div id="main">
			<div id="bookingDetail">
            <h2 align="center">Your's Cart Item are Here:</h2>
            <table border='1' width="700px" align="center">
            <tr bgcolor="#666666" style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:20px;">
            	<th>Brand</th>
                <th>Category</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
				<?php 
				include("db.php");
			
				if(isset($_GET['removeid'])) 
				{
					$rid= $_GET['removeid'];
					for($i=0;$i<sizeof($_SESSION['cart']);$i++)
					{
						if($_SESSION['cart'][$i]['itemid']==$rid)
						{
							unset($_SESSION['cart'][$i]);
						}
					}
					unset($_SESSION['cart'][$rid]);
				}
				
				$totalprice=0;
				$itemarray = $_SESSION['cart'];
				foreach($itemarray as $itid):
				//echo $id;
				$itemid=$itid['itemid'];
				$query="select itemid,price,branddescription,categorydescription from itemtb i,brandtb b,categorytb c where i.itemid=$itemid and i.brandid=b.brandid and i.categoryid=c.categoryid";
				
				//echo $query;
				$ret=mysqli_query($con,$query);
				//echo $ret;
				$row=mysqli_fetch_array($ret);
				$totalprice +=$row["price"]*$itid['qty'];
				$tprice=$row["price"]*$itid['qty'];
				?>
				<form>
                <tr align="center">
                	<td><?php echo $row['branddescription']?></td>
                    <td><?php echo $row['categorydescription']?></td>
                    <td><?php echo $itid['qty']?></td>
                    <td>$<?php echo $row['price']?></td>
                    <td>$<?php echo $tprice?></td>
                    <td>
                    	<a href="viewcart.php?removeid=<?php echo $itemid; ?>" id="remove">X</a>
                    </td>
                </tr>
				</form>
                <?php 
				  endforeach;
				 if(isset($_GET["id"]))
				{
					unset($_SESSION['cart']);
					header("Location:index.php");
				}
				?>
                <tr align="center">
                	<th colspan="4">Total Amount</th>
                    <th  bgcolor="#666666">$<?php echo $totalprice?></th>
                    <td></td>
                </tr>
                </table>
               
                <p><b>Enter Account No:</b><input type="text" placeholder="account no" size="30" style="height:30px;">
                <a href="buy_success.php" class="btnstyle">Buy</a>
                <a href="viewcart.php?id=clear" class="btnstyle">Clear Cart<a/>
              
                </p>
               <p>
                <a href="itemshow.php?brandid=1" class="shopping">&lt; &lt;Continue Shopping</a>
               
                </p>
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
